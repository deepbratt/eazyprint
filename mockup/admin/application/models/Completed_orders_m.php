<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completed_orders_m extends CI_Model {

	public function get_it($order_status){

		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('order_status',$order_status);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_it_completed($user_id,$order_status)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('user_id',$user_id);
		$this->db->where('order_status',$order_status);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_order_dlt($order_id)
	{
		$this->db->where('order_id', $order_id);
		$this->db->delete('orders');
		return true;
	}

}

/* End of file Purchase_order_m.php */
/* Location: ./application/models/Purchase_order_m.php */