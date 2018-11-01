<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_category_m extends CI_Model {

	public function fetch_category($category_status)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status', $category_status);
		$query = $this->db->get();
		return $query->result();
		
	}

	public function ct_dlt($category_id)
	{
		$this->db->where('category_id', $category_id);
		$this->db->delete('category');
		return true;
	}
}
?>