<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_m extends CI_Model {

	public function user_detailzz($seller_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$seller_id);
	
		$query = $this->db->get();
		return $query->row();
	}

	public function order_info($user_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('user_id',$user_id);
		
		$query = $this->db->get();
		return $query->result();
	}

	public function user_address_detailzz($user_id){
		$this->db->select('*');
		$this->db->from('user_address');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function user_detail($seller_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$seller_id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function cat_data($cat_id){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
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
		$this->db->where('product_image_id',$prod_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function add_address_cart($update_data,$user_id){
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('cart_selection', $update_data);
		return true;
	}

	public function update_user_address($update_data,$user_id,$addr_id){
		$this->db->where("user_id", $user_id);
		$this->db->where("user_address_id", $addr_id);
		$query = $this->db->update('user_address', $update_data);
		return true;
	}

	public function update_user_address_others($update_data,$user_id,$addr_id){
		$this->db->where("user_id", $user_id);
		$this->db->where("user_address_id !=", $addr_id);
		$query = $this->db->update('user_address', $update_data);
		return true;
	}

	public function remove_cart_data($cart_id){
		$query = $this->db->query("delete from cart_selection where cart_id='".$cart_id."'");
		return true;
	}

	public function update_quantity($update_data,$cart_id){
		$this->db->where("cart_id", $cart_id);
		$query = $this->db->update('cart_selection', $update_data);
		return true;
	}

	public function get_it_product($get_order_id)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('order_id',$get_order_id);
		$query = $this->db->get();
		return $query->row();

	}
	
	public function insert_refund($records)
	{
		$this->db->insert('refund',$records);
		return true;
	}

	public function get_cancel_order($order_id)
	{
		$query = $this->db->query("delete from orders where order_id='".$order_id."'");
		return true;
	}

}

/* End of file Checkout_m.php */
/* Location: ./application/models/Checkout_m.php */