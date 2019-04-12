<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function index()
	{
		$fetch_cat_id = $this->uri->segment(2);
		$_SESSION['product_sidebar']['cat_id'] = $fetch_cat_id;
		$_SESSION['product_sidebar']['brand_name'] = "";
		$_SESSION['product_sidebar']['pro_type'] = "";
		$_SESSION['product_sidebar']['size'] = "";
		$_SESSION['product_sidebar']['shape'] = "";
		$_SESSION['product_sidebar']['color'] = "";
		$_SESSION['product_sidebar']['material_type'] = "";

		redirect('product');
	}

	public function prodata(){
		$this->load->model('link_m');
		$fetch_cat_id = $this->uri->segment(3);
		if($fetch_cat_id == '1'){
			$fetch_raw_id = $this->uri->segment(4);
			/*$fetch_color_data = $this->link_m->fetch_mug_data($fetch_raw_id,$fetch_cat_id);
			
			$_SESSION['product_sidebar']['color'] = $fetch_color_data->raw_color_code;*/
		}
		if($fetch_cat_id == '2'){
			$fetch_raw_id = $this->uri->segment(4);
			$fetch_raw_data = $this->link_m->fetch_raw_data($fetch_raw_id,$fetch_cat_id);
			
			$_SESSION['product_sidebar']['brand_name'] = "";
			$_SESSION['product_sidebar']['color'] = $fetch_raw_data->raw_color_code;
			$_SESSION['product_sidebar']['pro_type'] = "";
			$_SESSION['product_sidebar']['size'] = "";
			$_SESSION['product_sidebar']['shape'] = "";
			$_SESSION['product_sidebar']['material_type'] = "";
		}
		if($fetch_cat_id == '3'){
			$fetch_raw_id = $this->uri->segment(4);
			$fetch_raw_data = $this->link_m->fetch_raw_data($fetch_raw_id,$fetch_cat_id);
			
			$_SESSION['product_sidebar']['brand_name'] = $fetch_raw_data->raw_brand;
			$_SESSION['product_sidebar']['color'] = "";
			$_SESSION['product_sidebar']['pro_type'] = "";
			$_SESSION['product_sidebar']['size'] = "";
			$_SESSION['product_sidebar']['shape'] = "";
			$_SESSION['product_sidebar']['material_type'] = "";
		}
		if($fetch_cat_id == '4'){
			$fetch_raw_id = $this->uri->segment(4);
			$fetch_raw_data = $this->link_m->fetch_raw_data($fetch_raw_id,$fetch_cat_id);

			$_SESSION['product_sidebar']['brand_name'] = "";
			$_SESSION['product_sidebar']['color'] = "";
			$_SESSION['product_sidebar']['pro_type'] = $fetch_raw_data->raw_title;
			$_SESSION['product_sidebar']['size'] = "";
			$_SESSION['product_sidebar']['shape'] = "";
			$_SESSION['product_sidebar']['material_type'] = "";
		}
		if($fetch_cat_id == '5'){
			$fetch_raw_id = $this->uri->segment(4);
			$fetch_raw_data = $this->link_m->fetch_raw_data($fetch_raw_id,$fetch_cat_id);

			$_SESSION['product_sidebar']['brand_name'] = "";
			$_SESSION['product_sidebar']['color'] = "";
			$_SESSION['product_sidebar']['pro_type'] = $fetch_raw_data->raw_title;			
			$_SESSION['product_sidebar']['size'] = "";
			$_SESSION['product_sidebar']['shape'] = "";
			$_SESSION['product_sidebar']['material_type'] = "";
		}
		if($fetch_cat_id == '6'){
			$fetch_raw_id = $this->uri->segment(4);
			$fetch_raw_data = $this->link_m->fetch_raw_data($fetch_raw_id,$fetch_cat_id);

			$_SESSION['product_sidebar']['brand_name'] = "";
			$_SESSION['product_sidebar']['color'] = "";
			$_SESSION['product_sidebar']['pro_type'] = $fetch_raw_data->raw_title;			
			$_SESSION['product_sidebar']['size'] = "";
			$_SESSION['product_sidebar']['shape'] = "";
			$_SESSION['product_sidebar']['material_type'] = "";
		}	
			

		$_SESSION['product_sidebar']['cat_id'] = $fetch_cat_id;
		redirect('product');
	}

}

/* End of file Link.php */
/* Location: ./application/controllers/Link.php */