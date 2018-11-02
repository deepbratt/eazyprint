<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_material_type_m extends CI_Model {

	public function fetch_product_material_type($product_material_type_id)
	{
		$this->db->select('*');
		$this->db->from('product_material_type');
		$this->db->where('product_material_id', $product_material_type_id);
		$query = $this->db->get();
		return $query->row();		
	}
	public function product_material_type_edit()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$query = $this->db->get();
		return $query->result();
	}
	public function product_metarial_update($records,$cat_sub_id)
	{
		$where  = array('product_material_id' => $cat_sub_id);
		$this->db->where($where);
		$query = $this->db->update('product_material_type', $records);
		return true;
	}

}
?>