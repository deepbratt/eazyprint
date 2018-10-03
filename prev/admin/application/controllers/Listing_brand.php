<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_brand extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_brand_m');
		$data['get_all_brands'] = $this->listing_brand_m->fetch_brands();
		$this->load->view('listing_brand',$data);
	}
	public function delete_brand(){

		$this->load->model('listing_brand_m');
		$del_brand_id = $this->uri->segment(3);
		$delete_brand = $this->listing_brand_m->delete_brand_id($del_brand_id);		

		if($delete_brand){
			$this->session->set_flashdata("delete_brand_successfull", "The defined brand has been deleted successfully...!");		
				redirect('listing_brand');
		}else{
			$this->session->set_flashdata("delete_brand_failed", "Failed to delete the defined brand...!");
				redirect('listing_brand');
		}
	}

}
?>