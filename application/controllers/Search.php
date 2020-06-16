<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('global_model');
    }

    public function soorsearch()
    {
        $input=$this->input->post();
        $keyword=$input['data'];
        $products=$this->global_model->product_search_with_keyword($keyword);
        $final=$this->get_html($products);
        echo $final;
    }

    function get_html($products)
    {
        $finalresult='<ul class="serach-result-senitize">';
        for($i=0;$i<count($products);$i++)
        {
            $finalresult.='<a href="'.base_url().'Pd/'.$products[$i]['item_master_id'].'/'.$products[$i]['item_master_url_slug'].'"><li class="products_dropdown"><div class="row"><div class="col-md-2"><img height="50px" width="50px" src="'.$products[$i]['item_master_logo'].'"></div><div class="col-md-6">'.$products[$i]['item_master_name'].'</div></div></li></a>';
        }
        $finalresult.='</ul>';
        return $finalresult;
    }
}
