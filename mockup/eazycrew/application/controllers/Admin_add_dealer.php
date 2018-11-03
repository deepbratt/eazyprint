<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_dealer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_dealer');
	}

	public function add_dealer(){
		$this->load->model('admin_add_dealer_m');

		$fname = $this->input->post('f_name');
		$lname = $this->input->post('l_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$pincode = $this->input->post('pincode');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$store_name = $this->input->post('store_name');
		$trade_licence_number = $this->input->post('trade_licence_number');
		$gst_number = $this->input->post('gst_number');
		$date = time();

		$check_dealer = $this->admin_add_dealer_m->check_dealer($email);
		if($check_dealer < 1){
			$records = array(
				'dealers_fname' => $fname,
				'dealers_lname' => $lname,
				'dealers_email' => $email,
				'dealers_pass' => $password,
				'dealers_phone' => $phone,
				'dealers_addr' => $address,
				'dealers_pincode' => $pincode,
				'dealers_state' => $state,
				'dealers_city' => $city,
				'dealers_store_name' => $store_name,
				'dealers_tradelicense_number' => $trade_licence_number,
				'dealers_gst_number' => $gst_number,
				'dealers_status' => '1',
				'dealers_date' => $date
			);
		$add_dealer = $this->admin_add_dealer_m->add_dealer($records);
		
		$this->session->set_flashdata("success", "Dealer Added Successfully!");
	        redirect('admin_add_dealer');
		}else{
			$this->session->set_flashdata("failed", "Dealer Already Exist!");
	        redirect('admin_add_dealer');
		}

	}

}

/* End of file Admin_add_dealer.php */
/* Location: ./application/controllers/Admin_add_dealer.php */