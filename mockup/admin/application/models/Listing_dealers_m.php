<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_dealers_m extends CI_Model {

	public function fetch_dealers_info(){
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_dealer($dealer_id)
	{
		$query = $this->db->query("delete from user where user_id='".$dealer_id."'");
		return true;
	}

	public function update_status($dealer_id,$update_array)
	{
		$this->db->where('user_id', $dealer_id);
		$this->db->update('user', $update_array);
		return true;
	}


}

/* End of file Listing_dealers_m.php */
/* Location: ./application/models/Listing_dealers_m.php */