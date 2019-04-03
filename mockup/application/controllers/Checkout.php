<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		$this->load->model('checkout_m');
		if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['user_id'] != null){
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}else{
			redirect('login');
		}
		
		$data['fetch_prod_data'] = $this->checkout_m->prod_info($user_id);
		$data['fetch_prod_image_data'] = $this->checkout_m->prod_image_info($pro_id);
		$single_image = array();
		foreach($data['fetch_prod_image_data'] AS $fetch_single_images){
			$single_image[] = $fetch_single_images->product_image_path;
		}
		$data['single_prod_image'] = $single_image;
		$this->load->view('checkout',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */