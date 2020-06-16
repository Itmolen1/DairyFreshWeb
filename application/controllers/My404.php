<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My404 extends CI_Controller {
	
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
		$this->output->set_status_header('404');
		$this->load->view('inc/header',$data);
		$this->load->view('My404_view');
		$this->load->view('inc/footer',$data);
	}
}
