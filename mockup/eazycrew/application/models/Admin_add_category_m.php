<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_category_m extends CI_Model {

	public function category_insert($records)
	{
		$this->db->insert('category', $records);
		return true;
		
	}
}
?>