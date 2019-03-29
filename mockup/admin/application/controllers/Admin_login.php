<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {

	public function index()
	{
		$this->load->view('admin_login');
	}

	public function check_login()
	{
		$this->load->model('admin_login_m');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$login_auth = $this->admin_login_m->login_auth($email,$password);
		
		if(count($login_auth) < 1)
		{
			$this->session->set_flashdata("failed", "You have entered wrong login details!");
	        redirect('admin_login');
		}else{
			$session_data = array(
									'user_id' => $login_auth->crew_id,
									'name' => $login_auth->crew_fname.' '.$login_auth->crew_lname,
									'email'=> $login_auth->crew_email,
									'user_type' => $login_auth->crew_role,
									'crew_image' => $login_auth->crew_image
								 );
			
			$this->session->set_userdata('logged_in', $session_data);
			redirect('admin_dashboard');
		}
	}

}

/* End of file Admin_login.php */
/* Location: ./application/controllers/Admin_login.php */