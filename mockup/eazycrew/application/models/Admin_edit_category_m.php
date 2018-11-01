<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_category_m extends CI_Model {

	public function fetch_cat($cat_id)
	{
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('category_id', $cat_id);
		$query = $this->db->get();
		return $query->row();
		
	}
	public function cat_update($records,$category_id)
	{
		$where  = array('category_id' => $category_id);
		$this->db->where($where);
		$query = $this->db->update('category', $records);
		return true;
	}
}
?>