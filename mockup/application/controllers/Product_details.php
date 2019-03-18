<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_details extends CI_Controller {

	public function index()
	{
		$this->load->model('product_details_m');
		$prod_id = $this->uri->segment(2);
		//$prod_id = '35';
		$data['fetch_prod_data'] = $this->product_details_m->prod_info($prod_id);
		$data['fetch_prod_image_data'] = $this->product_details_m->prod_image_info($prod_id);
		$single_image = array();
		foreach($data['fetch_prod_image_data'] AS $fetch_single_images){
			$single_image[] = $fetch_single_images->product_image_path;
		}
		$data['single_prod_image'] = $single_image;
		/* FOR PRODUCT DETAILS STARTS*/
		$raw_pro_id = $data['fetch_prod_data']->raw_id;
		$data['fetch_raw_data'] = $this->product_details_m->raw_prod_info($raw_pro_id);
		/* FOR PRODUCT DETAILS ENDS*/

		/* FOR PRODUCT DETAILS STARTS*/
		$pro_cat_id = $data['fetch_prod_data']->product_category_id;
		$data['fetch_similar_pro_data'] = $this->product_details_m->fetch_similar_products($pro_cat_id);
		/* FOR PRODUCT DETAILS ENDS*/
		$this->load->view('product_details',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */