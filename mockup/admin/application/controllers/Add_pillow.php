<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_pillow extends CI_Controller {

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
		$this->load->view('products/add_pillow');
	}

	public function add_pro_pillow()
		{ 
		$this->load->model('add_pillow_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		
		//$category = $this->input->post('category');
		$category = '4';
		$product_name = $this->input->post('product_name');
		$product_title = $this->input->post('product_title');
		$product_desc = $this->input->post('product_desc');
		$product_material_type = $this->input->post('product_material_type');
		$dimension_len = $this->input->post('dimension_len');
		$dimension_height = $this->input->post('dimension_height');
		$dimension_width = $this->input->post('dimension_width');
		$product_dimension_unit = $this->input->post('product_dimension_unit');
		$product_shape = $this->input->post('product_shape');
		$product_weight = $this->input->post('product_weight');
		$product_weight_unit = $this->input->post('product_weight_unit');
		$product_color = $this->input->post('product_color');
		$implode_color = implode(',',$product_color);
		$color_code = $this->input->post('color_code');
		$implode_color_code = implode(',',$color_code);
		$product_quantity = $this->input->post('product_quantity');
		$min_order = $this->input->post('min_order');
		$wholesale_price = $this->input->post('wholesale_price');
		$retail_price = $this->input->post('retail_price');
		$purchase_price = $this->input->post('purchase_price');
		$meta_tags = $this->input->post('meta_tags');
		$implode_meta_tags = implode(',',$meta_tags);
		$meta_keyword = $this->input->post('meta_keyword');
		$implode_meta_keywords = implode(',',$meta_keyword);
		$meta_desc = $this->input->post('meta_desc');
		$hsn_code = $this->input->post('hsn_code');
		$gst_rate = $this->input->post('gst_rate');
		$ad_date = time();
		$raw_status = '1';

		if(!empty($_FILES['p_image']['name'])){
			$config['upload_path'] = 'uploads/product_images/mug/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['p_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('p_image')){
				$uploadData = $this->upload->data();
				$product_image = $uploadData['file_name'];
				
			}else{
				$product_image = "";
			}
		}
		

		if(!empty($_FILES['meta_image']['name'])){
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


			$records = array('raw_added_by'=>$user_id,'raw_category'=>$category,'raw_name'=>$product_name,'raw_image'=>$product_image,'raw_meta_img'=>$meta_image,'	raw_title'=>$product_title,'raw_desc'=>$product_desc,'raw_material_type'=>$product_material_type,'raw_shapetype'=>$product_shape,'raw_dimension_length'=>$dimension_len,'raw_dimension_height'=>$dimension_height,'raw_dimension_width'=>$dimension_width,'raw_dimension_unit'=>$product_dimension_unit,'raw_weight'=>$product_weight,'raw_weight_unit'=>$product_weight_unit,'raw_color'=>$implode_color,'raw_color_code'=>$implode_color_code,'raw_quantity'=>$product_quantity,'min_order'=>$min_order,'raw_wholesale_price'=>$wholesale_price,'raw_retail_price'=>$retail_price,'raw_purchase_price'=>$purchase_price,'raw_tags'=>$implode_meta_tags,'raw_meta_keywords'=>$implode_meta_keywords,'raw_meta_desc'=>$meta_desc,'raw_hsn_code'=>$hsn_code,'raw_gst_rate'=>$gst_rate,'raw_status'=>$raw_status,'raw_added_date'=>$ad_date);

			$update_mug = $this->add_pillow_m->update_pro_mug($records);

			if($update_mug)
			{
				$this->session->set_flashdata("success", "Product Updated Successfully!");
			}
			else
			{
				$this->session->set_flashdata("failed", "Product Updated Successfully!");
			}
			redirect('add_pillow');
	}

}

/* End of file Admin_add_mug.php */
/* Location: ./application/controllers/Admin_add_mug.php */