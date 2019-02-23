<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product_m extends CI_Model {

	public function get_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_raw_materials()
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_pro($records)
	{
		$this->db->insert('products',$records);
		return $this->db->insert_id();
	}

	public function update_pro_img($record)
	{
		$this->db->insert('product_image',$record);
		return $record;
	}
}
