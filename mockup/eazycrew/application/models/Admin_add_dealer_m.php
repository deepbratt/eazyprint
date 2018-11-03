<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_dealer_m extends CI_Model {

	public function add_dealer($records)
	{
		$this->db->insert('dealers', $records);
		return true;
	}

	public function check_dealer($email)
	{
		$this->db->select('*');
		$this->db->from('dealers');
		$this->db->where('dealers_email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

}

/* End of file Admin_add_dealer_m.php */
/* Location: ./application/models/Admin_add_dealer_m.php */