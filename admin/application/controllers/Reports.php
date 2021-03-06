<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';


class Reports extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('reports_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }    
  
    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.' : Dashboard';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }    
  
    function Reports_listing()
    {      
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');

        //$count = $this->reports_model->partner_ListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		//$returns = $this->paginationCompress ( "partner_listing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        //$data['servicesRecords'] = $this->reports_model->partner_Listing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Reports Listing';
        $this->loadViews("reports_list_view", $this->global, $data, NULL);
        
    }
   
    /*function contact_us_reply()
    {
            if($this->input->post())
            {
                $value=$this->input->post();
                //echo "<pre>";print_r($value);die;
                //$result = $this->reports_model->send_mail($value);
                $result = $this->reports_model->update_values($value);
                redirect('partner_listing');
            }
            else
            {

                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data['list'] = $this->reports_model->get_info($id);
                $data['action']='contact_us_reply';
                $this->global['pageTitle'] = APP_NAME.' : Reply Contact Us';
                //echo "<pre>";print_r($data);die;
                $this->loadViews("contact_us_reply", $this->global, $data, NULL);
            }           
    } */   
    
    function delete_partner()
    {        
        $last = $this->uri->total_segments();
        $record_num = $this->uri->segment($last);
        $result = $this->reports_model->delete_partner($record_num);
        $this->session->set_flashdata('message','Record succsfully Deleted.');
        redirect('partner_listing');
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = 'CodeInsect : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>