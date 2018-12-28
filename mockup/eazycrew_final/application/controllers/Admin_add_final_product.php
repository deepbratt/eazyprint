<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_final_product extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_final_product_m');
		$this->load->model('admin_add_product_m');

		$data['get_product'] = $this->admin_add_final_product_m->get_product();
		$data['get_product_category'] = $this->admin_add_product_m->get_product_category();
		//$data['get_design'] = $this->admin_add_final_product_m->get_design($data['get_product']->product_subcategory);
		$this->load->view('admin_add_final_product',$data);
	}

	public function ajax_fetch_design()
	{
		$this->load->model('admin_add_final_product_m');
		$product_id = $this->input->post('product_id');
		$product_details = $this->admin_add_final_product_m->product_details($product_id);
		$get_design = $this->admin_add_final_product_m->get_design($product_details->product_subcategory);
		?>
		<?php
		$i = 1;
		foreach($get_design as $fetch_design){
		?>
		<div class="col-md-2">
			<input type="radio" id="design_label<?php echo $i;?>" name="emotion" value="<?php echo $fetch_design->design_id;?>" class="input-hidden" onclick="show_design(<?php echo $fetch_design->design_id;?>);">
			<label for="design_label<?php echo $i;?>">
				<img src="<?php echo base_url('uploads/designs/');?><?php echo $fetch_design->designed_image;?>" style="margin-bottom:10px;height:100px;width:100px;" >
			</label>
		</div>
		<?php
			$i++;
		}
		
	}

	public function ajax_show_design()
	{
		$this->load->model('admin_add_final_product_m');
		$design_id = $this->input->post('design_id');
		$show_design = $this->admin_add_final_product_m->show_design($design_id);
		if(sizeof($show_design) > 0)
		{
	?>
		<img src="<?php echo base_url('uploads/designs/');?><?php echo $show_design->designed_image;?>" style="height:150px;" data-toggle="modal" data-target="#largeModal">
	<?php
		}
	}

	public function add_product()
	{
		$this->load->model('admin_add_final_product_m');
		$this->load->model('admin_add_product_m');

		//Product Details Start
		$product_id = $this->input->post('product');
		$product_details = $this->admin_add_final_product_m->product_details($product_id);
		$category = $product_details->product_category;
		$sub_category = $product_details->product_subcategory;
		$product_design = $this->input->post('p_design');
		$design_details = $this->admin_add_final_product_m->show_design($product_design);
		$designed_by = $design_details->designed_by;
		//Product Details Ends

		//Product Classification Starts
		$product_name = $this->input->post('product_name');
		$product_desc = $this->input->post('product_desc');
		//Product Classification Ends

		//Price Specification Starts
		$wholesale_price = $this->input->post('wholesale_price');
		$retail_price = $this->input->post('retail_price');
		$quantity = $this->input->post('quantity');
		//Price Specification Ends

		//SEO Optimization Starts
		$meta_tags = $this->input->post('meta_tags');
		$meta_keyword = $this->input->post('meta_keyword');
		$meta_desc = $this->input->post('meta_desc');
		//SEO Optimization Ends

		//SKU CALCULATION STARTS
		$get_brand_name = $this->admin_add_product_m->get_brand_name($product_details->product_brand);
		$sku_brand_val = substr($get_brand_name->brand_code,0,2);
		$get_shape_name = $this->admin_add_product_m->get_shape_name($product_details->product_shapetype);
		if($sub_category == '9')
		{
			$sku_model_val = substr($product_details->product_model_no,0,2);
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
		$sku = sprintf("%02d", $category).''.sprintf("%02d", $sub_category).''.strtoupper($sku_brand_val).''.strtoupper($sku_model_val).''.strtoupper($sku_shape_val).''.sprintf("%02d", $product_design);
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
									'product_id' => $product_id,
									'f_category_id' => $category,
									'f_sub_category_id' => $sub_category,
									'f_product_name' => $product_name,
									'f_product_desc' => $product_desc,
									'f_product_design_id' => $product_design,
									'f_product_designed_by' => $designed_by,
									'f_product_wholesale_price' =>  $wholesale_price,
									'f_product_retail_price' => $retail_price,
									'f_product_quantity' => $quantity,
									'f_product_status' => '1',
									'f_added_date' => $date,
									'f_updated_date' => $date,
									'f_product_sku' => $sku,
									'f_meta_tags' => $meta_tags,
									'f_meta_image' => $image,
									'f_meta_keyword' => $meta_keyword,
									'f_meta_desc' => $meta_desc
								  );
                }else{
					$records=array(
									'product_id' => $product_id,
									'f_category_id' => $category,
									'f_sub_category_id' => $sub_category,
									'f_product_name' => $product_name,
									'f_product_desc' => $product_desc,
									'f_product_design_id' => $product_design,
									'f_product_designed_by' => $designed_by,
									'f_product_wholesale_price' =>  $wholesale_price,
									'f_product_retail_price' => $retail_price,
									'f_product_quantity' => $quantity,
									'f_product_status' => '1',
									'f_added_date' => $date,
									'f_updated_date' => $date,
									'f_product_sku' => $sku,
									'f_meta_tags' => $meta_tags,
									'f_meta_keyword' => $meta_keyword,
									'f_meta_desc' => $meta_desc
								  );
                }
			}else{
				$records=array(
								'product_id' => $product_id,
								'f_category_id' => $category,
								'f_sub_category_id' => $sub_category,
								'f_product_name' => $product_name,
								'f_product_desc' => $product_desc,
								'f_product_design_id' => $product_design,
								'f_product_designed_by' => $designed_by,
								'f_product_wholesale_price' =>  $wholesale_price,
								'f_product_retail_price' => $retail_price,
								'f_product_quantity' => $quantity,
								'f_product_status' => '1',
								'f_added_date' => $date,
								'f_updated_date' => $date,
								'f_product_sku' => $sku,
								'f_meta_tags' => $meta_tags,
								'f_meta_keyword' => $meta_keyword,
								'f_meta_desc' => $meta_desc
							  );
			}

		$insert_product = $this->admin_add_final_product_m->insert_product($records);
		$this->session->set_flashdata("success", "Product Added Successfully!");
	    redirect('admin_add_final_product');
	}

}

/* End of file Admin_add_final_product.php */
/* Location: ./application/controllers/Admin_add_final_product.php */