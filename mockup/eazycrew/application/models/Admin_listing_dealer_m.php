<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_dealer_m extends CI_Model {

	public function fetch_dealer()
	{
		$this->db->select('*');
		$this->db->from('dealers');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_crew($dealers_id,$update_array)
	{
		$this->db->where('dealers_id', $dealers_id);
		$this->db->update('dealers', $update_array);
		return true;
	}

}

/* End of file Admin_listing_dealer_m.php */
/* Location: ./application/models/Admin_listing_dealer_m.php */