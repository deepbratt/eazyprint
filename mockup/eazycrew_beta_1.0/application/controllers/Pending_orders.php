<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pending_orders extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }
    
	public function index()
	{
		$this->load->model('pending_orders_m');
		$order_status = "pending";
		$data['get_pending_orders'] = $this->pending_orders_m->get_it($order_status);
		
		$this->load->view('orders/pending_orders',$data);
	}
}

/* End of file Admin_login.php */
/* Location: ./application/controllers/Admin_login.php */