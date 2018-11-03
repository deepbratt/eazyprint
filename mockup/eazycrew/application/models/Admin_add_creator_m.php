<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_creator_m extends CI_Model {

	public function add_creator($records)
	{
		$this->db->insert('creators', $records);
		return true;
	}

	public function check_creator($email)
	{
		$this->db->select('*');
		$this->db->from('creators');
		$this->db->where('creator_email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

}

/* End of file Admin_add_creator_m.php */
/* Location: ./application/models/Admin_add_creator_m.php */