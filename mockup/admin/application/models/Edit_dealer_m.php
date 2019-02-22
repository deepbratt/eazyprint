<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_dealer_m extends CI_Model {

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

	public function check_dealer_data($email,$dealer_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$email);
		$this->db->where('user_id !=',$dealer_id);
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}

	public function fetch_dealer_info($dealer_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$dealer_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_dealer($dealer_info,$dealer_id){
		$this->db->where("user_id", $dealer_id);
		$query = $this->db->update('user', $dealer_info);
		return true;
	}

}

/* End of file Edit_dealer_m.php */
/* Location: ./application/models/Edit_dealer_m.php */