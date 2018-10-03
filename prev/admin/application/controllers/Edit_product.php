<?php

/**
 * @Author: DEBASHIS NATH
 * @Date:   2018-09-14 00:20:22
 * @Last Modified by:   DEBASHIS NATH
 * @Last Modified time: 2018-09-14 00:51:48
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_product extends CI_Controller {

	public function index()
	{
		$this->load->model('edit_product_m');
		$data['get_all_brands'] = $this->edit_product_m->fetch_brands();
		$data['get_all_models'] = $this->edit_product_m->fetch_models();
		$product_id = $this->uri->segment(2);
		$data['fetch_all_product'] = $this->edit_product_m->fetch_product($product_id);
		$this->load->view('edit_product',$data);
	}
	public function update_new_product()
	{
		$this->load->model('edit_product_m');
		$product_id = $this->uri->segment(3);
		$brand_id = $this->input->post('brand_name');
		$model_number = $this->input->post('model_number');		
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
							"model_id" => $model_number, 
							"image" => $image, 
							"date" => $date, 
							"status" => '1'
					);
                }else{
					$records=array(
							"brand_id" => $brand_id, 
							"model_id" => $model_number, 
							"date" => $date, 
							"status" => '1'
							);
                }
		}else{
			$records=array(
						"brand_id" => $brand_id, 
						"model_id" => $model_number,
						"date" => $date, 
						"status" => '1'
						);
			}

			
			$update_product_name = $this->edit_product_m->update_new_product($product_id,$records);
			if($update_product_name){
				$this->session->set_flashdata("update_product_successfull", "The defined product has been updated successfully...!");		
				redirect('edit_product/'.$product_id);
			}else{
				$this->session->set_flashdata("update_product_failed", "Failed to update the defined product...!");
				redirect('edit_product/'.$product_id);
			}
		}
}

/* End of file Edit_product.php */
/* Location: ./application/controllers/Edit_product.php */
/* End of file Edit_product.php */
/* Location: ./application/controllers/Edit_product.php */