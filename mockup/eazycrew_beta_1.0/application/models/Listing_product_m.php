<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_product_m extends CI_Model {

	public function fetch_pro($user_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('user_id', $user_id);
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
}