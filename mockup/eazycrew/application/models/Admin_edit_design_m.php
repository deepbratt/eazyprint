<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_design_m extends CI_Model {

	public function fetch_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_all_subcategories(){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function ajax_fetch_subcategories($cat_id){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id',$cat_id);
		$this->db->where('sub_category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_new_designs_info($records){	
		$this->db->insert('designs', $records);
		return true;
	}

}

/* End of file Admin_edit_design_m.php */
/* Location: ./application/models/Admin_edit_design_m.php */