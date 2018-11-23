<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_shape_m extends CI_Model {

	public function fetch_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_all_subcategories(){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_status','1');
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
	
	public function fetch_product_shape()
	{
		$this->db->select('*');
		$this->db->from('sub_category');		
		$query = $this->db->get();
		return $query->result();		
	}

	public function check_product_shape($sub_cat_name,$product_shape_name)
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$this->db->where('sub_category_id', $sub_cat_name);
		$this->db->where('product_shapetype_name', $product_shape_name);
		$query = $this->db->get();
		return $query->num_rows();
		
	}

	public function product_shape_insert($records)
	{
		$this->db->insert('product_shapetype', $records);
		return true;
	}


}
?>