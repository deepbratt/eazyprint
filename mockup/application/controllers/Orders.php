<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->library('user_agent');
		$this->load->model('orders_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['get_orders'] = $this->orders_m->order_info($user_id);
		
		
		$this->load->view('customer/orders',$data);
	}

	public function refund_process()
	{
		$this->load->model('orders_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$get_order_id = $this->uri->segment(3);
		$get_order_details = $this->orders_m->get_it_product($get_order_id);
		$refund_date = time();
		$refund_status = "pending";
		$records =  array(
						  'order_id' => $get_order_id,
						  'user_type' => $row->user_type,
						  'name' =>$fullname,
						  'email'=>$row->user_email,
						  'phone'=>$row->user_phone
					   );
		

		


	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */