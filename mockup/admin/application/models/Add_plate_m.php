<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_plate_m extends CI_Model {

	public function insert_plate($records)
	{
		$this->db->insert('raw_materials',$records);
		return true;
	}
}
