<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_mug_m extends CI_Model {

	public function fetch_pro_mug($user_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_added_by', $user_id);
		$this->db->where('raw_category','Mug');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_mug($raw_id)
	{
		$query = $this->db->query("delete from raw_materials where raw_id='".$raw_id."'");
		return true;
	}

	public function update_status($raw_id,$update_array)
	{
		$this->db->where('raw_id', $raw_id);
		$this->db->update('raw_materials', $update_array);
		return true;
	}
}