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

}
?>