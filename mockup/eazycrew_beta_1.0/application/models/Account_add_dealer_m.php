<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_add_dealer_m extends CI_Model {

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

}

/* End of file Account_add_vendor_m.php */
/* Location: ./application/models/Account_add_vendor_m.php */