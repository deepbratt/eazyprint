<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_creator_m extends CI_Model {

	public function fetch_creator()
	{
		$this->db->select('*');
		$this->db->from('creators');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_creator($creator_id,$update_array)
	{
		$this->db->where('creator_id', $creator_id);
		$this->db->update('creators', $update_array);
		return true;
	}

}

/* End of file Admin_listing_creator_m.php */
/* Location: ./application/models/Admin_listing_creator_m.php */