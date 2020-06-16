<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('global_model');
    }
	
	public function index()
	{
		$data['categories']=$this->global_model->get_categories_list();
		$data['slider']=$this->global_model->get_slider_list();
		$data['pros']=$this->global_model->get_all_products();
		$this->load->view('inc/header',$data);
		$this->load->view('Aboutus_view',$data);
		$this->load->view('inc/footer',$data);
	}	
}
