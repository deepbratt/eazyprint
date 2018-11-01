<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_sub_category_m extends CI_Model {

	public function fetch_sub_category()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_status','1');
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

}
?>