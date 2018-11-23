<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_m extends CI_Model {

	public function fetch_product($product_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_sub_cat($cat_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id', $cat_id);
		$this->db->where('sub_category_status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_brand($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('sub_category', $sub_cat_id);
		$this->db->where('brand_status', '1');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_material_type($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('product_material_type');
		$this->db->where('sub_category_id', $sub_cat_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_color($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('product_color');
		$this->db->where('sub_category_id', $sub_cat_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_size($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('product_size');
		$this->db->where('sub_category_id', $sub_cat_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_shape($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('product_shapetype');
		$this->db->where('sub_category_id', $sub_cat_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_brands_details($brand_id)
	{
		$this->db->select('*');
		$this->db->from('brands');
		$this->db->where('brand_id', $brand_id);
		$this->db->where('brand_status', '1');
		$query = $this->db->get();
		return $query->row();		
	}

	public function check_sku($sku,$product_id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_sku',$sku);
		$this->db->where('product_id !=',$product_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_product($records,$product_id)
	{
		$this->db->where("product_id", $product_id);
		$query = $this->db->update('products', $records);
		return true;
	}

}

/* End of file Admin_edit_product_m.php */
/* Location: ./application/models/Admin_edit_product_m.php */