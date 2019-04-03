<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		$this->load->model('checkout_m');
		//$pro_id = $this->uri->segment(2);
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
		}
		$data['fetch_prod_data'] = $this->checkout_m->prod_info($data['user_id']);
		
		$this->load->view('checkout/login',$data);
	}

	public function authenticate(){
		$this->load->model('login_m');
		$pro_id = $this->uri->segment(3);
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
			
			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "customer"){
				redirect('checkout/'.$pro_id);
			}else{
				$this->session->set_flashdata("failed", "Invalid email or password");
				redirect('checkout/'.$pro_id);
			}
		}
	}

	public function delivery_address()
	{
		$this->load->model('checkout_m');
		$pro_id = $this->uri->segment(3);
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
			$data['fetch_user_address'] = $this->checkout_m->user_address_detailzz($data['user_id']);
		}
		$data['fetch_prod_data'] = $this->checkout_m->prod_info($pro_id);
		
		$this->load->view('checkout/delivery_address',$data);
	}

	public function order_summary()
	{
		$this->load->model('checkout_m');
		$pro_id = $this->uri->segment(3);
		$data['size'] = $this->input->post('size');
		$data['fetch_prod_data'] = $this->checkout_m->prod_info($pro_id);
		$data['fetch_prod_image_data'] = $this->checkout_m->prod_image_info($pro_id);
		$single_image = array();
		foreach($data['fetch_prod_image_data'] AS $fetch_single_images){
			$single_image[] = $fetch_single_images->product_image_path;
		}
		$data['single_prod_image'] = $single_image;
		$this->load->view('checkout/order_summary',$data);
	}

	public function payment_option()
	{
		$this->load->helper('Instamojo');
		$api = new Instamojo\Instamojo("12525746f3a4acf5461d5a7a8fbeb643", "284647be790ec63df9a3f9109e2f4352");
		try {
			$response = $api->paymentRequestCreate(array(
				"buyer_name" => "Shuvradeb Mondal",
				"purpose" => "Tshirt , Mobile case",
				"amount" => "349",
				"send_email" => false,
				"send_sms" => false,
				"phone" => "9230841054",
				"email" => "foo@example.com",
				"redirect_url" => "http://localhost/pbeazyprint/mockup/checkout/payment_option_check"
				));
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}
		$data['response'] = $response;
		$this->load->view('checkout/payment_option',$data);
	}

	public function payment_option_check(){
		$this->load->helper('Instamojo');
		$api = new Instamojo\Instamojo("12525746f3a4acf5461d5a7a8fbeb643", "284647be790ec63df9a3f9109e2f4352");
		try {
			$response = $api->paymentRequestCreate(array(
				"purpose" => "FIFA 16",
				"amount" => "3499",
				"send_email" => true,
				"email" => "foo@example.com",
				"redirect_url" => "http://localhost/pbeazyprint/mockup/checkout/payment_option_check"
				));
			print_r($response);
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}
		exit;
		$this->load->view('checkout/payment_option',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */