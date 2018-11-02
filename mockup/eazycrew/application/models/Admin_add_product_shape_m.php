<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_shape_m extends CI_Model {

	public function fetch_product_shape()
	{
		$this->db->select('*');
		$this->db->from('sub_category');		
		$query = $this->db->get();
		return $query->result();		
	}
	public function product_shape_insert($records)
	{
		$this->db->insert('product_shapetype', $records);
		return true;
	}


}
?>