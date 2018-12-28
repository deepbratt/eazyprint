<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_sub_category_m extends CI_Model {

	public function fetch_sub_category()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$query = $this->db->get();
		return $query->result();
		
	}

	public function cat_name($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id', $cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function sub_cat_dlt($sub_category_id)
	{
		$this->db->where('sub_category_id', $sub_category_id);
		$this->db->delete('sub_category');
		return true;
	}

	public function update_sub_cat($sub_cat_id,$update_array)
	{
		$this->db->where('sub_category_id', $sub_cat_id);
		$this->db->update('sub_category', $update_array);
		return true;
	}

}
?>