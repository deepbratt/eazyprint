<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_orders_m extends CI_Model {

	public function get_it($order_status){

		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('order_status',$order_status);
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Purchase_order_m.php */
/* Location: ./application/models/Purchase_order_m.php */