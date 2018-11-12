<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_material_type_m extends CI_Model {

	public function fetch_product_material_type()
	{
		$this->db->select('*');
		$this->db->from('sub_category');		
		$query = $this->db->get();
		return $query->result();
		
	}

	public function check_material($sub_cat_name,$product_material_type_name)
	{
		$this->db->select('*');
		$this->db->from('product_material_type');
		$this->db->where('sub_category_id', $sub_cat_name);
		$this->db->where('product_material_type', $product_material_type_name);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function product_material_type_insert($records)
	{
		$this->db->insert('product_material_type', $records);
		return true;
		
	}


}
?>