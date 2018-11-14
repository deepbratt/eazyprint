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
		$data['get_material_type'] = $this->admin_edit_product_m->get_material_type($data['fetch_product']->product_material_type);
		$this->load->view('admin_edit_product', $data);
	}

}

/* End of file Admin_edit_product.php */
/* Location: ./application/controllers/Admin_edit_product.php */