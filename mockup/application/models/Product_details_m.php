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

	public function fetch_similar_products($pro_cat_id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_image','products.product_id = product_image.product_id');
		$this->db->where('products.product_category_id',$pro_cat_id);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Product_details_m.php */
/* Location: ./application/models/Product_details_m.php */