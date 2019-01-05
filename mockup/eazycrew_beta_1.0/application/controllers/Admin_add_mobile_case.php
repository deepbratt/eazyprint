<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_mobile_case extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->view('admin_add_mobile_case');
	}

	public function add_mobile_case(){

		$this->load->model('admin_add_mobile_case_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		// Product Classification
		$category = $this->input->post('category');
		$brand = $this->input->post('brand');
		$model = $this->input->post('model');
		// Product Information
		$product_name = $this->input->post('product_name');
		$product_title = $this->input->post('product_title');
		$product_desc = $this->input->post('product_desc');
		// Product Specification
		$product_material_type = $this->input->post('product_material_type');
		$product_size = $this->input->post('product_size');
		$dimension_len = $this->input->post('dimension_len');
		$dimension_wid = $this->input->post('dimension_wid');
		$dimension_height = $this->input->post('dimension_height');
		$product_dimension = $this->input->post('product_dimension');
		$product_shape = $this->input->post('product_shape');
		$product_weight = $this->input->post('product_weight');
		$product_weight_dimension = $this->input->post('product_weight_dimension');
		$product_color = $this->input->post('product_color');
		$implode_product_color = implode(',',$product_color);
		$color_code = $this->input->post('color_code');
		$implode_color_code = implode(',',$color_code);
		$quantity = $this->input->post('quantity');
		$min_order = $this->input->post('min_order');
		// Price Specification
		$wholesale_price = $this->input->post('wholesale_price');
		$retail_price = $this->input->post('retail_price');
		$purchase_price = $this->input->post('purchase_price');
		// SEO Optimization
		$meta_tags = $this->input->post('meta_tags');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_desc = $this->input->post('meta_desc');
		// SKU CALCULATION STARTS
		$sku = strtoupper($category).''.strtoupper($brand).''.strtoupper($model).''.strtoupper($product_size).''.strtoupper($product_weight);
		// SKU CALCULATION ENDS
		$date = time();

		if(!empty($_FILES['p_image']['name'])){
			$config['upload_path'] = 'uploads/product_images/mobile_cases/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['p_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('p_image')){
				$uploadData = $this->upload->data();
				$product_image = $uploadData['file_name'];
				
				if(!empty($_FILES['meta_image']['name'])){
					$config['upload_path'] = 'uploads/meta_images/';
					$config['allowed_types'] = 'jpg|jpeg|png|gif';
					$config['file_name'] = rand(999,99999).$_FILES['meta_image']['name'];
					
					$this->load->library('upload',$config);
					$this->upload->initialize($config);

					if($this->upload->do_upload('meta_image')){
						$uploadData = $this->upload->data();
						$meta_image = $uploadData['file_name'];

						$records=array(
									'raw_added_by' => $user_id,
									'raw_category' => $category,
									'raw_brand' => $brand,
									'raw_model_no' => $model,
									'raw_name' => $product_name,
									'raw_title' => $product_title,
									'raw_desc' => $product_desc,
									'raw_sku' => $sku,
									'raw_image' => $product_image,
									'raw_wholesale_price' => $wholesale_price,
									'raw_retail_price' => $retail_price,
									'raw_purchase_price' => $purchase_price,
									'raw_material_type' => $product_material_type,
									'raw_color' => $implode_product_color,
									'raw_color_code' => $implode_color_code,
									'raw_size' => $product_size,
									'raw_shapetype' => $product_shape,
									'raw_quantity' => $quantity,
									'min_order' => $min_order,
									'raw_dimension_length' => $dimension_len,
									'raw_dimension_width' => $dimension_wid,
									'raw_dimension_height' => $dimension_height,
									'raw_dimension_unit' => $product_dimension,
									'raw_weight' => $product_weight,
									'raw_weight_unit' => $product_weight_dimension,
									'raw_supplier_id' => $user_id,
									'raw_status' => "1",
									'raw_added_date' => $date,
									'raw_updated_date' => $date,
									'raw_tags' => $meta_tags,
									'raw_meta_img' => $meta_image,
									'raw_meta_keywords' => $meta_keyword,
									'raw_meta_desc' => $meta_desc


								  );
						
					}else{
							$records=array(
									'raw_added_by' => $user_id,
									'raw_category' => $category,
									'raw_brand' => $brand,
									'raw_model_no' => $model,
									'raw_name' => $product_name,
									'raw_title' => $product_title,
									'raw_desc' => $product_desc,
									'raw_sku' => $sku,
									'raw_image' => $product_image,
									'raw_wholesale_price' => $wholesale_price,
									'raw_retail_price' => $retail_price,
									'raw_purchase_price' => $purchase_price,
									'raw_material_type' => $product_material_type,
									'raw_color' => $implode_product_color,
									'raw_color_code' => $implode_color_code,
									'raw_size' => $product_size,
									'raw_shapetype' => $product_shape,
									'raw_quantity' => $quantity,
									'min_order' => $min_order,
									'raw_dimension_length' => $dimension_len,
									'raw_dimension_width' => $dimension_wid,
									'raw_dimension_height' => $dimension_height,
									'raw_dimension_unit' => $product_dimension,
									'raw_weight' => $product_weight,
									'raw_weight_unit' => $product_weight_dimension,
									'raw_supplier_id' => $user_id,
									'raw_status' => "1",
									'raw_added_date' => $date,
									'raw_updated_date' => $date,
									'raw_tags' => $meta_tags,
									'raw_meta_img' => $meta_image,
									'raw_meta_keywords' => $meta_keyword,
									'raw_meta_desc' => $meta_desc
								  );
						
					}
				}else{
					$records=array(
									'raw_added_by' => $user_id,
									'raw_category' => $category,
									'raw_brand' => $brand,
									'raw_model_no' => $model,
									'raw_name' => $product_name,
									'raw_title' => $product_title,
									'raw_desc' => $product_desc,
									'raw_sku' => $sku,
									'raw_image' => $product_image,
									'raw_wholesale_price' => $wholesale_price,
									'raw_retail_price' => $retail_price,
									'raw_purchase_price' => $purchase_price,
									'raw_material_type' => $product_material_type,
									'raw_color' => $implode_product_color,
									'raw_color_code' => $implode_color_code,
									'raw_size' => $product_size,
									'raw_shapetype' => $product_shape,
									'raw_quantity' => $quantity,
									'min_order' => $min_order,
									'raw_dimension_length' => $dimension_len,
									'raw_dimension_width' => $dimension_wid,
									'raw_dimension_height' => $dimension_height,
									'raw_dimension_unit' => $product_dimension,
									'raw_weight' => $product_weight,
									'raw_weight_unit' => $product_weight_dimension,
									'raw_supplier_id' => $user_id,
									'raw_status' => "1",
									'raw_added_date' => $date,
									'raw_updated_date' => $date,
									'raw_tags' => $meta_tags,
									'raw_meta_keywords' => $meta_keyword,
									'raw_meta_desc' => $meta_desc


								  );
					
				}
			}else{
				$records=array(
									'raw_added_by' => $user_id,
									'raw_category' => $category,
									'raw_brand' => $brand,
									'raw_model_no' => $model,
									'raw_name' => $product_name,
									'raw_title' => $product_title,
									'raw_desc' => $product_desc,
									'raw_sku' => $sku,
									'raw_wholesale_price' => $wholesale_price,
									'raw_retail_price' => $retail_price,
									'raw_purchase_price' => $purchase_price,
									'raw_material_type' => $product_material_type,
									'raw_color' => $implode_product_color,
									'raw_color_code' => $implode_color_code,
									'raw_size' => $product_size,
									'raw_shapetype' => $product_shape,
									'raw_quantity' => $quantity,
									'min_order' => $min_order,
									'raw_dimension_length' => $dimension_len,
									'raw_dimension_width' => $dimension_wid,
									'raw_dimension_height' => $dimension_height,
									'raw_dimension_unit' => $product_dimension,
									'raw_weight' => $product_weight,
									'raw_weight_unit' => $product_weight_dimension,
									'raw_supplier_id' => $user_id,
									'raw_status' => "1",
									'raw_added_date' => $date,
									'raw_updated_date' => $date,
									'raw_tags' => $meta_tags,
									'raw_meta_keywords' => $meta_keyword,
									'raw_meta_desc' => $meta_desc


								  );
			}
		}else{
			$records=array(
						'raw_added_by' => $user_id,
						'raw_category' => $category,
						'raw_brand' => $brand,
						'raw_model_no' => $model,
						'raw_name' => $product_name,
						'raw_title' => $product_title,
						'raw_desc' => $product_desc,
						'raw_sku' => $sku,
						'raw_wholesale_price' => $wholesale_price,
						'raw_retail_price' => $retail_price,
						'raw_purchase_price' => $purchase_price,
						'raw_material_type' => $product_material_type,
						'raw_color' => $implode_product_color,
						'raw_color_code' => $implode_color_code,
						'raw_size' => $product_size,
						'raw_shapetype' => $product_shape,
						'raw_quantity' => $quantity,
						'min_order' => $min_order,
						'raw_dimension_length' => $dimension_len,
						'raw_dimension_width' => $dimension_wid,
						'raw_dimension_height' => $dimension_height,
						'raw_dimension_unit' => $product_dimension,
						'raw_weight' => $product_weight,
						'raw_weight_unit' => $product_weight_dimension,
						'raw_supplier_id' => $user_id,
						'raw_status' => "1",
						'raw_added_date' => $date,
						'raw_updated_date' => $date,
						'raw_tags' => $meta_tags,
						'raw_meta_keywords' => $meta_keyword,
						'raw_meta_desc' => $meta_desc
					  );
		}

		$insert_product = $this->admin_add_mobile_case_m->insert_product($records);
		$this->session->set_flashdata("success", "Product Added Successfully!");
		redirect('admin_add_mobile_case');
	}

}

/* End of file Admin_add_raw_material.php */
/* Location: ./application/controllers/Admin_add_raw_material.php */