<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealers_signup extends CI_Controller {

	public function index()
	{
		$this->load->view('dealers_signup');
	}

	public function add_account()
	{
		$this->load->model('dealers_signup_m');
		$first_name = $this->input->post("first_name");
		$last_name = $this->input->post("last_name");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");
		$state = $this->input->post("state");
		$city = $this->input->post("city");
		$address = $this->input->post("address");
		$shop_name = $this->input->post("shop_name");
		$gst = $this->input->post("gst");
		$trade_license = $this->input->post("trade_license");
		$date = time();

		$check_exist = $this->dealers_signup_m->	;

	}

}

/* End of file Dealers_signup.php */
/* Location: ./application/controllers/Dealers_signup.php */