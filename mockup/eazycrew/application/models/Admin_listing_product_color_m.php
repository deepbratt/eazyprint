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
	
	public function product_color_dlt($product_color_id)
	{
		$this->db->where('product_color_id', $product_color_id);
		$this->db->delete('product_color');
		return true;
	}
}
?>