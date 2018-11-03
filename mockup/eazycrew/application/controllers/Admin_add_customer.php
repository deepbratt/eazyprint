<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_customer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_customer');
	}

	public function add_customer()
	{
		$this->load->model('admin_add_customer_m');
		
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$pincode = $this->input->post('pincode');
		$state = $this->input->post('state');
		$city = $this->input->post('city');

		$date = time();
		
		$check_customer = $this->admin_add_customer_m->check_customer($email,$phone);
		if($check_customer < 1)
		{
			$insert_array = array(
									'customer_fname' => $first_name,
									'customer_lname' => $last_name,
									'customer_email' => $email,
									'customer_pass' => $password,
									'customer_phone' => $phone,
									'customer_addr' => $address,
									'customer_pincode' => $pincode,
									'customer_state' => $state,
									'customer_city' => $city,
									'customer_email_status' => '1',
									'customer_phone_status' => '1',
									'customer_status' => '1',
									'customer_date' => $date
								 );
			$insert_customer = $this->admin_add_customer_m->insert_customer($insert_array);
			$this->session->set_flashdata("success", "Customer Added Successfully!");
	        redirect('admin_add_customer');
		}else{
			$this->session->set_flashdata("failed", "Customer Already Exist!");
	        redirect('admin_add_customer');
		}
	}

}

/* End of file Admin_add_customer.php */
/* Location: ./application/controllers/Admin_add_customer.php */