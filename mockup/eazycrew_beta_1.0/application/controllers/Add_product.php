<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_product extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		
     }

	public function index()
	{
		$this->load->model('add_product_m');
		$data['get_all_category'] = $this->add_product_m->get_category();
		$this->load->view('products/add_product',$data);
	}

	public function add_pro(){ 

		$this->load->model('add_product_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$category = $this->input->post('category');
		$raw_name = $this->input->post('raw_name');
		$product_name = $this->input->post('product_name');
		$product_title = $this->input->post('product_title');
		$product_desc = $this->input->post('product_desc');
		$wholesale_price = $this->input->post('wholesale_price');
		$retail_price = $this->input->post('retail_price');
		$designed_by = $this->input->post('designed_by');
		$p_sku = $this->input->post('p_sku');
		$meta_tags = $this->input->post('meta_tags');
		//$implode_meta_tags = implode(",",$meta_tags);
		$meta_keyword = $this->input->post('meta_keyword');
		//$implode_meta_keywords = implode(',',$meta_keyword);
		$meta_desc = $this->input->post('meta_desc');
		$ad_date = time();
		$product_status = '1';

		if(!empty($_FILES['meta_image']['name'])){
			$this->load->library('upload');
			$config['upload_path'] = 'uploads/meta_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['meta_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('meta_image')){
				$uploadData = $this->upload->data();
				$meta_image = $uploadData['file_name'];
				
			}else{
				$meta_image = "";
			}
		}

		$records = array('product_meta_image'=>$meta_image,'raw_id'=>$raw_name,'user_id'=>$user_id,'product_category_id'=>$category,'product_name'=>$product_name,'product_title'=>$product_title,'product_desc'=>$product_desc,'product_designed_by'=>$designed_by,'	product_wholesale_price'=>$wholesale_price,'product_retail_price'=>$retail_price,'product_sku'=>$p_sku,'product_meta_tags'=>$meta_tags,'product_meta_keyword'=>$meta_keyword,'product_meta_desc'=>$meta_desc,'product_added_date'=>$ad_date,'product_status'=>$product_status);

			$update_product = $this->add_product_m->update_pro($records);

			if($update_product != ''){
				 	
				 	if(!empty($_FILES['p_image']['name'])){
					$this->load->library('upload');
					$image = array();
					$filesCount = count($_FILES['p_image']['name']);
					
					for($i = 1; $i < $filesCount; $i++){
						$_FILES['userFile']['name'] = $_FILES['p_image']['name'][$i];
						$_FILES['userFile']['type'] = $_FILES['p_image']['type'][$i];
						$_FILES['userFile']['tmp_name'] = $_FILES['p_image']['tmp_name'][$i];
						$_FILES['userFile']['error'] = $_FILES['p_image']['error'][$i];
						$_FILES['userFile']['size'] = $_FILES['p_image']['size'][$i];

						$config['upload_path'] = 'uploads/product_images/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif';
						$config['file_name'] = rand(999,99999).$_FILES['p_image']['name'][$i];
						
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						
						if($this->upload->do_upload('userFile')){
							$fileData = $this->upload->data();
							$product_image[$i]['file_name'] = $fileData['file_name'];
							$product_image[$i]['created'] = date("Y-m-d H:i:s");
							$product_image[$i]['modified'] = date("Y-m-d H:i:s");
						}
						$record = array('product_id'=>$update_product,'product_image_path'=>$product_image[$i]['file_name']);
						$update_image = $this->add_product_m->update_pro_img($record);
					}
					
				}

					$this->session->set_flashdata("success", "Product Updated Successfully!");
				}else{
					$this->session->set_flashdata("failed", "Product Updated Wrong!");
				}
				redirect('add_product');
		
	}

}

