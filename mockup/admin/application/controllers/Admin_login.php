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
									'user_id' => $login_auth->user_id,
									'name' => $login_auth->user_fname.' '.$login_auth->user_lname,
									'email'=> $login_auth->user_email,
									'crew_role' => $login_auth->user_crew_role,
									'user_type' => $login_auth->user_type,
									'crew_image' => $login_auth->user_profile_image
								 );
			
			$this->session->set_userdata('logged_in', $session_data);
			redirect('admin_dashboard');
		}
	}

}

/* End of file Admin_login.php */
/* Location: ./application/controllers/Admin_login.php */