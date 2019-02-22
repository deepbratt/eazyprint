<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_mobile_case_m extends CI_Model {

	public function update_pro_mobile($records)
	{
		$this->db->insert('raw_materials',$records);
		return $records;
	}
}
