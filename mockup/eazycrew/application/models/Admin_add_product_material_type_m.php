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
	public function product_material_type_insert($records)
	{
		$this->db->insert('product_material_type', $records);
		return true;
		
	}


}
?>