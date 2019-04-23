<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout_m extends CI_Model {

	public function user_detailzz($user_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$this->db->where('user_status','1');
		$query = $this->db->get();
		return $query->row();
	}

	public function user_address_detailzz($user_id){
		$this->db->select('*');
		$this->db->from('user_address');
		$this->db->where('user_id',$user_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function cat_data($cat_id){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
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
	/* CASH ON DELIVERY CODES STARTS*/
	public function order_place($order_data){
		$this->db->insert('orders', $order_data);
		return true;
	}

	public function remove_cart_order_place($user_id){
		$query = $this->db->query("delete from cart_selection where user_id='".$user_id."'");
		return true;
	}

	public function update_quant($quant_data,$raw_id){
		$this->db->where("raw_id", $raw_id);
		$query = $this->db->update('raw_materials', $quant_data);
		return true;
	}
	/* CASH ON DELIVERY CODES ENDS*/

}

/* End of file Checkout_m.php */
/* Location: ./application/models/Checkout_m.php */