<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_dealer extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_dealer_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$dealerid = $this->uri->segment(2);
		$data['dealer_details'] = $this->admin_edit_dealer_m->dealer_details($dealerid);
		$this->load->view('admin_edit_dealer',$data);
	}

	public function update_crew()
	{
		$this->load->model('admin_edit_dealer_m');
		$dealer_id = $this->uri->segment(3);

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

		$update_array = array(
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
		$update_crew = $this->admin_edit_dealer_m->update_crew($dealer_id,$update_array);
		$this->session->set_flashdata("success", "Dealer Updated Successfully!");
	    redirect('admin_edit_dealer/'.$dealer_id);
	}

}

/* End of file Admin_edit_dealer.php */
/* Location: ./application/controllers/Admin_edit_dealer.php */