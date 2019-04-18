<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_inventory extends CI_Controller {

	public function index()
	{
		$this->load->model('add_inventory_m');
		$data['fetch_catzz'] = $this->add_inventory_m->fetch_all_category();
		$this->load->view('inventory/add_inventory',$data);
	}

	public function get_brand(){
		$this->load->model('add_inventory_m');
		$cat_name = $this->input->post('cat_name');
		$fetch_brand_data = $this->add_inventory_m->fetch_brand($cat_name);
	?>
		<option vlaue="" selected disabled>Choose Brand</option>
	<?php
		foreach($fetch_brand_data AS $each_brandz){
	?>
		<option value="<?php echo $each_brandz->brand;?>"><?php echo $each_brandz->brand;?></option>
	<?php
		}

	}

	public function get_model(){
		$this->load->model('add_inventory_m');
		$brand_name = $this->input->post('brand_name');
		$fetch_model_data = $this->add_inventory_m->fetch_model($brand_name);
	?>
		<option vlaue="" selected disabled>Choose Model</option>
	<?php
		foreach($fetch_model_data AS $each_modelz){
	?>
		<option value="<?php echo $each_modelz->model;?>"><?php echo $each_modelz->brand;?>&nbsp;<?php echo $each_modelz->model;?></option>
	<?php
		}

	}

	public function add_new_inventory(){
		$category = $this->input->post('category');
		$brand = $this->input->post('brand');
		$model = $this->input->post('model');
		$quantity = $this->input->post('quantity');

		$insert_array = (
			'category'=>
		);
	}
}

/* End of file Add_inventory.php */
/* Location: ./application/controllers/Add_inventory.php */