<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_size_m extends CI_Model {

	public function fetch_product_size()
	{
		$this->db->select('*');
		$this->db->from('sub_category');		
		$query = $this->db->get();
		return $query->result();		
	}
	public function product_size_insert($records)
	{
		$this->db->insert('product_size', $records);
		return true;
	}


}
?>