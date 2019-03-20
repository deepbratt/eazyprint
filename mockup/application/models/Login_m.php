<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function login_function($email,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email' ,$email);
		$this->db->where('user_password' ,$password);
		$this->db->where('user_status' ,'1');
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function get_id($records)
	{
		$condition = "user_email =" . "'" . $records['email'] . "' AND " . "user_password =" . "'" . $records['password'] . "' AND " . "user_status =" ."'". '1' ."'";
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file Login_m.php */
/* Location: ./application/models/Login_m.php */