<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details_m extends CI_Model {

	public function cat_data($cat_id){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('cat_id',$cat_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function raw_prod_info($raw_pro_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_pro_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_phone_models(){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category','3');
		$this->db->group_by('raw_brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_raw_color($raw_category){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category',$raw_category);
		$this->db->group_by('raw_color_code');
		$query = $this->db->get();
		return $query->result();
	}

	public function brand_models($brand_name){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category','3');
		$this->db->where('raw_brand',$brand_name);
		$query = $this->db->get();
		return $query->result();
	}

	public function prod_info($prod_id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id',$prod_id);
		$this->db->where('product_status','1');
		$query = $this->db->get();
		return $query->row();
	}

	public function prod_image_info($prod_id){
		$this->db->select('*');
		$this->db->from('product_image');
		$this->db->where('product_id',$prod_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_similar_products($pro_cat_id,$pro_id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_image','products.product_id = product_image.product_id');
		$this->db->where('products.product_category_id',$pro_cat_id);
		$this->db->where('products.product_id !=',$pro_id);
		$this->db->group_by('product_image.product_id');
		$query = $this->db->get();
		return $query->result();
	}

	public function check_cart($ip_address,$product_id,$raw_id){
		$this->db->select('*');
		$this->db->from('cart_selection');
		$this->db->where('ip_address',$ip_address);
		if($product_id != ""){
			$this->db->where('product_id',$product_id);
		}
		if($raw_id != ""){
			$this->db->where('raw_id',$raw_id);
		}
		$query = $this->db->get();
		return $query->row();
	}

	public function save_cart($cart_details){
		$this->db->insert('cart_selection', $cart_details);
		return true;
	}

	public function update_cart($update_cart_data,$cart_id,$ip_address){
		$this->db->where("cart_id", $cart_id);
		$this->db->where("ip_address", $ip_address);
		$query = $this->db->update('cart_selection', $update_cart_data);
		return true;
	}

}

/* End of file Product_details_m.php */
/* Location: ./application/models/Product_details_m.php */