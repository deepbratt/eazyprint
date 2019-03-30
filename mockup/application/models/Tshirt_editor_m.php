<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tshirt_editor_m extends CI_Model {

	public function fetch_model_name($raw_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
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

	public function fetch_similar($raw_id){
		$this->db->select('*');
		$this->db->from('products');
		$this->db->join('product_image','products.product_id = product_image.product_id');
		$this->db->where('products.raw_id',$raw_id);
		$this->db->group_by('product_image.product_id');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Tshirt_editor_m.php */
/* Location: ./application/models/Tshirt_editor_m.php */