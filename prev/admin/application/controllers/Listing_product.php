<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_product extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_product_m');
		$data['get_all_products'] = $this->listing_product_m->fetch_products();
		$this->load->view('listing_product',$data);
	}

	public function delete_product(){

		$this->load->model('listing_product_m');
		$del_product_id = $this->uri->segment(3);
		$delete_product = $this->listing_product_m->delete_product_id($del_product_id);		
		
		if($delete_product){
			$this->session->set_flashdata("delete_product_successfull", "The defined product has been deleted successfully...!");		
				redirect('listing_product');
		}else{
			$this->session->set_flashdata("delete_product_failed", "Failed to delete the defined product...!");
				redirect('listing_product');
		}
	}

}
?>