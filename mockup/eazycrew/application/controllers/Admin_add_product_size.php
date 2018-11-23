<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_size extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_product_size_m');
		$data['fetch_categories'] = $this->admin_add_product_size_m->fetch_categories();
		$data['fetch_subcategories'] = $this->admin_add_product_size_m->fetch_all_subcategories();
		$this->load->view('admin_add_product_size',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_add_product_size_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_add_product_size_m->ajax_fetch_subcategories($cat_id);
	?>
		<option selected disabled>Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}
	
	public function add_product_size()
	{
		$this->load->model('admin_add_product_size_m');
		$sub_cat_name = $this->input->post('sub_cat');
		$product_size_name = $this->input->post('product_size');
		$dimension_name = $this->input->post('dimension');
		$sub_cat_id = "1";
		$records=array('product_size_name'=>$product_size_name,'dimension'=>$dimension_name,'sub_category_id'=>$sub_cat_name);
		$insert_product_size = $this->admin_add_product_size_m->product_size_insert($records);
		if($insert_product_size)
		{
			$this->session->set_flashdata("success", "You have successfully insert the product size!");
			redirect('admin_add_product_size');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_product_size');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */