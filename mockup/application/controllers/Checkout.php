<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	/* Order_summary PAGE of checkout Starts*/
	public function index()
	{
		$this->load->library('user_agent');
		$this->load->model('checkout_m');
		$ip_data = $this->input->ip_address();
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = $ip_data;
		}
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
			$data['fetch_prod_data'] = $this->checkout_m->cart_info($data['user_id'],$ip_data);
			
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
				$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) - ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
			}
			$data['total_each_mat_price'] = array_sum($amount_array);
			$data['total_each_mat_qty'] = array_sum($quantity_array);	
			$data['total_each_material_tax'] = array_sum($gst_tax_array_each_product);	
			$data['total_amount'] = array_sum($original_cost);
			$data['gst_tax'] = array_sum($gst_tax);
			$data['total_payable'] = array_sum($total_payable);
		}
		
		$this->load->view('checkout/order_summary',$data);
	}

	public function update_order_summary(){
		$this->load->model('checkout_m');
		$cart_id = $this->input->post('cartzz_id');
		$quantity = $this->input->post('quantity');
		
		foreach($cart_id AS $key=>$each_cartzz_id){
			$quantity_data = array('qty'=>$quantity[$key]);
			$update_quantity = $this->checkout_m->update_quantity($quantity_data,$each_cartzz_id);
		}
		
		if($update_quantity){
			redirect('checkout/login');
		}
	}

	public function remove_cart(){
		$this->load->model('checkout_m');
		$cart_id = $this->uri->segment(3);
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
	
			$remove_from_cart = $this->checkout_m->remove_cart_data($cart_id);
			if($remove_from_cart){
				redirect('checkout');
			}
	
		
	}
	/* Order_summary PAGE of checkout Ends*/

	/* LOGIN PAGE of checkout Starts*/
	public function login(){
		$this->load->model('checkout_m');
		$this->load->library('user_agent');
		//$pro_id = $this->uri->segment(2);
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
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
			$data['fetch_prod_data'] = $this->checkout_m->cart_info($data['user_id'],$ip_data);

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
				$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) - ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
			}
			$data['total_each_mat_price'] = array_sum($amount_array);
			$data['total_each_mat_qty'] = array_sum($quantity_array);
			$data['total_each_material_tax'] = array_sum($gst_tax_array_each_product);	
			$data['total_amount'] = array_sum($original_cost);
			//print_r($data['total_amount']);
			
			$data['gst_tax'] = array_sum($gst_tax);
			$data['total_payable'] = array_sum($total_payable);
			
		}
		
		$this->load->view('checkout/login',$data);
	}

	public function authenticate(){
		$this->load->library('user_agent');
		$this->load->model('checkout_m');
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
			$user_id = $this->session->userdata['logged_in']['user_id'];
			$ip_data = $this->input->ip_address();
			$cart_user_id = $this->checkout_m->cart_info($user_id,$ip_data);
			

			if(isset($this->session->userdata['logged_in']['user_type']) && $this->session->userdata['logged_in']['user_type'] == "customer"){

				if(sizeof($cart_user_id) > 0){
					$update_array = array('user_id'=>$user_id);
					$update_user_id = $this->checkout_m->add_address_cart($update_array,$ip_data);
				}
				redirect('checkout/delivery_address');
			}else{
				$this->session->set_flashdata("failed", "Invalid email or password");
				redirect('checkout');
			}
		}else{
			redirect('checkout');
		}
	}
	/* LOGIN PAGE of checkout Ends*/
	/* Delivery_address PAGE of checkout Starts*/
	public function delivery_address(){
		$this->load->library('user_agent');
		$this->load->model('checkout_m');
		$ip_data = $this->input->ip_address();
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['fetch_user_data'] = $this->checkout_m->user_detailzz($data['user_id']);
			$data['user_addrezzz'] = $this->checkout_m->user_address_detailzz($data['user_id']);
			$data['fetch_prod_data'] = $this->checkout_m->cart_info($data['user_id'],$ip_data);

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
				$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) - ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
			}
			$data['total_each_mat_price'] = array_sum($amount_array);
			$data['total_each_mat_qty'] = array_sum($quantity_array);	
			$data['total_each_material_tax'] = array_sum($gst_tax_array_each_product);	
			$data['total_amount'] = array_sum($original_cost);
			$data['gst_tax'] = array_sum($gst_tax);
			$data['total_payable'] = array_sum($total_payable);

			$this->load->view('checkout/delivery_address',$data);
		}else{
			redirect('checkout');
		}
	}

	public function manage_address(){
		$this->session->set_flashdata("status", "address");
		redirect('account');
	}

	public function add_delivery_address(){
		$this->load->model('checkout_m');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$addr_id = $this->input->post('del_address');
			$update_array = array('address_id'=>$addr_id);
			$update_cart_data = $this->checkout_m->add_address_cart($update_array,$data['user_id']);
			if($update_cart_data){
				$update_user_array = array('address_status'=>'1');
				$update_primary_address = $this->checkout_m->update_user_address($update_user_array,$data['user_id'],$addr_id);
				if($update_primary_address){
					$update_user_array_others = array('address_status'=>'0');
					$update_primary_address = $this->checkout_m->update_user_address_others($update_user_array_others,$data['user_id'],$addr_id);
				}
			}
			redirect('checkout/payment_option');
		}else{
			redirect('checkout');
		}
	}
	/* Delivery_address PAGE of checkout Ends*/
	
	/* Payment_option PAGE of checkout Starts*/
	public function payment_option(){
		$this->load->library('user_agent');
		$this->load->model('checkout_m');
		$ip_data = $this->input->ip_address();

		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}

		if($data['user_id'] != ""){
			$data['fetch_prod_data'] = $this->checkout_m->cart_info($data['user_id'],$ip_data);
			
			if(!empty($data['fetch_prod_data'])){
				$data['fetch_address_data'] = $this->checkout_m->address_info($data['user_id'],$ip_data);
				if($data['fetch_address_data']->address_id != ''){

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
						$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) - ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
					}
				
					$data['total_each_mat_price'] = array_sum($amount_array);
					$data['total_each_mat_qty'] = array_sum($quantity_array);	
					$data['total_each_material_tax'] = array_sum($gst_tax_array_each_product);	
					$data['total_amount'] = array_sum($original_cost);
					$data['gst_tax'] = array_sum($gst_tax);
				
					$data['total_payable'] = array_sum($total_payable);
					
				
					$this->load->view('checkout/payment_option',$data);
				}else{
					$this->session->set_flashdata("failed", "Please manage your address");
					redirect('checkout/delivery_address');
				}
			}else{
				redirect('checkout');
			}
		}else{
			redirect('checkout');
		}
	}
	
	public function pay_mode(){
		$pay_mode = $this->input->post('pay_mode');
		if($pay_mode == 'online'){
			redirect('checkout/checkout_send_ccavenue');
		}
		else if($pay_mode == 'cash_delivery')
		{
			redirect('checkout/cash_delivery');
		}
	}
	
	public function checkout_send_ccavenue(){
		$this->load->library('user_agent');
		$this->load->model('checkout_m');
		$ip_data = $this->input->ip_address();

		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}

		if($data['user_id'] != ""){
			$data['fetch_prod_data'] = $this->checkout_m->cart_info($data['user_id'],$ip_data);
			
			if(!empty($data['fetch_prod_data'])){
				$data['fetch_address_data'] = $this->checkout_m->address_info($data['user_id'],$ip_data);
				if($data['fetch_address_data']->address_id != ''){

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
						$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) - ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
					}
					$data['fetch_address_data'] = $this->checkout_m->address_info($data['user_id'],$ip_data);
					$data['total_each_mat_price'] = array_sum($amount_array);
					$data['total_each_mat_qty'] = array_sum($quantity_array);	
					$data['total_each_material_tax'] = array_sum($gst_tax_array_each_product);	
					$data['total_amount'] = array_sum($original_cost);
					$data['gst_tax'] = array_sum($gst_tax);
				
					$data['total_payable'] = array_sum($total_payable);
					
				
					$this->load->view('ccavenue/datafrom',$data);
				}else{
					$this->session->set_flashdata("failed", "Please manage your address");
					redirect('checkout/delivery_address');
				}
			}
		}

		$this->load->view('ccavenue/datafrom',$data);
	}

	public function checkout_ccavenue(){
		$data = "";
		$this->load->view('ccavenue/ccavRequestHandler',$data);
	}

	
	/* Payment_option PAGE of checkout COD Starts*/
	public function cash_delivery(){
		$this->load->model('checkout_m');
		//$pay_mode = $this->input->post('pay_mode');
		$ip_data = $this->input->ip_address();
		$date = time();
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != ""){
			$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
		}else{
			$data['user_id'] = "";
		}
		if($data['user_id'] != ""){
			$data['fetch_prod_data'] = $this->checkout_m->cart_info($data['user_id'],$ip_data);
			
			if(!empty($data['fetch_prod_data'])){
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
					$total_payable[] =  ($each_cart_data->price * $each_cart_data->qty) - ($each_cart_data->raw_gst_rate * ($each_cart_data->price * $each_cart_data->qty)/100);
				}
			
				$data['total_each_mat_price'] = array_sum($amount_array);
				$data['total_each_mat_qty'] = array_sum($quantity_array);	
				$data['total_each_material_tax'] = array_sum($gst_tax_array_each_product);	
				$data['total_amount'] = array_sum($original_cost);
				$data['gst_tax'] = array_sum($gst_tax);
			
				$data['total_payable'] = array_sum($total_payable);
				

				foreach($data['fetch_prod_data'] AS $key=>$each_cart_data){
					
					if($data['fetch_prod_data'][$key]->product_type == 'readymade'){
						$prod_data = $this->checkout_m->prod_data($each_cart_data->product_id);
						$product_name = $prod_data->product_name;
					}else if($data['fetch_prod_data'][$key]->product_type == 'customised'){
						$fetch_cat_name = $this->checkout_m->cat_data($each_cart_data->raw_category);
						$product_name = 'customised'.' '.$fetch_cat_name->category_name;
					}
					
					$cart_data = array(
						'product_id'=> $each_cart_data->product_id,
						'product_name'=>$product_name,
						'product_image' => $each_cart_data->design_image,
						'user_id' => $data['user_id'],
						'purchase_type'=>'customer',
						'purchaser_email'=>$this->session->userdata['logged_in']['email'],
						'supplier_name'=>$each_cart_data->raw_added_by,
						'product_price' =>$total_payable[$key],
						'order_amount' =>$original_cost[$key],
						'order_qty'=>$each_cart_data->qty,
						'payment_status'=> 'pending',
						'delivery_status'=> 'Yet To Be Shipped',
						'order_status'=> 'pending',
						'payment_method'=>'cod',
						'order_date'=>$date
					);
					
					$insert_order = $this->checkout_m->order_place($cart_data);
				}
				
				if($insert_order){
					$remove_from_cart = $this->checkout_m->remove_cart_order_place($data['user_id']);
					foreach($data['fetch_prod_data'] AS $key=>$each_cart_data){
						$raw_id = $each_cart_data->raw_id;
						$updated_quantity = $each_cart_data->raw_quantity - $each_cart_data->qty;

						$quant_data = array(
							'raw_quantity' => $updated_quantity
						);
						$update_quantity = $this->checkout_m->update_quant($quant_data,$raw_id);
					}
					redirect('thank_you');
				}
			}
		}
	}
	/* Payment_option PAGE of checkout COD Ends*/

}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */