<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_inventory_m extends CI_Model {

	public function fetch_all_category(){
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_brand($cat_name){
		$this->db->select('*');
		$this->db->from('eazyprint_inventory');
		$this->db->where('category',$cat_name);
		$this->db->group_by('brand');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_model($brand_name){
		$this->db->select('*');
		$this->db->from('eazyprint_inventory');
		$this->db->where('brand',$brand_name);
		$this->db->group_by('model');
		$query = $this->db->get();
		return $query->result();
	}



}

/* End of file Add_inventory_m.php */
/* Location: ./application/models/Add_inventory_m.php */