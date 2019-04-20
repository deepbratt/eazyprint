<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_inventory extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_inventory_m');
		$data['fetch_stock'] = $this->listing_inventory_m->stock_data();
		$this->load->view('inventory/listing_inventory',$data);
	}

	public function update_quantity(){
		$this->load->model('listing_inventory_m');
		$inventory_id = $this->input->post('inventory_id');
		$quantity = $this->input->post('quantity');
		$update_time = time();
		$update_array = array(
			'qty'=>$quantity,
			'update_date'=>$update_time
		);
		$update_stock = $this->listing_inventory_m->update_quantity($inventory_id,$update_array);
	}

}

/* End of file Inventory.php */
/* Location: ./application/controllers/Inventory.php */