<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_setting_m extends CI_Model {

	public function fetch_user($user_id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_category()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();
		return $query->result();
	}

	public function update_user($user_id,$records,$image,$img_stat,$prev_img)
	{
		if($img_stat == '1'){
			unlink("uploads/crew_images/".$prev_img);
		}
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('user', $records);
		return true;
	}
}

/* End of file Admin_setting_m.php */
/* Location: ./application/models/Admin_setting_m.php */