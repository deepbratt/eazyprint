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
			  $fullname = ucfirst($row->user_fname) . " " . ucfirst($row->user_lname);
			  $session_data = array(
									  'user_id' => $row->user_id,
									  'user_type' => $row->user_type,
				  					  //There is a reason behind this part,so dont touch this, I repeat dont fucking touch this part
									  'name' =>$fullname,
									  'first_name' => ucfirst($row->user_fname),
									  'last_name' => ucfirst($row->user_lname),
									  //Restriction ends here
									  'email'=>$row->user_email,
									  'phone'=>$row->user_phone
								   );
			}
			
			$this->session->set_userdata('logged_in',$session_data);
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "dealer"){
				redirect('admin/admin_dashboard');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "vendor"){
				redirect('account');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "customer"){
				redirect('home');
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