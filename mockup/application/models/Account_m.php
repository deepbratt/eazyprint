<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_m extends CI_Model {

	public function fetch_cust_info($user_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function fetch_address($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_address');
		$this->db->where('user_id', $user_id);
		$this->db->order_by('address_status', 'DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all_cities()
	{
		$this->db->select('*');
		$this->db->from('cities');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_all_state()
	{
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->group_by('city_state');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_email_row($new_email,$user_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$new_email);
		$this->db->where('user_id !=',$user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_profile_info($account_info,$user_id,$prev_profile_img,$image_delete_status){
		$this->db->where("user_id", $user_id);
		if($image_delete_status == 1){
			unlink("uploads/user_profile_image/".$prev_profile_img);
		}
		$query = $this->db->update('user', $account_info);
		return true;
	}

	public function update_address_info($account_info,$user_id){
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('user', $account_info);
		return true;
	}
}

/* End of file Account_m.php */
/* Location: ./application/models/Account_m.php */