<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_pillow extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('edit_pillow_m');
		$raw_id = $this->uri->segment(2);
		$data['fetch_mug'] = $this->edit_mug_m->fetch_pro_mug($raw_id);
		$this->load->view('products/edit_mug',$data);
	}

	public function update_pro_mug()
	{
		$this->load->model('edit_mug_m');
		$raw_id = $this->uri->segment(3);
		$user_id = $this->session->userdata['logged_in']['user_id'];

		//$category = $this->input->post('category');
		$category = '2';
		$product_name = $this->input->post('product_name');
		$product_title = $this->input->post('product_title');
		$product_desc = $this->input->post('product_desc');
		$product_material_type = $this->input->post('product_material_type');
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
		$update_date = time();
		$raw_status = '1';

		$get_prev = $this->edit_mug_m->fetch_pro_mug($raw_id);
		if(!empty($_FILES['p_image']['name'])){
			$config['upload_path'] = 'uploads/product_images/mug/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['p_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('p_image')){
				$uploadData = $this->upload->data();
				$product_image = $uploadData['file_name'];
			}
		}else{
			$product_image = $get_prev->raw_image;
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
			}
		}else{
			$meta_image = $get_prev->raw_meta_img;
		}

		$records = array('raw_added_by'=>$user_id,'raw_category'=>$category,'raw_name'=>$product_name,'raw_image'=>$product_image,'raw_meta_img'=>$meta_image,'	raw_title'=>$product_title,'raw_desc'=>$product_desc,'raw_material_type'=>$product_material_type,'raw_shapetype'=>$product_shape,'raw_weight'=>$product_weight,'raw_weight_unit'=>$product_weight_unit,'raw_color'=>$implode_color,'raw_color_code'=>$implode_color_code,'raw_quantity'=>$product_quantity,'min_order'=>$min_order,'raw_wholesale_price'=>$wholesale_price,'raw_retail_price'=>$retail_price,'raw_purchase_price'=>$purchase_price,'raw_tags'=>$implode_meta_tags,'raw_meta_keywords'=>$implode_meta_keywords,'raw_meta_desc'=>$meta_desc,'raw_hsn_code'=>$hsn_code,'raw_gst_rate'=>$gst_rate,'raw_status'=>$raw_status,'raw_updated_date'=>$update_date);

		if($product_image != $get_prev->raw_image)
		{
			$image_status = '1';
			$pre_img = $get_prev->raw_image;
		}else{
			$image_status = '';
			$pre_img = '';
		}

		if($meta_image != $get_prev->raw_meta_img)
		{
			$meta_status = '1';
			$pre_meta = $get_prev->raw_meta_img;
		}else{
			$meta_status = '';
			$pre_meta = '';
		}

		$update_mug = $this->edit_mug_m->update_mug($raw_id,$records,$pre_img,$image_status,$pre_meta,$meta_status);

		if($update_mug)
		{
			$this->session->set_flashdata("success", "Mug Updated Successfully!");
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
		}
		redirect('edit_mug/'.$raw_id);
	}

}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */