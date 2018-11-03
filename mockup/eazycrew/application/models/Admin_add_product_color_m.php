<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_color_m extends CI_Model {

	public function fetch_product_color()
	{
		$this->db->select('*');
		$this->db->from('sub_category');		
		$query = $this->db->get();
		return $query->result();		
	}
	public function product_color_insert($records)
	{
		$this->db->insert('product_color', $records);
		return true;
	}

}
?>