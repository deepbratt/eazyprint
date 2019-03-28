<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function get_cat()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status', '1');
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


}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */