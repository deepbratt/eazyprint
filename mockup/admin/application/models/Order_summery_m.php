<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_summery_m extends CI_Model {

	public function fetch_pro()
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->order_by("raw_id","asc");
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_pro($product_id)
	{
		$query = $this->db->query("delete from products where product_id='".$product_id."'");
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