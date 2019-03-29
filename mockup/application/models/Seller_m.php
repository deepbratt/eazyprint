<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller_m extends CI_Model {

	public function check_get_email($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_vendor($records)
	{
		$this->db->insert('user', $records);
		return $this->db->insert_id();

	}


}

/* End of file Home_m.php */
/* Location: ./application/models/Home_m.php */
