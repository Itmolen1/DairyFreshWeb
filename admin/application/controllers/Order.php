<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Order extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('order_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }    
  
    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.'service request';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }    
  
    function order_listing()
    {   
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');

        $count = $this->order_model->orderListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		$returns = $this->paginationCompress ( "orderListing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        $data['servicesRecords'] = $this->order_model->orderListing($searchText, $returns["page"], $returns["segment"]);
        //echo "<pre>";print_r($data);die;
        $this->global['pageTitle'] = APP_NAME.' : Sub services Listing';
        $this->loadViews("order_list_view", $this->global, $data, NULL);
    }

    function get_suborder_details()
    {
        $value=$this->input->post();
        $result=$this->order_model->get_suborder_details($value['data']);
        $data['finalresult']=$this->get_suborder_final_list_string($result['result']);
        if($result['status']['status']==0)
        {
            $data['sr_id']='<a href="'.base_url().'sr_admin_accept/'.$value['data'].'"'.'<button type="button" value="Assign" class="btn btn-success test">Accept</button></a><a href="'.base_url().'sr_admin_reject/'.$value['data'].'"'.'<button type="button" value="Assign" class="btn btn-danger test">Reject</button></a>';
        }
        else
        {
            $data['sr_id']='<button type="button" value="Assign" class="btn btn-success test" disabled>Accept</button><button type="button" value="Assign" class="btn btn-danger test" disabled>Reject</button>';
        }
        
        echo json_encode($data);
    }

    function sr_admin_accept()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result=$this->order_model->update_one_to_sr_id($record_num);
        //send notification to user
        //first get user's all of devices from sr id 
        $input['sr_id']=$record_num;
        $devlist=$this->order_model->get_user_all_dev_by_sr_id($input['sr_id']);
        $data['emp']=$this->order_model->get_emp_details($devlist['assigned_emp_id']);
        $data['user']=$this->order_model->get_user_details_by_sr_id($input['sr_id']);
        //echo "<pre>";print_r($devlist);die;
        $msg='Hello '.$data['user']['tbl_user_name'].' your order'.$devlist['order_ref'].'. is accpted and processed.';
        $this->order_model->insert_user_notification($input['sr_id'],$msg,$data['user']['tbl_user_id']); 
        if(isset($devlist['assigned_emp_id']) && !empty($devlist['Android']))
        {
            // send notifications to android devices if any
            $alltokens=array_column($devlist['Android'], 'tbl_user_device_token');
            $this->Android_emp_accept_user_notification($alltokens,$msg);                                       
        }
        if(isset($devlist['assigned_emp_id']) && !empty($devlist['iOS']))
        {
            // send notifications to iOS devices if any
            $alltokens=array_column($devlist['iOS'], 'tbl_user_device_token');
            for($i=0;$i<count($alltokens);$i++)
            {
                $this->iOS_emp_accept_user_notification($msg,$alltokens[$i],$input['sr_id']);
            }
        }
        redirect('order_listing');
    }

    function sr_admin_reject()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result=$this->order_model->update_two_to_sr_id($record_num);
        //send notification to user
        //first get user's all of devices from sr id 
        $input['sr_id']=$record_num;
        $devlist=$this->order_model->get_user_all_dev_by_sr_id($input['sr_id']);
        $data['emp']=$this->order_model->get_emp_details($devlist['assigned_emp_id']);
        $data['user']=$this->order_model->get_user_details_by_sr_id($input['sr_id']);
        //echo "<pre>";print_r($devlist);die;
        $msg='Hello '.$data['user']['tbl_user_name'].' your order'.$devlist['order_ref'].'. is Rejected by admin you can contact us on our helpline number.';
        $this->order_model->insert_user_notification($input['sr_id'],$msg,$data['user']['tbl_user_id']); 
        if(isset($devlist['assigned_emp_id']) && !empty($devlist['Android']))
        {
            // send notifications to android devices if any
            $alltokens=array_column($devlist['Android'], 'tbl_user_device_token');
            $this->Android_emp_accept_user_notification($alltokens,$msg);                                       
        }
        if(isset($devlist['assigned_emp_id']) && !empty($devlist['iOS']))
        {
            // send notifications to iOS devices if any
            $alltokens=array_column($devlist['iOS'], 'tbl_user_device_token');
            for($i=0;$i<count($alltokens);$i++)
            {
                $this->iOS_emp_accept_user_notification($msg,$alltokens[$i],$input['sr_id']);
            }
        }
        redirect('order_listing');
    }

    function get_suborder_final_list_string($rows)
    {
        $finalresult='';
        for($i=0;$i<count($rows);$i++)
        {
            $finalresult.='<div class="row"><div class="col-md-3">Name : '.$rows[$i]['item_master_name'].'</div><div class="col-md-3"><img src="'.$rows[$i]['item_master_logo'].'" height="100" width="100"></div><div class="col-md-2">QTY : '.$rows[$i]['item_qty'].'</div></div>';
        }
        return $finalresult;
    }

    function track_order()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        if(is_numeric($record_num))
        {
            $data['sr_id']=$record_num;
            $data['action']='track_order';
            $this->global['pageTitle'] = APP_NAME.' : Tracking';
            $this->loadViews("order_track_view",$this->global,$data,NULL);
        }
        else
        {
            redirect('order_listing');
        }
    }

    function detailed_status_order()
    {
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        if(is_numeric($record_num))
        {
            $data['sr_id']=$record_num;
            $data['sr_details']=$this->order_model->get_details_by_sr_id($record_num);
            //echo "<pre>";print_r($data);die;
            $this->global['pageTitle'] = APP_NAME.' : Status';
            $this->loadViews("detailed_status_order_view",$this->global,$data,NULL);
        }
        else
        {
            redirect('order_listing');
        }
    }

    function get_latest_cordinates()
    {
        $value=$this->input->post();
        $result=$this->order_model->get_latest_cordinates($value['data']);
        echo json_encode($result);
    }

    function edit_order()
    {
        if($this->input->post())
        {
            $value=$this->input->post();
            //echo "<pre>sss";print_r($value);die;
            $result = $this->order_model->edit_order($value);
            // send notification to only android devices
            if($value['assigned_emp_id'])
            {
                //send notification to employee
                $empdev=$this->order_model->get_emp_dev_detail_by_sr_id($value['sr_id']);
                //echo "<pre>";print_r($empdev);die;
                $empmsg='Alert ! you have one new order.';
                if($empdev['tbl_emp_device_type']=='iOS')
                {
                    $this->iOS_emp_accept_user_notification($empmsg,$empdev['tbl_emp_device_token'],$value['sr_id']);
                }
                else if($empdev['tbl_emp_device_type']=='Android')
                {
                    $this->Android_Employee_notification($empdev['tbl_emp_device_token'],$empmsg);
                }
            }
            redirect('order_listing');
        }
        else
        {
            $last = $this->uri->total_segments();
            $id = $this->uri->segment($last);
            $result=$this->order_model->get_order_info($id);
            $data['sr'] = $result['sr'];
            $data['result'] = $result['service_ids'];
            $data['emp'] = $this->order_model->get_eligible_emp_list($result['service_ids'][0]['service_id']);
            $data['action']='edit_order';
            $this->global['pageTitle'] = APP_NAME.' : Edit service request';
            //echo "<pre>";print_r($data);die;
            $this->loadViews("add_new_order", $this->global, $data, NULL);
        }           
    }

    public function Android_Employee_notification($alltokens,$msg)
    {
        $registrationIds = array($alltokens);
        $msg=array('message'=> $msg,'title'=>'Notification','subtitle'=>'','vibrate'=>1,'sound'=>'default','largeIcon'=>'large_icon');
        $fields=array('registration_ids'=>$registrationIds,'data'=>$msg);
        $headers=array('Authorization: key='.API_ACCESS_KEY,'Content-Type: application/json');
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );       
        //echo $result;die;
    }

    public function iOS_emp_accept_user_notification($msg,$token,$sr_id)
    {
        $registrationIds = $token;

        //$fields = array('to'=>$registrationIds,'notification'=>array('title'=>'wahidfix','body'=>$msg));
        $fields = array('to'=>$registrationIds,'notification'=>array('title'=>'wahidfix','body'=>$msg,'sound'=>'default','sr_id'=>$sr_id));
        //echo json_encode($fields);die;
        $headers = array('Authorization: key=' . API_ACCESS_KEY,'Content-Type: application/json');
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );       
        //echo $result;die;
    }

    public function Android_emp_accept_user_notification($alltokens,$msg)
    {
        $registrationIds = $alltokens;
        // prep the bundle
        $msg = array
        (
            'message'   => $msg,
            'title'     => 'Notification',
            'subtitle'  => '',
            'vibrate'   => 1,
            'sound'     => 'default',
            'largeIcon' => 'large_icon'
        );
        $fields = array
        (
            'registration_ids'  => $registrationIds,
            'data'          => $msg
        );
         
        $headers = array
        (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        //echo "<pre>";print_r($result);die;       
    }

    public function Android($row,$row1,$sr_id,$order_ref)
    {
        $token_id=$row['tbl_user_device_token'];
        //echo "<pre>";print_r($token_id);die;
        $registrationIds = array($token_id);
        // prep the bundle
        $msg = array
        (
            'message'   => 'Hello '.$row['tbl_user_name'].' Our employee '.$row1['tbl_employee_name'].' is Assigned for your service order no '.$order_ref.'. He will reach you ASAP',
            'title'     => 'Notification',
            'subtitle'  => '',
            'vibrate'   => 1,
            'sound'     => 1,
            'largeIcon' => $row1['tbl_employee_image']
        );
        //echo "<pre>";print_r($msg);die;
        $this->order_model->insert_user_notification($sr_id,$msg['message'],$row['tbl_user_id']);
        
        $fields = array
        (
            'registration_ids'  => $registrationIds,
            'data'          => $msg
        );
         
        $headers = array
        (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        //echo "<pr>";print_r($fields);die;
         
        $ch = curl_init();
        curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
        curl_setopt( $ch,CURLOPT_POST, true );
        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
        $result = curl_exec($ch );
        curl_close( $ch );
        //echo $result;die;
    }    
    
    function delete_order()
    {       
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result = $this->order_model->delete_order($record_num);
        redirect('order_listing');        
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>