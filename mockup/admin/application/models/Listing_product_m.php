<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_product_m extends CI_Model {

	public function fetch_pro()
	{
		$this->db->select('*');
		$this->db->from('products');
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_pro($product_id,$product_image_array,$meta_image)
	{
		
		foreach($product_image_array as $p_image){
			unlink("uploads/product_images/".$p_image);
			$this->db->where('product_image_path', $p_image);
			$this->db->delete('product_image');
		}
		unlink("uploads/meta_images/".$meta_image);
		$this->db->where('product_id', $product_id);
		$this->db->delete('products');
		return true;
	}

	public function update_status($product_id,$update_array)
	{
		$this->db->where('product_id', $product_id);
		$this->db->update('products', $update_array);
		return true;
	}

	public function get_images($pro_id)
	{
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$pro_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_design_image($design_id)
	{
		$this->db->select('*');
		$this->db->from('designs');
		$this->db->where('design_id',$design_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_design_id($pro_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id',$pro_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_name($pro_cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id', $pro_cat_id);
		$query = $this->db->get();
		return $query->row();
	}
}