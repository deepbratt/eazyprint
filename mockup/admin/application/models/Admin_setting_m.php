<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_setting_m extends CI_Model {

	public function fetch_crew($user_id)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}


	public function fetch_dealer($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
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

	public function update_dealer($user_id,$update_array)
	{
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('user', $update_array);
		return true;
	}

		public function update_admin_it($user_id,$update_array)
	{
		$this->db->where("crew_id", $user_id);
		$query = $this->db->update('eazycrew', $update_array);
		return true;
	}

	public function get_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		//$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Admin_setting_m.php */
/* Location: ./application/models/Admin_setting_m.php */