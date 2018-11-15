<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_product_m');
		$this->load->model('admin_add_product_m');
		$product_id = $this->uri->segment(2);
		$data['fetch_product'] = $this->admin_edit_product_m->fetch_product($product_id);
		$data['get_product_category'] = $this->admin_add_product_m->get_product_category();
		$data['get_sub_cat'] = $this->admin_edit_product_m->get_sub_cat($data['fetch_product']->product_category);
		$data['get_brand'] = $this->admin_edit_product_m->get_brand($data['fetch_product']->product_subcategory);
		$data['get_material_type'] = $this->admin_edit_product_m->get_material_type($data['fetch_product']->product_subcategory);
		$data['get_color'] = $this->admin_edit_product_m->get_color($data['fetch_product']->product_subcategory);
		$data['get_size'] = $this->admin_edit_product_m->get_size($data['fetch_product']->product_subcategory);
		$data['get_shape'] = $this->admin_edit_product_m->get_shape($data['fetch_product']->product_subcategory);
		$this->load->view('admin_edit_product', $data);
	}

	public function update_product()
	{
		$this->load->model('admin_edit_product_m');
		$this->load->model('admin_add_product_m');
		$product_id = $this->uri->segment(3);

		//Product Hierarchy Start
		$category = $this->input->post('category');
		$sub_category = $this->input->post('sub_category');
		$brand = $this->input->post('brand');
		if($this->input->post('model') != '')
		{
			$model = $this->input->post('model');
		}else{
			$model = "";
		}
		//Product Hierarchy Ends

		//Product Classification Starts
		$product_name = $this->input->post('product_name');
		$product_title = $this->input->post('product_title');
		$product_desc = $this->input->post('product_desc');
		//Product Classification Ends

		//Product Specification Starts
		$material_type = $this->input->post('material_type');
		if($this->input->post('color') != '')
		{
			$color = $this->input->post('color');
		}else{
			$color = "";
		}
		if($this->input->post('product_size') != '')
		{
			$product_size = $this->input->post('product_size');
		}else{
			$product_size = "";
		}
		if($this->input->post('product_shape') != '')
		{
			$product_shape = $this->input->post('product_shape');
		}else{
			$product_shape = "";
		}
		
		
		$product_weight = $this->input->post('product_weight');
		$dimension_len = $this->input->post('dimension_len');
		$dimension_wid = $this->input->post('dimension_wid');
		$dimension_height = $this->input->post('dimension_height');
		$quantity = $this->input->post('quantity');
		$min_order = $this->input->post('min_order');
		//Product Specification Ends

		//Price Specification Starts
		$wholesale_price = $this->input->post('wholesale_price');
		$retail_price = $this->input->post('retail_price');
		$purchase_price = $this->input->post('purchase_price');
		//Price Specification Ends

		//SEO Optimization Starts
		$meta_tags = $this->input->post('meta_tags');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_desc = $this->input->post('meta_desc');
		//SEO Optimization Ends

		//SKU CALCULATION STARTS
		$get_brand_name = $this->admin_add_product_m->get_brand_name($brand);
		$sku_brand_val = substr($get_brand_name->brand_code,0,2);
		$get_shape_name = $this->admin_add_product_m->get_shape_name($product_shape);
		if($sub_category == '9')
		{
			$sku_model_val = substr($model,0,2);
			$sku_shape_val = "00";
		}else{
			$sku_model_val = "00";
			if($get_shape_name->product_shapetype_name == "")
			{
				$sku_shape_val = "00";
			}else{
				$sku_shape_val = substr($get_shape_name->product_shapetype_name,0,2);
			}
			
		}
		$sku = sprintf("%02d", $category).''.sprintf("%02d", $sub_category).''.strtoupper($sku_brand_val).''.strtoupper($sku_model_val).''.strtoupper($sku_shape_val);
		//SKU CALCULATION ENDS
		$date = time();

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/meta_images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array(
									'product_category' => $category,
									'product_subcategory' => $sub_category,
									'product_brand' => $brand,
									'product_model_no' => $model,
									'product_name' => $product_name,
									'product_title' => $product_title,
									'product_desc' => $product_desc,
									'product_sku' =>  $sku,
									'product_wholesale_price' => $wholesale_price,
									'product_retail_price' => $retail_price,
									'product_purchase_price' => $purchase_price,
									'product_material_type' => $material_type,
									'product_color' => $color,
									'product_size' => $product_size,
									'product_shapetype' => $product_shape,
									'product_quantity' => $quantity,
									'min_order' => $min_order,
									'product_dimension_length' => $dimension_len,
									'product_dimension_width' => $dimension_wid,
									'product_dimension_height' => $dimension_height,
									'product_weight' => $product_weight,
									'product_supplier_id' => '1',
									'updated_date' => $date,
									'tags' => $meta_tags,
									'meta_img' => $image,
									'meta_keywords' => $meta_keyword,
									'meta_desc' => $meta_desc
								  );
                }else{
					$records=array(
									'product_category' => $category,
									'product_subcategory' => $sub_category,
									'product_brand' => $brand,
									'product_model_no' => $model,
									'product_name' => $product_name,
									'product_title' => $product_title,
									'product_desc' => $product_desc,
									'product_sku' =>  $sku,
									'product_wholesale_price' => $wholesale_price,
									'product_retail_price' => $retail_price,
									'product_purchase_price' => $purchase_price,
									'product_material_type' => $material_type,
									'product_color' => $color,
									'product_size' => $product_size,
									'product_shapetype' => $product_shape,
									'product_quantity' => $quantity,
									'min_order' => $min_order,
									'product_dimension_length' => $dimension_len,
									'product_dimension_width' => $dimension_wid,
									'product_dimension_height' => $dimension_height,
									'updated_date' => $date,
									'tags' => $meta_tags,
									'meta_keywords' => $meta_keyword,
									'meta_desc' => $meta_desc
								  );
                }
			}else{
				$records=array(
								'product_category' => $category,
								'product_subcategory' => $sub_category,
								'product_brand' => $brand,
								'product_model_no' => $model,
								'product_name' => $product_name,
								'product_title' => $product_title,
								'product_desc' => $product_desc,
								'product_sku' =>  $sku,
								'product_wholesale_price' => $wholesale_price,
								'product_retail_price' => $retail_price,
								'product_purchase_price' => $purchase_price,
								'product_material_type' => $material_type,
								'product_color' => $color,
								'product_size' => $product_size,
								'product_shapetype' => $product_shape,
								'product_quantity' => $quantity,
								'min_order' => $min_order,
								'product_dimension_length' => $dimension_len,
								'product_dimension_width' => $dimension_wid,
								'product_dimension_height' => $dimension_height,
								'updated_date' => $date,
								'tags' => $meta_tags,
								'meta_keywords' => $meta_keyword,
								'meta_desc' => $meta_desc
							  );
			}

		$update_product = $this->admin_edit_product_m->update_product($records,$product_id);
		$this->session->set_flashdata("success", "Product Updated Successfully!");
	    redirect('admin_edit_product/'.$product_id);
	}

}

/* End of file Admin_edit_product.php */
/* Location: ./application/controllers/Admin_edit_product.php */