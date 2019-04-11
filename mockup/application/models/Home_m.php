<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function get_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_sub($cat_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id', $cat_id);
		$this->db->where('sub_category_status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_product($sub_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_subcategory', $sub_id);
		$this->db->where('product_status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_mobile_case()
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status', '1');
		$this->db->where('raw_category', '3');
		$this->db->group_by('raw_brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_mugs(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status', '1');
		$this->db->where('raw_category', '2');
		$this->db->group_by('raw_title');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_pillows(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status', '1');
		$this->db->where('raw_category', '4');
		$this->db->group_by('raw_title');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_plates(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status', '1');
		$this->db->where('raw_category', '5');
		$this->db->group_by('raw_title');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_tiles(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status', '1');
		$this->db->where('raw_category', '6');
		$this->db->group_by('raw_title');
		$query = $this->db->get();
		return $query->result();
	}

	public function each_models($brand_name)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status', '1');
		$this->db->where('raw_brand', $brand_name);
		$this->db->group_by('raw_name');
		$query = $this->db->get();
		return $query->result();
	}

	public function prod_info($user_id,$ip_data){
		$this->db->select('*');
		$this->db->from('cart_selection');
		$this->db->join('products','cart_selection.product_id = products.product_id');
		$this->db->join('raw_materials','products.raw_id = raw_materials.raw_id');
		$this->db->where('cart_selection.user_id',$user_id);
		$this->db->or_where('cart_selection.ip_address',$ip_data);
		$this->db->where('products.product_status','1');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function prod_image_info($prod_id){
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$prod_id);
		$query = $this->db->get();
		return $query->row();
	}


}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */