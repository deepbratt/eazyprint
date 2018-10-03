<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product extends CI_Controller {

	public function index()
	{
		$this->load->model('add_product_m');
		$data['get_all_brands'] = $this->add_product_m->fetch_brands();
		$data['get_all_models'] = $this->add_product_m->fetch_models();
		$this->load->view('add_product',$data);
	}

	public function add_new_product(){
		$this->load->model('add_product_m');

		$brand_id = $this->input->post('brand_name');
		$model_number = $this->input->post('model_number');	
		$date = time();

		/* Image Upload Starts*/
		if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ""){
			$_FILES['userFile']['name'] = $_FILES['image']['name'];
			$_FILES['userFile']['type'] = $_FILES['image']['type'];
			$_FILES['userFile']['tmp_name'] = $_FILES['image']['tmp_name'];
			$_FILES['userFile']['error'] = $_FILES['image']['error'];
			$_FILES['userFile']['size'] = $_FILES['image']['size'];

			$uploadPath = 'uploads/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('userFile')){
				$fileData = $this->upload->data();
				$image = $fileData['file_name'];
			}
		}
		/* Image Upload Ends*/

		$product_info = array(
			"brand_id" => $brand_id, 
			"model_id" => $model_number, 
			"image" => $image,
			"date" => $date,
			"status" => '1'
		);
		
		$insert_new_product = $this->add_product_m->add_new_productz($product_info);
		if($insert_new_product){
			$this->session->set_flashdata("add_product_successfull", "The new product has been added successfully...!");		
			redirect('add_product');
		}else{
			$this->session->set_flashdata("add_product_failed", "Failed to add new product...!");
			redirect('add_product');
		}
	}
}
?>