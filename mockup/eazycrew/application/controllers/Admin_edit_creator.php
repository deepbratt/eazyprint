<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_creator extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_edit_creator_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$creatorid = $this->uri->segment(2);
		$data['creator_details'] = $this->admin_edit_creator_m->creator_details($creatorid);
		$this->load->view('admin_edit_creator',$data);
	}

	public function update_creator()
	{
		$this->load->model('admin_edit_creator_m');
		$creator_id = $this->uri->segment(3);

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

		$update_array = array(
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
		$update_creator = $this->admin_edit_creator_m->update_creator($creator_id,$update_array);
		$this->session->set_flashdata("success", "Creator Updated Successfully!");
	    redirect('admin_edit_creator/'.$creator_id);
	}

}

/* End of file Admin_edit_creator.php */
/* Location: ./application/controllers/Admin_edit_creator.php */