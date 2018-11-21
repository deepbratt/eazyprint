<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_product_m extends CI_Model {

	public function get_products()
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_status' , '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_cat($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id' , $cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_sub_cat($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id' , $sub_cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_brand($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_id' , $brand_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function delete_product($delete_query,$product_id)
	{
		$this->db->where("product_id", $product_id);
		$query = $this->db->update('products', $delete_query);
		return true;
	}

	public function update_product($product_id,$update_array)
	{
		$this->db->where('product_id', $product_id);
		$this->db->update('products', $update_array);
		return true;
	}

}

/* End of file Admin_listing_product_m.php */
/* Location: ./application/models/Admin_listing_product_m.php */