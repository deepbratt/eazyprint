<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_model extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_model_m');
		$data['fetch_all_models'] = $this->listing_model_m->fetch_model();
		$this->load->view('listing_model',$data);
	}
	public function delete_model(){

		$this->load->model('listing_model_m');
		$del_model_id = $this->uri->segment(3);
		$delete_model = $this->listing_model_m->delete_model_id($del_model_id);		
		
		if($delete_model){
			$this->session->set_flashdata("delete_model_successfull", "The defined model has been deleted successfully...!");		
				redirect('listing_model');
		}else{
			$this->session->set_flashdata("delete_model_failed", "Failed to delete the defined model...!");
				redirect('listing_model');
		}
	}
}
?>