<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

	public function check_login()
	{
		$this->load->model('login_m');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$records=array('email'=>$email,'password'=>$password);

		$result = $this->login_m->login_function($records);
		
		if($result > 0){
			$last_id = $this->login_m->get_id($records);
			$session_data = array();
			foreach($last_id as $row){
			  $session_data = array(
									  'user_id' => $row->admin_id,
									  'user_type' => $row->user_type,
									  'name' =>$row->name,
									  'email'=>$row->email
								   );
			}
			
			$this->session->set_userdata('logged_in',$session_data);
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin"){
				redirect('dashboard');
			}
		}else{
			$this->session->set_flashdata("failed", "Invalid email or password");
			redirect('login');
		}
	}
}
?>