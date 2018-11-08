<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_setting_m extends CI_Model {

	public function fetch_data($user_id)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function check_existing($user_id,$email)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_email', $email);
		$this->db->where('crew_id !=', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_admin($user_id,$update_array)
	{
		$this->db->where("crew_id", $user_id);
		$query = $this->db->update('eazycrew', $update_array);
		return true;
	}

}

/* End of file Admin_setting_m.php */
/* Location: ./application/models/Admin_setting_m.php */