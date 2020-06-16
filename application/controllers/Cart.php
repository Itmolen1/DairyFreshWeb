<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('global_model');
    }

	public function index()
	{
		
		$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $data['categories']=$this->global_model->get_categories_list();
		//$data['products']=$this->global_model->get_category_details($record_num);
		$data['pros']=$this->global_model->get_all_products();
		//echo "<pre>tt";print_r($data);die;
		$data['slider']=$this->global_model->get_slider_list();
		//echo "<pre>";print_r($data);die;
		$this->load->view('inc/header',$data);
		$this->load->view('checkout_view',$data);
		$this->load->view('inc/footer');
	}

	public function add()
	{
		$val=$this->input->post();

		if(get_cookie('shopping_cart')!='')
		{
			$cookie_data=stripcslashes(get_cookie('shopping_cart'));
			$cart_data=json_decode($cookie_data,true);
		}
		else
		{
			$cart_data=array();
		}

		$item_list_id=array_column($cart_data,'item_master_id');
		if(in_array($val['item_master_id'], $item_list_id))
		{
			foreach($cart_data as $keys=>$values)
			{
				if($cart_data[$keys]['item_master_id']==$val['item_master_id'])
				{
					if($cart_data[$keys]['item_qty']<5)
					{
						$cart_data[$keys]['item_qty']+=1;
						$this->session->set_userdata('cart_message','Item Successfully Added To Cart.');
					}
					else
					{
						$this->session->set_userdata('cart_message','You have reached max allowed quantity for this Item.');
					}
				}
			}
		}
		else
		{
			$item_array=array(
				'item_master_id'=>$val['item_master_id'],
				'item_master_name'=>$val['item_master_name'],
				'item_master_url_slug'=>$val['item_master_url_slug'],
				'item_master_unit'=>$val['item_master_unit'],
				'item_master_price'=>$val['item_master_price'],
				'item_master_logo'=>$val['item_master_logo'],
				'item_qty'=>$val['item_qty'],
			);
			$cart_data[]=$item_array;
			$this->session->set_userdata('cart_message','Item Successfully Added To Cart.');
		}
		$item_data=json_encode($cart_data);
		set_cookie('shopping_cart',$item_data,time()+(86400*30));
		if ($this->agent->is_referral())
		{
			redirect($this->agent->referrer());
		}
	}

	public function inc()
	{
		$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);

        if(get_cookie('shopping_cart')!='')
		{
			$cookie_data=stripcslashes(get_cookie('shopping_cart'));
			$cart_data=json_decode($cookie_data,true);
		}
		else
		{
			$cart_data=array();
		}

		$item_list_id=array_column($cart_data,'item_master_id');
		if(in_array($record_num, $item_list_id))
		{
			foreach($cart_data as $keys=>$values)
			{
				if($cart_data[$keys]['item_master_id']==$record_num)
				{
					$cart_data[$keys]['item_qty']+=1;
				}
			}
		}

		$item_data=json_encode($cart_data);
		set_cookie('shopping_cart',$item_data,time()+(86400*30));
		$this->session->set_userdata('cart_message','1 Quantity Successfully Added.');
		if ($this->agent->is_referral())
		{
			redirect($this->agent->referrer());
		}
	}

	public function dec()
	{
		$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);

        if(get_cookie('shopping_cart')!='')
		{
			$cookie_data=stripcslashes(get_cookie('shopping_cart'));
			$cart_data=json_decode($cookie_data,true);
		}
		else
		{
			$cart_data=array();
		}

		$item_list_id=array_column($cart_data,'item_master_id');
		if(in_array($record_num, $item_list_id))
		{
			foreach($cart_data as $keys=>$values)
			{
				if($cart_data[$keys]['item_master_id']==$record_num)
				{
					$cart_data[$keys]['item_qty']-=1;
				}
			}
		}
		
		$item_data=json_encode($cart_data);
		set_cookie('shopping_cart',$item_data,time()+(86400*30));
		$this->session->set_userdata('cart_message','1 Quantity Successfully Removed.');
		if ($this->agent->is_referral())
		{
			redirect($this->agent->referrer());
		}
	}

	public function delete_item()
	{
		$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);

        if(get_cookie('shopping_cart')!='')
		{
			$cookie_data=stripcslashes(get_cookie('shopping_cart'));
			$cart_data=json_decode($cookie_data,true);

			foreach($cart_data as $keys=>$values)
			{
				if($cart_data[$keys]['item_master_id']==$record_num)
				{
					unset($cart_data[$keys]);
					$item_data=json_encode($cart_data);
					set_cookie('shopping_cart',$item_data,time()+(86400*30));
					$this->session->set_userdata('cart_message','Item Successfully Removed.');
					if ($this->agent->is_referral())
					{
						redirect($this->agent->referrer());
					}
				}
			}
		}
	}

	public function clear_cart()
	{
		set_cookie('shopping_cart',"",time()-(86400*30));
		$this->session->set_userdata('cart_message','Cart Cleared.');
		if ($this->agent->is_referral())
		{
			redirect($this->agent->referrer());
		}
	}
}