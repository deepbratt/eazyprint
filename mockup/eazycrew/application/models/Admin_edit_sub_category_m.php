<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_sub_category_m extends CI_Model {

	public function fetch_sub_cat($sub_cat_id)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('sub_category_id', $sub_cat_id);
		$query = $this->db->get();
		return $query->row();		
	}

	public function check_sub_cat($cat_sub_id,$category_name,$sub_category_name)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id', $category_name);
		$this->db->where('sub_category_name', $sub_category_name);
		$this->db->where('sub_category_id !=', $cat_sub_id);
		$query = $this->db->get();
		return $query->num_rows();
		
	}

	public function sub_cat_edit()
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function sub_cat_update($records,$cat_sub_id)
	{
		$where  = array('sub_category_id' => $cat_sub_id);
		$this->db->where($where);
		$query = $this->db->update('sub_category', $records);
		return true;
	}
}
?>