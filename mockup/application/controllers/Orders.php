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
						  'product_id' => $get_order_details->product_id,
						  'user_id' =>$user_id,
						  'refund_date'=>$refund_date,
						  'refund_status'=>$refund_status
					   );

		$insert_refund_process = $this->orders_m->insert_refund($records);

		if($insert_refund_process)
		{
			$this->session->set_flashdata("success", "Refund Placed Successfully");
			redirect('orders');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('orders');
		}

	}

	public function cancel_order()
	{
		$this->load->model('orders_m');
		$order_id = $this->uri->segment(3);
		$get_cancel_order = $this->orders_m->get_cancel_order($order_id);
		if($get_cancel_order)
		{
			
			$this->session->set_flashdata("order_cancel_success", "You Have Successfully Canceled The Order");
			redirect('orders');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('orders');
		}

		
	}

	public function req_invoice()
	{
		$this->load->model('orders_m');
		$order_id = $this->uri->segment(3);
		$get_order_details = $this->orders_m->get_it_product($order_id);
		$address_id = $get_order_details->user_address_id;
		$get_address_detail = $this->orders_m->get_address_detail($address_id);

		//for current scenario GST calculation
		if($get_address_detail->state != 'West Bengal'){
			$
		}
	}

}

/* End of file Orders.php */
/* Location: ./application/controllers/Orders.php */