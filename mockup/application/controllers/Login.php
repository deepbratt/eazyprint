<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
	
	public function authenticate(){
		$this->load->model('login_m');
		$this->load->model('questionaire_m');

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$records=array('email'=>$email,'password'=>$password);

		$result = $this->login_m->login_function($email,$password);
		
		if($result > 0){
			$last_id = $this->login_m->get_id($records);
			$session_data = array();
			foreach($last_id as $row)
			{
			  $fullname = $row->firstname . " " . $row->lastname;
			  $session_data = array(
									  'user_id' => $row->user_id,
									  'user_type' => $row->user_type,
									  'name' =>$fullname,
									  'email'=>$row->email,
				  					  'currency' =>$currencyCode
								   );
			}
			
			$this->session->set_userdata('logged_in',$session_data);
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Small and medium business"){

				$user_id = $this->session->userdata['logged_in']['user_id'];
				$get_basic = $this->questionaire_m->row_check($user_id);
				$get_tech = $this->questionaire_m->tech_row($user_id);
				$get_non_tech = $this->questionaire_m->tech_non_tech($user_id);
				$get_budget = $this->questionaire_m->tech_budget($user_id);
				$get_orders = $this->login_m->smb_orders($user_id);
				
				if($get_basic < 1)
				{
					redirect('questionaire');
				}
				else if($get_basic > 0 && $get_tech < 1)
				{
					redirect('questionaire');
				}
				else if($get_basic > 0 && $get_tech > 0 && $get_non_tech < 1)
				{
					redirect('questionaire_tech_info');
				}
				else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget < 1)
				{
					redirect('questionaire_nontech_info');
				}
				else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders < 1)
				{
					redirect('results');
				}
				else if($get_basic > 0 && $get_tech > 0 && $get_non_tech > 0 && $get_budget > 0 && $get_orders > 0)
				{
					redirect('questionniare_results');
				}
				

				
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "Supplier"){
				redirect('edit_solution');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "admin"){
				redirect('admin_dashboard');
			}else if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "delegate")
			{
				$this->session->set_flashdata("delegate", "It seems you are a delegate user! Please use <a href='delegate_login'>delegate login</a>.");
				redirect('login');
			}
		}else{
			$this->session->set_flashdata("failed", "Invalid email or password");
			redirect('login');
		}
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */