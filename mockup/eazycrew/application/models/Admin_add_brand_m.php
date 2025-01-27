<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_brand_m extends CI_Model {

	public function fetch_category()
	{
		$this->db->select('*');
		$this->db->from('category');		
		$query = $this->db->get();
		return $query->result();
	}

	public function ajax_fetch_subcategories($cat_id){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id',$cat_id);
		$this->db->where('sub_category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_brands($brand_name,$brand_code)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_name', $brand_name);
		$this->db->where('brand_code', $brand_code);
		$query = $this->db->get();
		return $query->num_rows();		
	}

	public function sub_brand_insert($records)
	{
		$this->db->insert('brands', $records);
		return true;
		
	}
}
?>