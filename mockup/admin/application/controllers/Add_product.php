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
		//$data['get_all_raw_materials'] = $this->add_product_m->get_raw_materials();
		$this->load->view('products/add_product',$data);

	}
	
	/* BRAND DETAILS FETCH STARTS*/
		public function ajax_fetch_brand_data(){
			$this->load->model('add_product_m');
			$cat_id = $this->input->post('cat_id');
			$fetch_brand_data = $this->add_product_m->get_brand_data($cat_id);
			?>
				<option value="" selected disabled>Brand</option>
			<?php
				foreach($fetch_brand_data AS $each_fetch_brand){
			?>
				<option value="<?php echo $each_fetch_brand->raw_brand;?>"><?php echo $each_fetch_brand->raw_brand;?></option>
			<?php
				}
		}
	/* BRAND DETAILS FETCH ENDS*/

	/* All RAW MATERIALS FETCH STARTS*/
		public function ajax_fetch_raw_data(){
			$this->load->model('add_product_m');
			$brand_name = $this->input->post('brand_id');
			$fetch_raw_data = $this->add_product_m->get_raw_options($brand_name);
			?>
				<option value="" selected disabled>Raw Material</option>
			<?php
				foreach($fetch_raw_data AS $each_fetch_raw){
			?>
				<option value="<?php echo $each_fetch_raw->raw_id;?>"><?php echo $each_fetch_raw->raw_title;?></option>
			<?php
				}
		}
	/* All RAW MATERIALS FETCH ENDS*/

	/* RAW MATERIALS DETAILS FETCH STARTS*/
		public function fetch_raw_material_data(){
			$this->load->model('add_product_m');
			$raw_id = $this->input->post('raw_id');
			$fetch_raw_data = $this->add_product_m->get_raw_materials($raw_id);
			echo json_encode($fetch_raw_data);
			
		}
	/* RAW MATERIALS DETAILS FETCH ENDS*/

	/* Designed By DETAILS FETCH STARTS*/
		public function ajax_fetch_designed_id(){
			$this->load->model('add_product_m');
			$design_id = $this->input->post('design_id');
			$fetch_raw_data_designed_data = $this->add_product_m->get_raw_materials_design_by($design_id);
			echo $fetch_raw_data_designed_data->crew_fname;
			echo " ";
			echo $fetch_raw_data_designed_data->crew_lname;
			
		}
	/* Designed By DETAILS FETCH ENDS*/

	public function add_pro(){ 

		$this->load->model('add_product_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		/*$p_image = count($_FILES['p_image']['name']);
		print_r($p_image);
		exit;*/
		$category = $this->input->post('category');
		$raw_brand = $this->input->post('raw_brand');
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

		if(!empty($_FILES['design_image']['name'])){

			$this->load->library('upload');
			$image = array();
			$filesCount = count($_FILES['design_image']['name']);

			for($i = 1; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['design_image']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['design_image']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['design_image']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['design_image']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['design_image']['size'][$i];

				$config['upload_path'] = 'uploads/design_images/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$config['file_name'] = rand(999,99999).$_FILES['design_image']['name'][$i];
				
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$design_imagezz[$i]['file_name'] = $fileData['file_name'];
					$design_imagezz[$i]['created'] = date("Y-m-d H:i:s");
					$design_imagezz[$i]['modified'] = date("Y-m-d H:i:s");
				}
				//echo $design_imagezz[$i]['file_name'];
				//echo ",";
				//echo "<br>";
			}
		}
		

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

		$records = array('product_meta_image'=>$meta_image,'raw_id'=>$raw_name,'raw_brand'=>$raw_brand,'user_id'=>$user_id,'product_category_id'=>$category,'product_name'=>$product_name,'product_title'=>$product_title,'product_desc'=>$product_desc,'product_designed_by'=>$designed_by,'	product_wholesale_price'=>$wholesale_price,'product_retail_price'=>$retail_price,'product_sku'=>$p_sku,'product_meta_tags'=>$meta_tags,'product_meta_keyword'=>$meta_keyword,'product_meta_desc'=>$meta_desc,'product_added_date'=>$ad_date,'product_status'=>$product_status);

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

