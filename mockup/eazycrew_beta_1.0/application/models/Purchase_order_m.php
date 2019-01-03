<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order_m extends CI_Model {

	public function admin_info($user_id){

		$this->db->select('*');
		$this->db->from('eazycrew');
		$this->db->where('crew_id',$user_id);
		$this->db->where('crew_status','1');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Purchase_order_m.php */
/* Location: ./application/models/Purchase_order_m.php */