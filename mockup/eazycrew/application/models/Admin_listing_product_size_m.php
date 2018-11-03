<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_size_m extends CI_Model {

	public function fetch_product_size()
	{
		$this->db->select('*');
		$this->db->from('product_size');
		$query = $this->db->get();
		return $query->result();
		
	}
	public function cat_name($cat_sub_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id', $cat_sub_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function product_size_dlt($product_size_id)
	{
		$this->db->where('product_size_id', $product_size_id);
		$this->db->delete('product_size');
		return true;
	}

}
?>