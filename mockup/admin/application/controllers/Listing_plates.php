<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_plates extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		
     }

	public function index()
	{
		$this->load->model('listing_plates_m');
		$data['fetch_plate'] = $this->listing_plates_m->fetch_plate();
		$this->load->view('products/listing_plates',$data);
	}

	public function delete_plate()
	{
		$this->load->model('listing_plates_m');
		$raw_id = $this->uri->segment(3);
		$get_plate_details = $this->listing_plates_m->get_plate_details($raw_id);
		$raw_img = $get_plate_details->raw_image;
		$meta_img = $get_plate_details->raw_meta_img;
		$delete_plate = $this->listing_plates_m->delete_plate($raw_id,$raw_img,$meta_img);
		if($delete_plate){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this plate!");
			redirect('listing_plates');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_plates');
		}
	}

	

}

/* End of file Listing_plates.php */
/* Location: ./application/controllers/Listing_plates.php */