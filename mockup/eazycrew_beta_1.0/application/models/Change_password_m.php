<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password_m extends CI_Model {
	
	public function pass_update($records,$user_id,$user_type,$crew_role)
	{
		$where  = array('user_id' => $user_id);
		$where  = array('user_type' => $user_type);
		$where  = array('user_crew_role' => $crew_role);
		$this->db->where($where);
		$query = $this->db->update('user', $records);
		return true;
	}
}

/* End of file Register_m.php */
/* Location: ./application/models/Register_m.php */