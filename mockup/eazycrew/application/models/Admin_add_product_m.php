<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_color_m extends CI_Model {

	public function fetch_product_color($product_color_id)
	{
		$this->db->select('*');
		$this->db->from('product_color');
		$this->db->where('product_color_id', $product_color_id);
		$query = $this->db->get();
		return $query->row();		
	}
	public function product_color_edit()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$query = $this->db->get();
		return $query->result();
	}
	public function product_color_update($records,$cat_sub_id)
	{
		$where  = array('product_color_id' => $cat_sub_id);
		$this->db->where($where);
		$query = $this->db->update('product_color', $records);
		return true;
	}

}
?>