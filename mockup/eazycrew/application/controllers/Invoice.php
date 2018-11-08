<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	public function index()
	{
		$this->load->view('invoice');
	}

}

/* End of file Invoice.php */
/* Location: ./application/controllers/Invoice.php */