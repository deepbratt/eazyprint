<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_order_m extends CI_Model {

	public function admin_info($user_id){

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$user_id);
		$this->db->where('user_status','1');
		$query = $this->db->get();
		return $query->row();
	}

	public function supplier_info(){

		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_status','1');
		$this->db->where('user_type','vendor');
		$query = $this->db->get();
		return $query->result();
	}

	public function supplier_addr($supplier_id){

		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('user_address','user_address.user_id = user.user_id');
		$this->db->where('user.user_id',$supplier_id);
		//$this->db->where('user.user_status','1');
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_products(){

		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('product_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_products_from_id($raw_id){

		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_cities(){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->group_by('city_state');
		$query = $this->db->get();
		return $query->result();
	}

	public function yoo_city_name($city)
	{
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('city_id',$city);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_raw_from_id($raw_id)
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id',$raw_id);
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Purchase_order_m.php */
/* Location: ./application/models/Purchase_order_m.php */