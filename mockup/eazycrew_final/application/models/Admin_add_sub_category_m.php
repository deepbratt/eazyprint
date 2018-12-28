<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_sub_category_m extends CI_Model {

	public function fetch_category()
	{
		$this->db->select('*');
		$this->db->from('category');		
		$query = $this->db->get();
		return $query->result();
		
	}

	public function check_sub_cat($category_name,$sub_category_name)
	{
		$this->db->select('*');
		$this->db->from('sub_category');
		$this->db->where('parent_cat_id', $category_name);
		$this->db->where('sub_category_name', $sub_category_name);
		$query = $this->db->get();
		return $query->num_rows();
		
	}

	public function sub_category_insert($records)
	{
		$this->db->insert('sub_category', $records);
		return true;
		
	}


}
?>