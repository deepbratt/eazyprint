<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_product extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('edit_product_m');
		$this->load->model('add_product_m');
		$product_id = $this->uri->segment(2);
		$data['fetch_product'] = $this->edit_product_m->fetch_pro($product_id);
		$data['get_all_category'] = $this->add_product_m->get_category();
		$data['get_all_brand'] = $this->edit_product_m->get_brand();
		$raw_id = $data['fetch_product']->raw_id;
		$data['fetch_raw'] = $this->edit_product_m->fetch_raw($raw_id);
		$data['fetch_image'] = $this->edit_product_m->fetch_pro_img($product_id);
		$this->load->view('products/edit_product',$data);
	}

	public function update_product()
	{
		$this->load->model('edit_product_m');
		$product_id = $this->uri->segment(3);
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
		$implode_meta_tags = implode(',',$meta_tags);
		$meta_keyword = $this->input->post('meta_keyword');
		$implode_meta_keywords = implode(',',$meta_keyword);
		$meta_desc = $this->input->post('meta_desc');
		$update_date = time();
		$product_status = '1';
		
		$fetch_product = $this->edit_product_m->fetch_pro($product_id);
	
		if(!empty($_FILES['meta_image']['name'])){
			$config['upload_path'] = 'uploads/meta_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['meta_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('meta_image')){
				$uploadData = $this->upload->data();
				$meta_image = $uploadData['file_name'];
			}
		}else{
			$meta_image = $fetch_product->product_meta_image;
		}

		$records = array('product_name'=>$product_name,'product_title'=>$product_title,'product_desc'=>$product_desc,'product_designed_by'=>$designed_by,'product_wholesale_price'=>$wholesale_price,'product_retail_price'=>$retail_price,'	product_status'=>$product_status,'product_updated_date'=>$update_date,'product_meta_tags'=>$implode_meta_tags,'product_meta_keyword'=>$implode_meta_keywords,'product_meta_desc'=>$meta_desc,'product_meta_image'=>$meta_image);

		$update_product = $this->edit_product_m->update_product($product_id,$records);

		if($update_product != ''){
			 	
			 	if(!empty($_FILES['p_image']['name'])){
				$this->load->library('upload');
				$image = array();
				$filesCount = count($_FILES['p_image']['name']);
				
				for($i = 0; $i < $filesCount; $i++){
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
					$update_image = $this->edit_product_m->update_pro_img($record);
				}
			}

				$this->session->set_flashdata("success", "Product Updated Successfully!");
		}else{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
		}
		redirect('edit_product/'.$product_id);
	}

	public function delete_product_image(){

		$this->load->model('edit_product_m');
		$product_id = $this->uri->segment(3);
		$product_image_id = $this->uri->segment(4);
		$user_id = $this->session->userdata['logged_in']['user_id'];

		$fetch_product = $this->edit_product_m->fetch_pro_img_info($product_image_id);
		$fetch_product_name = $fetch_product->product_image_path;
		
		$delete_pro_image = $this->edit_product_m->delete_image($product_image_id,$fetch_product_name);
		
		if($delete_pro_image){
			$this->session->set_flashdata("success", "Product Deleted Successfully!");	
		}else{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
		}
		redirect('edit_product/'.$product_id);
	}

}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */