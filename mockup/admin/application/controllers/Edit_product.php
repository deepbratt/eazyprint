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
		$product_id = $this->uri->segment(2);
		$data['fetch_product'] = $this->edit_product_m->fetch_pro($product_id);
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

		if(!empty($_FILES['p_image']['name'])){
			$config['upload_path'] = 'uploads/product_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['p_image']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('p_image')){
				$uploadData = $this->upload->data();
				$product_image = $uploadData['file_name'];
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
			}
		}

		$records = array('product_name'=>$product_name,'product_title'=>$product_title,'product_desc'=>$product_desc,'product_designed_by'=>$designed_by,'product_wholesale_price'=>$wholesale_price,'product_retail_price'=>$retail_price,'	product_status'=>$product_status,'product_updated_date'=>$update_date,'product_meta_tags'=>$implode_meta_tags,'product_meta_keyword'=>$implode_meta_keywords,'product_meta_desc'=>$meta_desc,'product_meta_image'=>$meta_image);

		$update_product = $this->edit_product_m->update_product($product_id,$records);

		if($update_product)
		{
			$this->session->set_flashdata("success", "Product Updated Successfully!");
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
		}
		redirect('edit_product/'.$product_id);
	}

}

/* End of file Edit_dealers.php */
/* Location: ./application/controllers/Edit_dealers.php */