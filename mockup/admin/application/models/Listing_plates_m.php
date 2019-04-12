<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_plates_m extends CI_Model {

	public function fetch_plate()
	{
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_category','5');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function get_plate_details($raw_id){
		$this->db->select('*');
		$this->db->from('raw_materials');
		$this->db->where('raw_id', $raw_id);
		$query = $this->db->get();
		return $query->row();
	}
	public function delete_plate($raw_id,$raw_img,$meta_img)
	{
		unlink("uploads/product_images/plate/".$raw_img);
		unlink("uploads/meta_images/".$meta_img);
		$this->db->where('raw_id', $raw_id);
		$this->db->delete('raw_materials');
		return true;
	}
}