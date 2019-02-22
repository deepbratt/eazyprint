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

	public function supplier_info(){

		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->where('supplier_status','1');
		$query = $this->db->get();
		return $query->result();
	}

	public function supplier_addr($supplier_id){

		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->where('supplier_id',$supplier_id);
		$this->db->where('supplier_status','1');
		$query = $this->db->get();
		return $query->row();
	}

	public function raw_details(){

		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_status','1');
		$this->db->group_by('raw_category');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_cities(){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->group_by('city_state');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Purchase_order_m.php */
/* Location: ./application/models/Purchase_order_m.php */