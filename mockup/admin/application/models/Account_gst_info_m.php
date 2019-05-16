<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_gst_info_m extends CI_Model {

	public function fetch_state_city(){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->group_by('city_state');
		$query = $this->db->get();
		return $query->result();
	}

	public function all_cities($state_name){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('city_state',$state_name);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_user_details($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_user_address_details($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_address');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_city($city)
	{
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('city_id',$city);
		$query = $this->db->get();
		return $query->row();
	}


}

/* End of file Account_gst_info_m.php */
/* Location: ./application/controllers/Account_gst_info_m.php */