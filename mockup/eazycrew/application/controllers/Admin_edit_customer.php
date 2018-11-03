<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_customer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_customer_m');
		$customer_id = $this->uri->segment(2);
		$data['customer_details'] = $this->admin_edit_customer_m->customer_details($customer_id);
		$this->load->view('admin_edit_customer',$data);
	}

	public function edit_customer()
	{
		$this->load->model('admin_edit_customer_m');
		$customer_id = $this->uri->segment(3);

		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$pincode = $this->input->post('pincode');
		$state = $this->input->post('state');
		$city = $this->input->post('city');
		$update_array = array(
								'customer_fname' => $first_name,
								'customer_lname' => $last_name,
								'customer_email' => $email,
								'customer_phone' => $phone,
								'customer_addr' => $address,
								'customer_pincode' => $pincode,
								'customer_state' => $state,
								'customer_city' => $city,
							 );
		$update_customer = $this->admin_edit_customer_m->update_customer($customer_id,$update_array);
		$this->session->set_flashdata("success", "Customer Member Updated Successfully!");
	    redirect('admin_edit_customer/'.$customer_id);
	}

}

/* End of file Admin_edit_customer.php */
/* Location: ./application/controllers/Admin_edit_customer.php */