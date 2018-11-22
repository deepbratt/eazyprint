<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_color_m extends CI_Model {

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
	public function product_color_update($records,$product_color_id)
	{
		$where  = array('product_color_id' => $product_color_id);
		$this->db->where($where);
		$query = $this->db->update('product_color', $records);
		return true;
	}

}
?>