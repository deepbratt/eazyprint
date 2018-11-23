<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_shape_m extends CI_Model {

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

	public function get_each_subcat($sub_category)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id', $sub_category);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function fetch_product_shape($product_shape_id)
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$this->db->where('product_shape_id', $product_shape_id);
		$query = $this->db->get();
		return $query->row();		
	}

	public function product_shape_edit()
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_rows($sub_category_name,$product_shape_name,$cat_sub_id)
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$this->db->where('sub_category_id', $sub_category_name);
		$this->db->where('product_shapetype_name', $product_shape_name);
		$this->db->where('product_shape_id !=', $cat_sub_id);
		$query = $this->db->get();
		return $query->num_rows();
		
	}

	public function product_shape_update($records,$cat_sub_id)
	{
		$where  = array('product_shape_id' => $cat_sub_id);
		$this->db->where($where);
		$query = $this->db->update('product_shapetype', $records);
		return true;
	}

}
?>