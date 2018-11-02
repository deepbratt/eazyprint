<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_creator extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_creator');
	}

	public function add_creator(){
		$this->load->model('admin_add_creator_m');

		$fname = $this->input->post('f_name');
		$lname = $this->input->post('l_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$pincode = $this->input->post('pincode');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$date = time();

		$check_creator = $this->admin_add_creator_m->check_creator($email);
		if($check_creator < 1){
			$records = array(
				'creator_fname' => $fname,
				'creator_lname' => $lname,
				'creator_email' => $email,
				'creator_pass' => $password,
				'creator_phone' => $phone,
				'creator_addr' => $address,
				'creator_pincode' => $pincode,
				'creator_state' => $state,
				'creator_city' => $city,
				'creator_status' => '1',
				'creator_date' => $date
			);
		$add_creator = $this->admin_add_creator_m->add_creator($records);
		
		$this->session->set_flashdata("success", "Creator Added Successfully!");
	        redirect('admin_add_creator');
		}else{
			$this->session->set_flashdata("failed", "Creator Already Exist!");
	        redirect('admin_add_creator');
		}

	}

}

/* End of file Admin_add_creator.php */
/* Location: ./application/controllers/Admin_add_creator.php */