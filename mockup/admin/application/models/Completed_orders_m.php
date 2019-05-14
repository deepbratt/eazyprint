<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completed_orders_m extends CI_Model {

	public function get_it($order_status){

		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('payment_status',$order_status);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_it_completed($user_id,$order_status)
	{
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where('user_id',$user_id);
		$this->db->where('payment_status',$order_status);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_order_dlt($order_id)
	{
		$this->db->where('order_id', $order_id);
		$this->db->delete('orders');
		return true;
	}

		public function get_all_details($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		//$this->db->where('payment_status',$order_status);
		$query = $this->db->get();
		return $query->row();
	}

	public function get_pr_details($product_id)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_id',$product_id);
		//$this->db->where('payment_status',$order_status);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Purchase_order_m.php */
/* Location: ./application/models/Purchase_order_m.php */