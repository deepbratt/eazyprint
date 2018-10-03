<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_brand extends CI_Controller {

	public function index()
	{
		$this->load->view('add_brand');
	}

	public function new_brand(){
		$this->load->model('add_brand_m');
		$brand_name = $this->input->post('brand_name');
		$date = time();
		$records = array(
				"brand_name" => $brand_name,
				"date" => $date,
				"status" => "1"
		);		
		$insert_new_brand = $this->add_brand_m->add_new_brand($records);
		if($insert_new_brand){
			$this->session->set_flashdata("add_brand_successfull", "The new brand has been added successfully...!");		
			redirect('add_brand');
		}else{
			$this->session->set_flashdata("add_brand_failed", "Failed to add new brand...!");
			redirect('add_brand');

		}
	}
}
?>