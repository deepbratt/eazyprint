<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$this->load->view('signup');
	}

	public function newRegister(){

		$this->load->model('signup_m');
		$this->load->library('Emailtemp');
		$fname = $this->input->post('reg_fname');
		$lname = $this->input->post('reg_lname');
		$phone = $this->input->post('reg_phone');
		$email = $this->input->post('reg_email');
		$date = time();
		$rand_code = rand();

		$check_email_row = $this->signup_m->check_email_row($email);
		
		if(sizeof($check_email_row) < 1){

			$user_detailszz = array(
				'user_fname' => $fname,
				'user_lname' => $lname,
				'user_phone' => $phone,
				'user_email' => $email,
				'user_type' => 'customer',
				'user_crew_role' => 'na',
				'user_status' => '0',
				'user_email_status' => '0',
				'user_phone_status' => '0',
				'user_date' => $date,
				'email_verify_code' => $rand_code
			);

			$insert_new_user = $this->signup_m->register_new_user($user_detailszz);
			
			if($insert_new_user){
				$verify_code .= $rand_code;
				$verify_code .= '/';
				$verify_code .= $insert_new_user;
				
				//Mail function starts
				$message = $this->emailtemp->user_regisuccess($fname,$lname,$verify_code);
					
				$this->load->library('email');
				$this->email->set_mailtype("html");

				$this->email->from('support@eazyprint.in', 'EazyPrint');
				$this->email->to($email); 

				$this->email->subject('Registration Confirmation-EazyPrint');
				$this->email->message($message);    

				$okay = $this->email->send();
				//Mail function ends
				$this->session->set_flashdata("success", "Please check you email inbox for completing your registration. Thank you!");
				redirect('signup');
				//redirect('verify_email/'.$verify_code);
			}else{
				redirect('signup');
			}
		}else{
			$this->session->set_flashdata("exist", "Email Already Exist...");
		}
		redirect('signup');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */