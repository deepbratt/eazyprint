<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_m extends CI_Model {

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

	public function cat_data($cat_id){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function remove_cart_data($cart_id){
		$query = $this->db->query("delete from cart_selection where cart_id='".$cart_id."'");
		return true;
	}

}

/* End of file Cart_m.php */
/* Location: ./application/models/Cart_m.php */