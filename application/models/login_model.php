<?php 
class login_model extends CI_Model {
	public function add($data)
	{
		//echo "<pre>";print_r($data);die;
		$this->db->insert('tbl_contact_us',$data);
	}
	public function edit($data)
	{	
		$this->db->where('news_id', $this->input->get('news_id'));
		$this->db->update('news', $data); 
	}
	public function get($tbl_user_email,$tbl_user_password)
	{
		$this->db->where('password',$tbl_user_password);
		$this->db->where('email',$tbl_user_email);
		$query = $this->db->get('tbl_users');
		return $query->row_array();
	}

	function email_exist($email)
	{
		$this->db->select('email');
		$query=$this->db->get_where('tbl_users',array('email'=>$email));
		$res=$query->num_rows();
		return $res;
	}

	function update_new_password($data)
	{
		//echo "<pre>";print_r($data);die;
		$this->db->set('password',$data['password']);
		$this->db->set('tbl_user_password_token',NULL);
		$this->db->set('tbl_user_token_expire_time',NULL);
		$this->db->where('tbl_user_password_token',$data['token']);		
		$this->db->update('tbl_users');
		//echo $this->db->last_query();die;
		return 1;
	}

	function token_validity_check($token)
	{
		$ctime=date('Y-m-d H:i:s');
		$this->db->select('email,userId');
		$this->db->where('tbl_user_password_token',$token);
		$this->db->where('tbl_user_token_expire_time >=',$ctime);
		$query=$this->db->get('tbl_users');
		$res=$query->num_rows();
		return $res;
	}

	function update_token_to_email($token,$email)
	{
		$newTime = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")." +10 minutes"));
		$this->db->set('tbl_user_token_expire_time',$newTime);
		$this->db->set('tbl_user_password_token',$token);
		$this->db->where('email',$email);		
		$this->db->update('tbl_users');
		return 1;
	}
}
?>