<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Address extends CI_Controller {

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
		$data['products']=$this->global_model->get_category_details($record_num);
		$data['pros']=$this->global_model->get_all_products();
		//echo "<pre>tt";print_r($data);die;
		$data['slider']=$this->global_model->get_slider_list();
		//echo "<pre>";print_r($data);die;
		$this->load->view('inc/header',$data);
		$this->load->view('Category_view',$data);
		$this->load->view('inc/footer');
	}

	public function add()
	{
		if($this->input->post())
		{
			$value=$this->input->post();
			$lid=$this->global_model->address_add($value);
			redirect(base_url().'Checkout/Proceed');
		}
		else
		{
			$data['categories']=$this->global_model->get_categories_list();
            $data['action']='Address/add';
            $this->load->view('inc/header',$data);
            $this->load->view('address_form_view',$data);
            $this->load->view('inc/footer',$data);
		}
	}

	public function remove()
	{
		$last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $this->global_model->remove($record_num);
        redirect(base_url().'Checkout/Proceed');
	}

	public function edit()
	{
		if($this->input->post())
		{
			$value=$this->input->post();
			$lid=$this->global_model->update_address($value);
			redirect(base_url().'Checkout/Proceed');
		}
		else
		{
			$last = $this->uri->total_segments();
        	$record_num = $this->uri->segment($last);
			$data['categories']=$this->global_model->get_categories_list();
            $data['action']='Address/edit';
            $data['list']=$this->global_model->get_address_by_id($record_num);
            $this->load->view('inc/header',$data);
            $this->load->view('address_form_view',$data);
            $this->load->view('inc/footer',$data);
		}
	}
}
