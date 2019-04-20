<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulk_order_m extends CI_Model {

	public function update_order($records)
	{
		$this->db->insert('bulk_order',$records);
		return $records;
	}
}
