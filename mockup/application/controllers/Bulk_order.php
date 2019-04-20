<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulk_order extends CI_Controller {

	public function index()
	{
		$this->load->view('bulk_order');
	}

	public function order()
		{ 
		$this->load->model('bulk_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$category = $this->input->post('category');
		$quantity = $this->input->post('quantity');
		$date = time();
		$status = '1';

			$records = array('bulk_name'=>$name,'bulk_email'=>$email,'bulk_phone'=>$phone,'bulk_cat'=>$category,'bulk_quantity'=>$quantity,'bulk_status'=>$status,'bulk_date'=>$date);

			$update_bulk = $this->bulk_order_m->update_order($records);
			redirect('bulk_order');
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */