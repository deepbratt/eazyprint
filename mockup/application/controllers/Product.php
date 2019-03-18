<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->load->model('product_m');
		$data['products'] = $this->product_m->get_all_products();

		if(!empty($this->session->userdata['product_sidebar'])){
            $cat_id = $this->session->userdata['product_sidebar']['cat_id'];
            $brand_name = $this->session->userdata['product_sidebar']['brand_name'];
        }
		
		$this->load->view('product',$data);
	}

	public function ajax_cat_data(){
		$this->load->model('product_m');
		$category_id = $this->input->post('cat_id');
		$fetch_brand = $this->product_m->fetch_brandzz($category_id);
		?>
			<option value="" selected disabled> Brand </option>
		<?php
			foreach($fetch_brand AS $each_brand){
		?>
			<option value="<?php echo $each_brand->raw_brand?>"><?php echo $each_brand->raw_brand?></option>
		<?php
			}
	}

	public function ajax_brand_data(){
		$this->load->model('product_m');
		$brand_name = $this->input->post('brand_name');
		$fetch_model = $this->product_m->fetch_modelzz($brand_name);
		?>
			<option value="" selected disabled> Model </option>
		<?php
			foreach($fetch_model AS $each_model){
		?>
			<option value="<?php echo $each_model->raw_name?>"><?php echo $each_model->raw_name;?></option>
		<?php
			}
	}

	public function ajax_sidebar_filter(){
		$this->load->model('product_m');
		$category_id = $this->input->post('cat_id');
		$brand_name = $this->input->post('brand_name');
		$sidebar_filter = array(
			"cat_id" => $category_id,
			"brand_name" => $brand_name
		);
		$this->session->set_userdata('product_sidebar', $sidebar_filter);
		return $sidebar_filter;

	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */