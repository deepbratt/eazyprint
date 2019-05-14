<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts_m extends CI_Model {

	public function fetch_state_city(){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->group_by('city_state');
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_all_cities(){
		$this->db->select('*');
		$this->db->from('cities');
		$query = $this->db->get();
		return $query->result();
	}

	public function all_cities($state_name){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('city_state',$state_name);
		$query = $this->db->get();
		return $query->result();
	}

	public function check_contacts_data_email($email,$user_type){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$email);
		$this->db->where('user_type',$user_type);
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}

	public function check_contacts_data($email,$dealer_id,$user_type){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_email',$email);
		$this->db->where('user_type',$user_type);
		$this->db->where('user_id !=',$dealer_id);
		$query = $this->db->get();
		return $query->num_rows();
		//return $this->db->last_query();
	}

	public function insert_contacts($dealer_info)
	{
		$this->db->insert('user', $dealer_info);
		return $this->db->insert_id();
	}

	public function insert_cus_address($address_info)
	{
		$this->db->insert('user_address', $address_info);
		return true;
	}

	/* LISTING CONTACTS */
	public function fetch_all_contacts_info($user_type){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_type',$user_type);
		$query = $this->db->get();
		return $query->result();
	}

	public function fetch_cus_address($user_id){
		$this->db->select('*');
		$this->db->from('user_address');
		$this->db->where('user_id',$user_id);
		$this->db->where('address_status','1');
		$query = $this->db->get();
		return $query->row();
	}
	
	public function delete_contacts($dealer_id)
	{
		$query = $this->db->query("delete from user where user_id='".$dealer_id."'");
		return true;
	}

	public function update_status($dealer_id,$update_array)
	{
		$this->db->where('user_id', $dealer_id);
		$this->db->update('user', $update_array);
		return true;
	}

	/* EDIT CONTACTS */
	public function fetch_contacts_info($dealer_id){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$dealer_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_contacts($dealer_info,$dealer_id){
		$this->db->where("user_id", $dealer_id);
		$query = $this->db->update('user', $dealer_info);
		return true;
	}

}

/* End of file Contacts_m.php */
/* Location: ./application/models/Contacts_m.php */