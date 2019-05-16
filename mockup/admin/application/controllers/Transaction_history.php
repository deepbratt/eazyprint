<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_history extends CI_Controller {



	public function index()
	{
		$this->load->model('transaction_history_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
	
		$data["get_transaction_list"] = $this->transaction_history_m->get_order_details($user_id);

		$this->load->view('transasctions/transaction_history',$data);
	}



}

/* End of file Add_purchase_order.php */
/* Location: ./application/controllers/Add_purchase_order.php */