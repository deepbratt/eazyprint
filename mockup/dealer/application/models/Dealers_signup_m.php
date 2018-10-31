<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealers_signup_m extends CI_Model {

	public function check_dealer($email,$phone)
	{
		$this->db->select('*');
		$this->db->from('dealers');
		$this->db->where('dealers_email', $email);
		$this->db->where('dealers_phone', $phone);
		$query = $this->db->get();
		return $query->num_rows();
	}

}

/* End of file Dealers_signup_m.php */
/* Location: ./application/models/Dealers_signup_m.php */