<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	public function __construct() {
      parent::__construct();	
	  $this->load->library('Email_template');	

	}

	public function index()
	{
		$this->load->view('contact');
	}

	public function send_email(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$number = $this->input->post('number');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from('sales@eazyprint.com', 'EazyPrint');
		$this->email->to('support@clickrstop.com'); 
		$message_data = $this->email_template->send_query($name,$email,$number,$subject,$message);
		
		$this->email->subject('Enquiry Mail');
		$this->email->message($message_data);    

		$mail_send = $this->email->send();
		if($mail_send){
			$this->session->set_flashdata("success", "Thank you for contacting us! We will get back to you soon.");
			redirect('contact');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Contact.php */