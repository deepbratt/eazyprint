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

	public function cat_data($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
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

	public function cart_info($user_id,$ip_data){
		$this->db->select('*');
		$this->db->from('cart_selection');
		$this->db->join('raw_materials','cart_selection.raw_id = raw_materials.raw_id');
		$this->db->where('cart_selection.user_id',$user_id);
		$this->db->or_where('cart_selection.ip_address',$ip_data);
		$this->db->group_by('cart_selection.cart_id');
		$query = $this->db->get();
		return $query->result();
		//return $this->db->last_query();
	}

	public function prod_data($prod_id){
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->join('products','product_image.product_id = products.product_id');
		$this->db->where('products.product_id',$prod_id);
		$query = $this->db->get();
		return $query->row();
	}


}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */