<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completed_orders extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->model('completed_orders_m');
		$user_type = $this->session->userdata['logged_in']['user_type'];
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$order_status = "completed";

		if($user_type == 'dealer')
		{
			$data['get_completed_orders'] = $this->completed_orders_m->get_it_completed($user_id,$order_status);
		}
		else
		{
			$data['get_completed_orders'] = $this->completed_orders_m->get_it($order_status);
		}

		print_r ($data['get_completed_orders']);
		exit;
		$this->load->view('orders/completed_orders');
	}
}

/* End of file Admin_login.php */
/* Location: ./application/controllers/Admin_login.php */