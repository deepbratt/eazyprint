<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->model('cart_m');
		$ip_data = $this->input->ip_address();
		$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
        	$ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
		$data['user_id'] = $ip;

		$data['fetch_prod_data'] = $this->cart_m->prod_info($data['user_id'],$ip_data);
		
		$this->load->view('customer/cart',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */