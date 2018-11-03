<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_size_m extends CI_Model {

	public function fetch_product_size($product_size_id)
	{
		$this->db->select('*');
		$this->db->from('product_size');
		$this->db->where('product_size_id', $product_size_id);
		$query = $this->db->get();
		return $query->row();		
	}
	public function product_size_edit()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$query = $this->db->get();
		return $query->result();
	}
	public function product_size_update($records,$cat_sub_id)
	{
		$where  = array('product_size_id' => $cat_sub_id);
		$this->db->where($where);
		$query = $this->db->update('product_size', $records);
		return true;
	}

}
?>