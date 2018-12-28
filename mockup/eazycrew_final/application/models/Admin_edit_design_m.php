<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_design_m extends CI_Model {

	public function fetch_design_info($design_id){
		$this->db->select('*');
		$this->db->from('designs');
		$this->db->where('design_id',$design_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_categories(){
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_all_designer(){
		$this->db->select('*');
		$this->db->from('creators');
		$this->db->where('creator_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_cat($sub_cat){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->join('category','category.category_id = sub_category.parent_cat_id');
		$this->db->where('sub_category.sub_category_id',$sub_cat);
		$query = $this->db->get();
		return $query->row();
	}

	public function ajax_fetch_subcategories($cat_id){
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id',$cat_id);
		$this->db->where('sub_category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_color($sub_id){
		$this->db->select('*');
		$this->db->from('product_color');
		$this->db->where('sub_category_id',$sub_id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_new_designs_info($records,$design_id){	
		$this->db->set($records);
		$this->db->where('design_id', $design_id);
		$this->db->update('designs');
		return true;
	}

}

/* End of file Admin_edit_design_m.php */
/* Location: ./application/models/Admin_edit_design_m.php */