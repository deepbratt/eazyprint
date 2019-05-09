<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_order_summery_m extends CI_Model {

	public function fetch_pro($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_seller_it($seller_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$seller_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_seller_it_now($seller_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$seller_id);
		$query = $this->db->get();
		return $query->row();
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

	public function get_row($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_user_details($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		//return $query->num_rows();
		return $query->row();

	}

	public function get_supplier($raw_seller)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$raw_seller);
		$query = $this->db->get();
		return $query->num_rows();
		//return $query->row();

	}

	public function get_supplier_details($raw_seller)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$raw_seller);
		$query = $this->db->get();
		//return $query->num_rows();
		return $query->row();
	
	}

	public function insert_order($records)
	{
		$this->db->insert('orders',$records);
		return $this->db->insert_id();
	}

	public function get_update($something,$payment_array)
	{
		$this->db->where('order_id', $something);
		$this->db->update('orders', $payment_array);
		return true;
	}

	public function get_details_it($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		//return $query->num_rows();
		return $query->row();
	}

	public function get_discount_fetch($user_class)
	{
		$this->db->select('*');
		$this->db->from('userclass_details');
		$this->db->where('userclass_name',$user_class);
		$query = $this->db->get();
		//return $query->num_rows();
		return $query->row();
	}

	public function get_address($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_address');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		//return $query->num_rows();
		return $query->row();
	}
}