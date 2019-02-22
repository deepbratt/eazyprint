<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login_m extends CI_Model {

	public function login_auth($email,$password)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_email', $email);
		$this->db->where('crew_pass', $password);
		$this->db->where('crew_status', '1');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Admin_login_m.php */
/* Location: ./application/models/Admin_login_m.php */