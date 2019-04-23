<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		$this->load->library('user_agent');
		$this->load->model('order_m');
		$ip_data = $this->input->ip_address();
		$data['user_id'] = $this->session->userdata['logged_in']['user_id'];
	
		if($data['user_id'] != ""){
			$data['fetch_prod_data'] = $this->order_m->order_info($data['user_id']);
			
			

		}
		else
		{
			redirect('login');
		}
		
		$this->load->view('order',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */