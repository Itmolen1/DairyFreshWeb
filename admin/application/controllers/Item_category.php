<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

class Item_category extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('item_category_model');
        $this->isLoggedIn();
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-cache, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
    }    
  
    public function index()
    {
        $this->global['pageTitle'] = APP_NAME.': Item Category';
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }    
  
    function item_category_listing()
    {            
        $searchText = $this->security->xss_clean($this->input->post('searchText'));
        $data['searchText'] = $searchText;
        $this->load->library('pagination');
        $count = $this->item_category_model->item_categoryListingCount($searchText);
        //echo "<pre>";print_r($count);die;
		$returns = $this->paginationCompress ( "item_category_listing/", $count, 10 );
		//echo "<pre>";print_r($returns);die;
        $data['servicesRecords'] = $this->item_category_model->item_categoryListing($searchText, $returns["page"], $returns["segment"]);
        $this->global['pageTitle'] = APP_NAME.' : Item Category Listing';
        $this->loadViews("item_category", $this->global, $data, NULL);        
    }
   
    function add_new_item_category()
    {        
    	if($this->input->post())
        {
            $value=$this->input->post();

            $value['item_category_logo']='N.A.';
            if(isset($_FILES) && $_FILES['item_category_logo']['error']==0)
            {
                /*image upload*/
                $dir='assets/item/';
                $n=pathinfo($_FILES['item_category_logo']['name']);
                $ex=$n['extension'];
                $uid=uniqid('item_');
                $tfile=$dir.$uid.'.'.$ex;
                $img=array();
                $imageFileType = strtolower(pathinfo($_FILES['item_category_logo']['name'],PATHINFO_EXTENSION));   
                if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")
                {
                    if ( move_uploaded_file($_FILES['item_category_logo']['tmp_name'],$tfile))
                    {
                        $img['item_category_logo']=ADMIN_PATH.$tfile;
                        $value['item_category_logo']=$img['item_category_logo'];
                    }                        
                }
                /*image upload*/
            }

            $item_category_name=$this->security->xss_clean($this->input->post('item_category_name'));
           	$vals = array('item_category_name'=>trim(str_replace(' ', '-',$value['item_category_name'])),'item_category_created_at'=>date('Y-m-d H:i:s'),'item_category_updated_at'=>date('Y-m-d H:i:s'),'item_category_logo'=>$value['item_category_logo']);
            //echo "<pre>";print_r($vals);die;
            $result = $this->item_category_model->add_new_item_category($vals);
            redirect('item_category_listing');
        }
        else
        {
            $this->load->model('item_category_model');
            $data['action']='add_new_item_category';
            $this->global['pageTitle'] =APP_NAME. ' : Add New Item Unit';
            $this->loadViews("add_new_item_category", $this->global, $data, NULL);
        }        
    }

    function edit_item_category()
    {
            if($this->input->post())
            {
                $value=$this->input->post();
                //echo "<pre>";print_r($value);die;

                /*Image upload*/
                if(isset($_FILES) && $_FILES['item_category_logo']['name']!='')
                {
                    $dir='assets/item/';
                    $n=pathinfo($_FILES['item_category_logo']['name']);
                    $ex=$n['extension'];
                    $uid=uniqid('item_');
                    $tfile=$dir.$uid.'.'.$ex;
                    $img=array();
                    $imageFileType = strtolower(pathinfo($tfile,PATHINFO_EXTENSION));   
                    if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg")
                    {
                        if ( move_uploaded_file($_FILES['item_category_logo']['tmp_name'],$tfile))
                        {
                            $img['item_category_logo']=ADMIN_PATH.$tfile;
                        }
                        else
                        {
                            redirect('purchase_order_listing','refresh');
                        }
                    }
                    $value['item_category_logo']=$img['item_category_logo'];                
                    $un=str_replace(FRONT_PATH,'',$value['item_category_logo_old']);
                    //echo $_SERVER['DOCUMENT_ROOT'].'/karigar/'.$un;die;
                    $u=unlink($_SERVER['DOCUMENT_ROOT'].'/'.$un);
                }
                else
                {
                    $value['item_category_logo']=$value['item_category_logo_old'];
                }
                /*Image upload*/

                $result = $this->item_category_model->edit_item_category($value);
                redirect('item_category_listing');
            }
            else
            {
                $last = $this->uri->total_segments();
                $id = $this->uri->segment($last);
                $data['list'] = $this->item_category_model->get_item_category_info($id);
                $data['action']='edit_item_category';
                $this->global['pageTitle'] = APP_NAME.' : Edit Item Unit';
                //echo "<pre>";print_r($data);die;
                $this->loadViews("add_new_item_category", $this->global, $data, NULL);
            }           
    }    
    
    function delete_item_category()
    {
            $last = $this->uri->total_segments();
            $record_num = $this->uri->segment($last);
            $result = $this->item_category_model->delete_item_category($record_num);
            redirect('item_category_listing');
    }    
 
    function pageNotFound()
    {
        $this->global['pageTitle'] = APP_NAME.' : 404 - Page Not Found';
        $this->loadViews("404", $this->global, NULL, NULL);
    }   
}
?>