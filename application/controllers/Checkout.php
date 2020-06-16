<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('global_model');
    }

	public function index()
	{
        $data['categories']=$this->global_model->get_categories_list();
		$data['action']='register/add';
		$this->load->view('inc/header',$data);
		$this->load->view('checkout_view',$data);
		$this->load->view('inc/footer',$data);
	}

	public function add()
	{
		//echo "<pre>hi";print_r($this->input->post());die;
		if($this->input->post())
        {
            $value=$this->input->post();
            //echo "<pre>";print_r($value);die;
            $tbl_user_name=$this->security->xss_clean($this->input->post('tbl_user_name'));
            $tbl_user_mobile=$this->security->xss_clean($this->input->post('tbl_user_mobile'));
            $tbl_user_email=$this->security->xss_clean($this->input->post('tbl_user_email'));
            $tbl_user_password=$this->security->xss_clean($this->input->post('password'));
           	$value = array('tbl_user_name'=>$tbl_user_name,'tbl_user_mobile'=>$tbl_user_mobile,'tbl_user_email'=>$tbl_user_email,'tbl_user_password'=>$tbl_user_password,'tbl_user_platform'=>0,'tbl_user_createdat'=>date('Y-m-d H:i:s'),'tbl_user_updatedat'=>date('Y-m-d H:i:s'),'tbl_user_latitude'=>00.0000,'tbl_user_longitude'=>00.0000,'tbl_user_image'=>'http://wahidfix.com/admin/assets/user_profile/default.jpg');
           	//echo "<pre>";print_r($value);die;
            $result = $this->register_model->add($value);
            //echo "fasd<pre>";print_r($result);die;
            $this->session->set_userdata('suc_register', 'Successfully Registered.');
            //echo "<pre>";print_r($this->session->userdata);die;
            redirect('login');
        }
        else
        {
            redirect('register');
        }
	}

    public function Proceed()
    {
        $result=$this->isLoggedIn();
        //echo "here".$result;die;
        if(isset($this->session->userdata['user']))
        {
            
            //redirect to address page for address selection
            $data['categories']=$this->global_model->get_categories_list();
            $data['address_list']=$this->global_model->get_address_list_by_user_id($this->session->userdata['user']['userId']);
            $data['action']='Checkout/Payment';
            $this->load->view('inc/header',$data);
            $this->load->view('delivery_view',$data);
            $this->load->view('inc/footer',$data);

        }
        else
        {
            redirect(base_url().'login');
        }
    }

    public function Payment()
    {
    	$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        if(is_numeric($record_num))
        {
        	//set selected delivery address into session and show payment page
        	$this->session->set_userdata('user_delivery_address_id',$record_num);
        	//echo "<pre>";print_r($this->session->all_userdata());die;
        	$data['categories']=$this->global_model->get_categories_list();
            $data['action']='Checkout/Payment';
            $this->load->view('inc/header',$data);
            $this->load->view('payment_view',$data);
            $this->load->view('inc/footer',$data);
        }
        else
        {
        	redirect(base_url().'login/getlogout');
        }
    }

    public function PaymentProceed()
    {
    	$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        if($record_num!='')
        {
        	if($record_num=='COD')
        	{
        		//get cookie data and address id from session and create the order
        		if(get_cookie('shopping_cart')!='')
				{
					$cookie_data=stripcslashes(get_cookie('shopping_cart'));
					$cart_data=json_decode($cookie_data,true);
					$grand_total=0.0;
					foreach ($cart_data as $keys => $values)
                    {
                    	$grand_total+=($values['item_master_price']*$values['item_qty']);
                    }
                    //place order
                    $order_ref_no=$this->global_model->place_order($cart_data,$grand_total,$payment_method=0,$returndata=null);
                    //reset cookie and delivery address session
                    set_cookie('shopping_cart',"",time()-(86400*30));
                    $this->session->unset_userdata('user_delivery_address_id');

                    //get order full details and redirect to ordre detail page
                    redirect(base_url().'OrderDetail/'.$order_ref_no);
				}
				else
				{
					$cart_data=array();
					redirect(base_url().'login/getlogout');
				}
        	}
        	else if($record_num=='ONLINE')
        	{
        		//check for the payment status and then get cookie data and address id from session and create the order
        		if(get_cookie('shopping_cart')!='')
				{
					$cookie_data=stripcslashes(get_cookie('shopping_cart'));
					$cart_data=json_decode($cookie_data,true);
					//echo "<pre>";print_r($cart_data);die;
                    $data['categories']=$this->global_model->get_categories_list();
                    $data['action']='Checkout/Payment';
                    $data['cart_data']=$cart_data;
                    $this->load->view('inc/header',$data);
                    $this->load->view('online_payment_view',$data);
                    $this->load->view('inc/footer',$data);
				}
				else
				{
					$cart_data=array();
					redirect(base_url().'login/getlogout');
				}
        	}
        	else
        	{
        		redirect(base_url().'login/getlogout');
        	}
        }
        else
        {
        	redirect(base_url().'login/getlogout');
        }
    }

    public function jsoc()
    {
        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
            //Request hash
            $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';   
            if(strcasecmp($contentType, 'application/json') == 0){
                $data = json_decode(file_get_contents('php://input'));
                //echo "<pre>";print_r($data);die;
                $hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
                $json=array();
                $json['success'] = $hash;
                echo json_encode($json);
            
            }
            exit(0);
        }
    }

    public function OnlinePaymentSuccess()
    {
        $returndata=$this->input->post();
        // echo "<pre>";print_r($returndata);die;
        // echo "online payment Successfully done";die;
        if($returndata['txnStatus']==='SUCCESS')
        {
            $cookie_data=stripcslashes(get_cookie('shopping_cart'));
            $cart_data=json_decode($cookie_data,true);
            $grand_total=0.0;
            foreach ($cart_data as $keys => $values)
            {
                $grand_total+=($values['item_master_price']*$values['item_qty']);
            }
            //place order
            $order_ref_no=$this->global_model->place_order($cart_data,$grand_total,$payment_method=1,$returndata);
            //reset cookie and delivery address session
            set_cookie('shopping_cart',"",time()-(86400*30));
            $this->session->unset_userdata('user_delivery_address_id');

            //get order full details and redirect to ordre detail page
            redirect(base_url().'OrderDetail/'.$order_ref_no);
        } 
        else
        {
            redirect(base_url().'Checkout/Payment');
        }       
    }

    public function OnlinePaymentFailure()
    {
        redirect(base_url().'Checkout/Payment');
    }

    public function isLoggedIn()
    {
        $this->global_model->isLoggedIn();
    }
}
