<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

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
}
