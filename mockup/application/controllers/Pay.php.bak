<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	
	public function authenticate(){
		$this->load->model('login_m');

		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$records=array('email'=>$email,'password'=>$password);

		$result = $this->login_m->login_function($email,$password);
		
		if($result > 0){
			$last_id = $this->login_m->get_id($records);
			$session_data = array();
			foreach($last_id as $row)
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
				redirect('admin/admin_dashboard');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "vendor"){
				redirect('account');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "customer"){
				redirect('account');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "eazycrew")
			{
				redirect('account');
			}
		}else{
			$this->session->set_flashdata("failed", "Invalid email or password");
			redirect('login');
		}
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */