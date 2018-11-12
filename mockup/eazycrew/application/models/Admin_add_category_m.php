<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_category_m extends CI_Model {

	public function check_category($category_name)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_name', $category_name);
		$query = $this->db->get();
		return $query->num_rows();
		
	}

	public function category_insert($records)
	{
		$this->db->insert('category', $records);
		return true;
		
	}
}
?>