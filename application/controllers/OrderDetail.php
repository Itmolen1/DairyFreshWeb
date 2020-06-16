<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OrderDetail extends CI_Controller {

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
        $data['order_detail']=$this->global_model->get_order_detail_by_ref_no($record_num);
        $data['order_items']=$this->global_model->get_order_items_by_ref_no($record_num);
        //echo "<pre>";print_r($data);die;
        if(!empty($data['order_detail']) && !empty($data['order_items']))
        {
        	$this->load->view('inc/header',$data);
	        $this->load->view('order_detail_view',$data);
	        $this->load->view('inc/footer',$data);	
        }
        else
        {
        	redirect('404_override');
        }        
	}

    public function List()
    {
        $data['categories']=$this->global_model->get_categories_list();
        $data['my_orders']=$this->global_model->get_my_order_list();
        $this->load->view('inc/header',$data);
        $this->load->view('order_list_view',$data);
        $this->load->view('inc/footer',$data);
    }
}