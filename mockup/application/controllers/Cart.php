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
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            	$ip = $_SERVER['HTTP_CLIENT_IP'];
	        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
	            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	        } else {
	            $ip = $_SERVER['REMOTE_ADDR'];
	        }
			$data['user_id'] = $ip;

		}

		$data['fetch_prod_data'] = $this->cart_m->cart_info($data['user_id'],$ip_data);
		
			$amount_array = array();
			$quantity_array = array();
			$gst_tax_array_each_product = array();
			$original_cost = array();
			$gst_tax = array();
			$total_payable = array();
			foreach($data['fetch_prod_data'] AS $key=>$each_cart_data){
				$amount_array[] = $each_cart_data->price;
				$quantity_array[] = $each_cart_data->qty;
				$gst_tax_array_each_product[] = $each_cart_data->raw_gst_rate;

				$original_cost[] = ($each_cart_data->price * $each_cart_data->qty);
				$gst_tax[] = ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
				$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) + ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
			}
			$data['total_each_mat_price'] = $amount_array;
			$data['total_each_mat_qty'] = $quantity_array;	
			$data['total_each_material_tax'] = $gst_tax_array_each_product;	
			$data['total_amount'] = $original_cost;
			$data['gst_tax'] = $gst_tax;
			$data['total_payable'] = $total_payable;

		$this->load->view('customer/cart',$data);
	}

	public function remove_cart(){
		$this->load->model('cart_m');
		$cart_id = $this->uri->segment(3);
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$remove_from_cart = $this->cart_m->remove_cart_data($cart_id);
			if($remove_from_cart){
				redirect('cart');
			}
		}else{
			redirect('cart');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */