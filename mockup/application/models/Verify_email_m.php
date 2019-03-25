<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_email_m extends CI_Model {

	public function update_password($update_data,$rand_code,$new_reg_id){
		$this->db->where("email_verify_code", $rand_code);
		$this->db->where("user_id", $new_reg_id);
		$query = $this->db->update('user', $update_data);
		return true;
	}

	public function user_information($rand_code,$new_reg_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email_verify_code',$rand_code);
		$this->db->where('user_id',$new_reg_id);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Verify_email_m.php */
/* Location: ./application/models/Verify_email_m.php */