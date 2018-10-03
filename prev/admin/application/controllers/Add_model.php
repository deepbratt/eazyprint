<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_Controller {

	public function index()
	{
		$this->load->model('add_model_m');
		$data['get_all_brands'] = $this->add_model_m->fetch_brands();
		$this->load->view('add_model',$data);
	}

	public function add_new_model(){
		$this->load->model('add_model_m');

		$brand_id = $this->input->post('brand_name');
		$model_number = $this->input->post('model_number');
		$blank_frame_image = $this->input->post('blank_frame_image');
		$height = $this->input->post('height');
		$width = $this->input->post('width');
		$cost_price = $this->input->post('cost_price');
		$number_of_pieces = $this->input->post('number_of_pieces');
		$cover_type = $this->input->post('cover_type');
		$color = $this->input->post('color');
		$date = time();

		/* Image Upload Starts*/
		if(isset($_FILES['blank_frame_image']['name']) && $_FILES['blank_frame_image']['name'] != ""){
			$_FILES['userFile']['name'] = $_FILES['blank_frame_image']['name'];
			$_FILES['userFile']['type'] = $_FILES['blank_frame_image']['type'];
			$_FILES['userFile']['tmp_name'] = $_FILES['blank_frame_image']['tmp_name'];
			$_FILES['userFile']['error'] = $_FILES['blank_frame_image']['error'];
			$_FILES['userFile']['size'] = $_FILES['blank_frame_image']['size'];

			$uploadPath = 'uploads/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
			
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('userFile')){
				$fileData = $this->upload->data();
				$uploadData['file_name'] = $fileData['file_name'];
				$uploadData['created'] = date("Y-m-d H:i:s");
				$uploadData['modified'] = date("Y-m-d H:i:s");
			}
		}
		/* Image Upload Ends*/

		$model_info = array(
			"brand_id" => $brand_id, 
			"model_number" => $model_number, 
			"frame_image" => $uploadData['file_name'], 
			"frame_height" => $height, 
			"frame_width" => $width, 
			"cost_price" => $cost_price, 
			"no_pieces" => $number_of_pieces, 
			"cover_type" => $cover_type, 
			"colour" => $color, 
			"date" => $date, 
			"status" => '1'
		);
		
		$insert_new_model = $this->add_model_m->add_new_modelz($model_info);
		if($insert_new_model){
			$this->session->set_flashdata("add_model_successfull", "The new model has been added successfully...!");		
			redirect('add_model');
		}else{
			$this->session->set_flashdata("add_model_failed", "Failed to add new model...!");
			redirect('add_model');
		}
	}
}
?>