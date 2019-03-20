<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify_email extends CI_Controller {

	public function index()
	{
		$this->load->view('verify_email');
	}

	public function reg_authenticate(){
		$this->load->model('verify_email_m');
		$new_reg_id = $this->uri->segment(3);
		$new_pass = $this->input->post('reg_new_pass');
		$confirm_pass = $this->input->post('reg_confirm_pass');
		$date = time();
		
		$update_data = array(
			'user_password' => $new_pass,
			'user_status' => '1',
			'user_email_status' => '1',
			'user_phone_status' => '0',
			'user_date' => $date
		);
		$update_user_data = $this->verify_email_m->update_password($update_data,$new_reg_id);
		if($update_user_data){
			$fetch_user_data = $this->verify_email_m->user_information($new_reg_id);
			$session_data = array();
			foreach($fetch_user_data as $row)
			{
			  $fullname = $row->user_fname . " " . $row->user_lname;
			  $session_data = array(
									  'user_id' => $row->user_id,
									  'user_type' => $row->user_type,
									  'name' =>$fullname,
									  'email'=>$row->user_email
								   );
			}
			
			$this->session->set_userdata('logged_in',$session_data);
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "dealer"){
				redirect('account');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "vendor"){
				redirect('account');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "customer"){
				redirect('account');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "eazycrew")
			{
				redirect('account');
			}

		}else{
			$this->session->set_flashdata("failed", "Registration Failed...");
		}
	}

}

/* End of file Verify_email.php */
/* Location: ./application/controllers/Verify_email.php */