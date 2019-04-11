<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_pillows_m extends CI_Model {

	public function fetch_pro_pillow($user_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category','4');
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