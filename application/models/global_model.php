<?php 
class global_model extends CI_Model {

	public function product_search_with_keyword($searchText)
	{
		$this->db->select('BaseTbl.item_master_id,BaseTbl.item_master_url_slug,BaseTbl.item_master_name,BaseTbl.item_master_logo');
        $this->db->from('tbl_item_master as BaseTbl');
        if(!empty($searchText)) {
            $likeCriteria = "(BaseTbl.item_master_name  LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->where('BaseTbl.isDeleted', 0);
        $this->db->order_by('BaseTbl.item_master_id', 'DESC');
        $this->db->limit(6);
        $query = $this->db->get(); 
        $result = $query->result_array();        
        return $result;
	}
	
	public function add($data)
	{
		$this->db->insert('tbl_user',$data);
	}
	public function edit($data)
	{	
		$this->db->where('news_id', $this->input->get('news_id'));
		$this->db->update('news', $data); 
	}

	public function get_categories_list()
	{
		$this->db->select('*');
		$this->db->where('isDeleted',0);
        //$this->db->select('sub_service_id, service_id, sub_service_name');
        $this->db->from('tbl_item_category');
        //$this->db->join('tbl_sub_services as s', 's.service_id = BaseTbl.service_id','left');
        $query = $this->db->get();
        return $query->result_array();
	}

	public function get_category_details($name)
	{
		$this->db->select('item_category_id,item_category_name');
        $this->db->from('tbl_item_category');
        $this->db->where('item_category_name',$name);
        $query = $this->db->get();
        $row['cat_id']=$query->row_array();
        //echo "<pre>";print_r($row['cat_id']['item_category_id']);die;

        $this->db->select('item_master_id,item_master_name,item_master_desc,item_master_price,item_master_logo,item_master_url_slug');
        $this->db->from('tbl_item_master');
        $this->db->where('isDeleted',0);
        $this->db->where('item_master_category',$row['cat_id']['item_category_id']);
        $query = $this->db->get();
        $row['products']=$query->result_array();
        return $row;
	}

	public function get_all_products()
	{
		$this->db->select('item.item_master_url_slug,item.item_master_id,item.item_master_name,item.item_master_desc,item.item_master_category,item.item_master_price,item.item_master_logo,cat.item_category_name,cat.item_category_lable,cat.item_category_logo,item.item_master_unit');
		$this->db->from('tbl_item_master as item');
		$this->db->where('item.isDeleted',0);
		$this->db->join('tbl_item_category as cat', 'cat.item_category_id = item.item_master_category','left');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_top_3_products()
	{
		$this->db->select('item.item_master_url_slug,item.item_master_id,item.item_master_name,item.item_master_desc,item.item_master_category,item.item_master_price,item.item_master_logo,cat.item_category_name,cat.item_category_lable,cat.item_category_logo,item.item_master_unit');
		$this->db->from('tbl_item_master as item');
		$this->db->where('item.isDeleted',0);
		$this->db->join('tbl_item_category as cat', 'cat.item_category_id = item.item_master_category','left');
		$this->db->limit(3);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_time_slot_list()
	{
		$this->db->select('*');
		$this->db->where('isDeleted',0);
        //$this->db->select('sub_service_id, service_id, sub_service_name');
        $this->db->from('tbl_time_slot');
        //$this->db->join('tbl_sub_services as s', 's.service_id = BaseTbl.service_id','left');
        $query = $this->db->get();
        return $query->result_array();
	}

	public function get_slider_list()
	{
		$this->db->select('BaseTbl.slider_id, BaseTbl.slider_image,BaseTbl.slider_image_alt,BaseTbl.created_at');
        //$this->db->select('sub_service_id, service_id, sub_service_name');
        $this->db->from('tbl_slider as BaseTbl');
        $this->db->where('isDeleted',0);
        //$this->db->join('tbl_sub_services as s', 's.service_id = BaseTbl.service_id','left');
        $query = $this->db->get();
        return $query->result_array();
	}

	public function get_sub_services($id)
	{
		$this->db->select('*');
        $this->db->from('tbl_sub_services');
        $this->db->where('service_id',$id);
        $query = $this->db->get();
        return $query->result_array();
	}

	public function get_service_id($record_num)
	{
		$this->db->select('*');
		$this->db->where('detail_page',$record_num);
		$query=$this->db->get('tbl_services');
		return $query->row_array();
	}

	public function get_product_detail_by_id($id)
	{
		$this->db->select('item_master_id,item_master_url_slug,item_master_name,item_master_desc,item_master_price,item_master_logo,item_master_unit');
		$this->db->where('item_master_id',$id);
		$this->db->where('isDeleted',0);
		$query=$this->db->get('tbl_item_master');
		return $query->row_array();
	}

	public function isLoggedIn()
	{
		$islog=$this->session->userdata('user');
		if(!empty($islog))
		{
			return 1;
		}
		else
		{
			$this->session->set_userdata('referred_from', current_url());
			redirect('login','refresh');
		}
	}

	public function address_add($val)
	{
		$data=array(
			'user_address'=>$val['user_address'],
			'person_name'=>$val['person_name'],
			'person_mobile'=>$val['person_mobile'],
			'city'=>$val['city'],
			'state'=>$val['state'],
			'pin'=>$val['pin'],
			'created_at'=>date('Y-m-d h:i:s'),
			'updated_at'=>date('Y-m-d h:i:s'),
			'userId'=>$this->session->userdata['user']['userId']
			);
		$this->db->insert('tbl_user_address',$data);
		return $this->db->insert_id();
	}

	public function get_address_list_by_user_id($id)
	{
		$query=$this->db->get_where('tbl_user_address',array('userId'=>$id));
		return $query->result_array();
	}

	public function remove($id)
	{
		$this->db->where('user_address_id',$id);
		$this->db->delete('tbl_user_address');
		return 1;
	}

	public function get_address_by_id($id)
	{
		$query=$this->db->get_where('tbl_user_address',array('user_address_id'=>$id));
		return $query->row_array();
	}

	function update_address($val)
    {        
        $this->db->set('person_name',$val['person_name']);
        $this->db->set('person_mobile',$val['person_mobile']);
        $this->db->set('user_address',$val['user_address']);
        $this->db->set('city',$val['city']);
        $this->db->set('state',$val['state']);
        $this->db->set('pin',$val['pin']);
        $this->db->set('updated_at',date('Y-m-d H:i:s'));
        $this->db->where('user_address_id',$val['user_address_id']); 
        $lid=$this->db->update('tbl_user_address');
        return $lid;
    }

    function place_order($cart_data,$grand_total,$payment_method,$returndata)
    {
    	//first make entry in order table
    	if($returndata!='')
    	{
    		$order_ref_no=$returndata['txnid'];
    	}
    	else
    	{
    		$order_ref_no='ORD'.strtoupper(uniqid());
    		$returndata['phone']='';
    		$returndata['productinfo']='';
    		$returndata['hash']='';
    		$returndata['encryptedPaymentId']='';
    		$returndata['bank_ref_num']='';
    		$returndata['mkey']='';
    		$returndata['mihpayid']='';
    		$returndata['cardnum']='';
    		$returndata['name_on_card']='';
    		$returndata['txnStatus']='';
    	}
    	
    	$data=array(
    		'order_ref_no'=>$order_ref_no,
			'userId'=>$this->session->userdata['user']['userId'],
			'user_address_id'=>$this->session->userdata['user_delivery_address_id'],
			'payment_method'=>$payment_method,
			'payment_status'=>$returndata['txnStatus'],
			'status'=>0,
			'order_grand_total'=>$grand_total,
			'created_at'=>date('Y-m-d h:i:s'),
			'updated_at'=>date('Y-m-d h:i:s'),
			'phone'=>$returndata['phone'],
			'productinfo'=>$returndata['productinfo'],
			'hash'=>$returndata['hash'],
			'encryptedPaymentId'=>$returndata['encryptedPaymentId'],
			'bank_ref_num'=>$returndata['bank_ref_num'],
			'mkey'=>$returndata['key'],
			'mihpayid'=>$returndata['mihpayid'],
			'cardnum'=>$returndata['cardnum'],
			'name_on_card'=>$returndata['name_on_card']
			);
		$this->db->insert('tbl_order',$data);
		$lid=$this->db->insert_id();

    	//then make entry in order_boi table
    	for($i=0;$i<count($cart_data);$i++)
    	{
	    	$cdata=array(
				'order_id'=>$lid,
				'order_ref_no'=>$order_ref_no,
				'item_master_id'=>$cart_data[$i]['item_master_id'],
				'item_master_name'=>$cart_data[$i]['item_master_name'],
				'item_master_url_slug'=>$cart_data[$i]['item_master_url_slug'],
				'item_master_unit'=>$cart_data[$i]['item_master_unit'],
				'item_master_price'=>$cart_data[$i]['item_master_price'],
				'item_master_logo'=>$cart_data[$i]['item_master_logo'],
				'item_qty'=>$cart_data[$i]['item_qty'],
				'created_at'=>date('Y-m-d h:i:s'),
				'updated_at'=>date('Y-m-d h:i:s'),
				);
			$this->db->insert('tbl_order_boi',$cdata);
		}
		return $order_ref_no;
    }

    function get_order_detail_by_ref_no($order_ref_no)
    {
    	$this->db->select('BaseTbl.*,ad.user_address_id,ad.user_address');
        $this->db->from('tbl_order as BaseTbl');
        $this->db->join('tbl_user_address as ad', 'ad.user_address_id = BaseTbl.user_address_id','left');
        $this->db->where('BaseTbl.order_ref_no',$order_ref_no);
        $query1=$this->db->get();
        return $query1->row_array();
    }

    function get_order_items_by_ref_no($order_ref_no)
    {
    	$query=$this->db->get_where('tbl_order_boi',array('order_ref_no'=>$order_ref_no));
    	return $query->result_array();
    }

    function get_my_order_list()
    {
    	$sql="SELECT o.order_id,o.order_ref_no,o.userId,o.user_address_id,o.payment_method,o.payment_status,o.status,o.order_grand_total FROM tbl_order o LEFT JOIN tbl_user_address ad ON ad.user_address_id = o.user_address_id WHERE o.userId = ".$this->session->userdata['user']['userId']." ORDER BY o.order_id DESC ";
		$query = $this->db->query($sql);				
		$rows=$query->result_array();
		
		for($i=0;$i<count($rows);$i++)
		{
			$this->db->select('order_boi_id,order_ref_no,order_id,item_master_id,item_master_name,item_master_url_slug,item_master_unit,item_master_price,item_master_logo,item_qty');
	    	$query=$this->db->get_where('tbl_order_boi',array('order_ref_no'=>$rows[$i]['order_ref_no']));
	    	$items=$query->result_array();
	    	$rows[$i]['order_items']=$items;
		}
		return $rows;
    }
}
?>