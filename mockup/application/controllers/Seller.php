<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seller extends CI_Controller {

	public function __construct() {
      parent::__construct();	
		$this->load->library('Emailtemp');	
	}

	public function index()
	{
		$this->load->view('seller');
	}

	public function vendor_registration()
	{	
		$this->load->model('seller_m');
			$seller_email = $this->input->post('user_email');
			$user_type = "dealer";
			$email_code = mt_rand();
		
			$records = array('user_type'=>$user_type,'user_email'=> $seller_email,'email_verify_code'=> $email_code);

			
			$check_email = $this->seller_m->check_get_email($seller_email);
			
			if($check_email == 0)
			{
				$insert_details = $this->seller_m->insert_vendor($records);
			
				if($insert_details != '')
					{
						$get_seller_regi_email = $this->emailtemp->seller_regi_sccs_eml($seller_email,$email_code,$insert_details);
						$this->load->library('email');
						$this->email->set_mailtype("html");
						$this->email->from('support@portme.co','Eazyprint');
						$this->email->to($seller_email); 

							$this->email->subject('Registration Confirmation As Dealers - Eazyprint');
							$this->email->message($get_seller_regi_email);    

							$okay = $this->email->send();
							$this->session->set_flashdata("logged_in", "Please Check Your Email Account For Activation!!");
							redirect('seller');
					}
					else
					{
						$this->session->set_flashdata("error_it", "Opps! Something Went Wrong");
					}
			}
			else
			{
				$this->session->set_flashdata("duplicate", "This Email Already Exist!");
				redirect('seller');
			}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */