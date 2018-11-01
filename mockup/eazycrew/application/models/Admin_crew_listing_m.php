<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_crew_listing_m extends CI_Model {

	public function fetch_crew($user_id)
	{
		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_id !=', $user_id);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Admin_crew_listing_m.php */
/* Location: ./application/models/Admin_crew_listing_m.php */