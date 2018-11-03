<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_color_m extends CI_Model {

	public function fetch_product_color()
	{
		$this->db->select('*');
		$this->db->from('product_color');
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
	public function product_color_dlt($product_color_id)
	{
		$this->db->where('product_color_id', $product_color_id);
		$this->db->delete('product_color');
		return true;
	}
}
?>