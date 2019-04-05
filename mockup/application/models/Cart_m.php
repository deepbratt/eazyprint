<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_m extends CI_Model {

	public function prod_info($user_id,$ip_data){
		$this->db->select('*');
		$this->db->from('cart_selection');
		$this->db->join('products','cart_selection.product_id = products.product_id');
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
		$this->db->where('product_id',$prod_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Cart_m.php */
/* Location: ./application/models/Cart_m.php */