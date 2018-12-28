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
}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */