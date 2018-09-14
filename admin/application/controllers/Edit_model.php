<?php

/**
 * @Author: DEBASHIS NATH
 * @Date:   2018-09-13 19:27:43
 * @Last Modified by:   DEBASHIS NATH
 * @Last Modified time: 2018-09-13 23:15:12
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_model extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_model_m');
		$data['get_all_brands'] = $this->edit_model_m->fetch_brands();
		$model_id = $this->uri->segment(2);
		$data['fetch_all_models'] = $this->edit_model_m->fetch_models($model_id);
		$this->load->view('edit_model',$data);
	}

	public function edit_new_model(){
		$this->load->model('edit_model_m');
		$model_id = $this->uri->segment(3);
		$brand_id = $this->input->post('brand_name');
		$model_number = $this->input->post('model_number');
		$height = $this->input->post('height');
		$width = $this->input->post('width');
		$cost_price = $this->input->post('cost_price');
		$number_of_pieces = $this->input->post('number_of_pieces');
		$cover_type = $this->input->post('cover_type');
		$color = $this->input->post('color');
		$date = time();
		
		if(!empty($_FILES['image']['name'])){
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
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array(
							"brand_id" => $brand_id, 
							"model_number" => $model_number, 
							"frame_image" => $image, 
							"frame_height" => $height, 
							"frame_width" => $width, 
							"cost_price" => $cost_price, 
							"no_pieces" => $number_of_pieces, 
							"cover_type" => $cover_type, 
							"colour" => $color, 
							"date" => $date, 
							"status" => '1'
					);
                }else{
					$records=array(
							"brand_id" => $brand_id, 
							"model_number" => $model_number, 
							"frame_image" => "not found", 
							"frame_height" => $height, 
							"frame_width" => $width, 
							"cost_price" => $cost_price, 
							"no_pieces" => $number_of_pieces, 
							"cover_type" => $cover_type, 
							"colour" => $color, 
							"date" => $date, 
							"status" => '1'
							);
                }
		}else{
			$records=array(
						"brand_id" => $brand_id, 
						"model_number" => $model_number, 
						"frame_height" => $height, 
						"frame_width" => $width, 
						"cost_price" => $cost_price, 
						"no_pieces" => $number_of_pieces, 
						"cover_type" => $cover_type, 
						"colour" => $color, 
						"date" => $date, 
						"status" => '1'
						);
			}

			
			$update_model_name = $this->edit_model_m->update_new_model($model_id,$records);
			if($update_model_name){
				$this->session->set_flashdata("update_model_successfull", "The defined model has been updated successfully...!");		
				redirect('edit_model/'.$model_id);
			}else{
				$this->session->set_flashdata("update_model_failed", "Failed to update the defined model...!");
				redirect('edit_model/'.$model_id);
			}
		}
	}
/* End of file Edit_model.php */
/* Location: ./application/controllers/Edit_model.php */