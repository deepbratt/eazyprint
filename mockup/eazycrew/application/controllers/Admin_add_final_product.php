<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_final_product extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_final_product_m');
		$data['get_product'] = $this->admin_add_final_product_m->get_product();
		//$data['get_design'] = $this->admin_add_final_product_m->get_design($data['get_product']->product_subcategory);
		$this->load->view('admin_add_final_product',$data);
	}

	public function ajax_fetch_design()
	{
		$this->load->model('admin_add_final_product_m');
		$product_id = $this->input->post('product_id');
		$product_details = $this->admin_add_final_product_m->product_details($product_id);
		$get_design = $this->admin_add_final_product_m->get_design($product_details->product_subcategory);
		foreach($get_design as $fetch_design){
		?>
		<div class="col-md-2">
			<img src="<?php echo base_url('uploads/designs/');?><?php echo $fetch_design->designed_image;?>" style="margin-bottom:10px;height:100px;width:100px;">
		</div>
		<?php
		}
		
	}

}

/* End of file Admin_add_final_product.php */
/* Location: ./application/controllers/Admin_add_final_product.php */