<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_brand extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
     }

	public function index()
	{
		$this->load->model('edit_brand_m');
		$brand_id = $this->uri->segment(2);
		$data['get_brand_name'] = $this->edit_brand_m->fetch_brands($brand_id);
		$this->load->view('edit_brand',$data);
	}

	public function edit_new_brand(){
		$this->load->model('edit_brand_m');
		$brand_id = $this->input->post('brand_id');
		$brand_name = $this->input->post('brand_name');
		$date = time();
		$records = array(
				"brand_name" => $brand_name,
				"date" => $date,
				"status" => "1"
		);	
		$update_brand_name = $this->edit_brand_m->update_new_brand($brand_id,$records);
		if($update_brand_name){
			$this->session->set_flashdata("update_brand_successfull", "The new brand has been updated successfully...!");		
			redirect('edit_brand/'.$brand_id);
		}else{
			$this->session->set_flashdata("update_brand_failed", "Failed to update new brand...!");
			redirect('edit_brand/'.$brand_id);
		}
	}
}
?>