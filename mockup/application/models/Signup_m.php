<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_m extends CI_Model {

	public function check_email_row($user_email){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$user_email);
		$query = $this->db->get();
		return $query->result();
	}

	public function register_new_user($user_details){
		$this->db->insert('user', $user_details);
		return $this->db->insert_id();
	}

}

/* End of file Signup_m.php */
/* Location: ./application/models/Signup_m.php */