<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_category_m extends CI_Model {

	public function fetch_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
		
	}

	public function ct_dlt($category_id)
	{
		$this->db->where('category_id', $category_id);
		$this->db->delete('category');
		return true;
	}

	public function update_category($cat_id,$update_array)
	{
		$this->db->where('category_id', $cat_id);
		$this->db->update('category', $update_array);
		return true;
	}
}
?>