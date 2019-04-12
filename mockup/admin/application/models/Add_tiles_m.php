<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_tiles_m extends CI_Model {

	public function update_pro_tiles($records)
	{
		$this->db->insert('raw_materials',$records);
		return $records;
	}
}
