<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_shape_m extends CI_Model {

	public function fetch_product_shape()
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$query = $this->db->get();
		return $query->result();
		
	}
	 
	public function product_shape_dlt($product_shape_id)
	{
		$this->db->where('product_shape_id', $product_shape_id);
		$this->db->delete('product_shapetype');
		return true;
	}

}
?>