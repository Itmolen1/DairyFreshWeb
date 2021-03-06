<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Item_unit extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_unit_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }    
  
    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.': Dashboard';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }    
  
    function item_unit_listing()
    {               
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->item_unit_model->item_unitListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		$returns = $this->paginationCompress ( "item_unit_listing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        $data['servicesRecords'] = $this->item_unit_model->item_unitListing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Sub services Listing';
        $this->loadViews("item_unit", $this->global, $data, NULL);
    }
   
    function add_new_item_unit()
    {        
    	if($this->input->post())
        {
            $value=$this->input->post();
            $item_unit_name=$this->security->xss_clean($this->input->post('item_unit_name'));
           	$vals = array('item_unit_name'=>$item_unit_name,'item_unit_created_at'=>date('Y-m-d H:i:s'),'item_unit_updated_at'=>date('Y-m-d H:i:s'));
            //echo "<pre>";print_r($vals);die;
            $result = $this->item_unit_model->add_new_item_unit($vals);
            redirect('item_unit_listing');
        }
        else
        {
            $this->load->model('item_unit_model');
            $data['action']='add_new_item_unit';
            $this->global['pageTitle'] =APP_NAME. ' : Add New Item Unit';
            $this->loadViews("add_new_item_unit", $this->global, $data, NULL);
        }        
    }

    function item_unit_import()
    {          
        if(isset($_FILES["item_unit_name"]["name"]))
        {
            $this->load->library('csvimport');
            $config['upload_path'] = 'assets/uploads/csv/';
            $config['allowed_types'] = 'csv';
            $config['max_size'] = '1000';
            
            $this->load->library('upload', $config);
        
            if (!$this->upload->do_upload('item_unit_name')) 
            {

                $data['error'] = $this->upload->display_errors();
                echo "<pre>";print_r($data);die;
            } 
            else 
            {
                $file_data = $this->upload->data();
                $file_path = './assets/uploads/csv/'.$file_data['file_name'];
                
                if ($this->csvimport->get_array($file_path)) 
                {
                    $csv_array = $this->csvimport->get_array($file_path);
                    foreach ($csv_array as $row)
                    {
                        $insert_data = array(
                        'item_unit_name'=>$row['item_unit_name']
                        );
                        $this->item_unit_model->insert_csv($insert_data);
                    }
                    redirect('item_unit_listing');
                } 
                else
                    $data['error'] = "Error occured";
                    echo "<pre>";print_r($data);die;
            }
        }
        else
        {
            $this->load->model('item_unit_model');
            $data['action']='item_unit_import';
            $this->global['pageTitle'] =APP_NAME. ' : Import Item Unit';
            $this->loadViews("item_unit_import_view", $this->global, $data, NULL);
        }        
    }

    function edit_item_unit()
    {
            if($this->input->post())
            {
                $value=$this->input->post();
                //echo "<pre>";print_r($value);die;
                $result = $this->item_unit_model->edit_item_unit($value);
                redirect('item_unit_listing');
            }
            else
            {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data['list'] = $this->item_unit_model->get_item_unit_info($id);
                $data['action']='edit_item_unit';
                $this->global['pageTitle'] = APP_NAME.' : Edit Item Unit';
                //echo "<pre>";print_r($data);die;
                $this->loadViews("add_new_item_unit", $this->global, $data, NULL);
            }           
    }    
    
    function delete_item_unit()
    {
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $result = $this->item_unit_model->delete_item_unit($record_num);
            redirect('item_unit_listing');
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = APP_NAME.' : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>