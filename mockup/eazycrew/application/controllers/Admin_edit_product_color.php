<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_color extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_product_color_m');
		$product_color_id = $this->uri->segment(2);
		$data['fetch_all_categories'] = $this->admin_edit_product_color_m->fetch_categories();
		$data['fetch_subcategories'] = $this->admin_edit_product_color_m->fetch_all_subcategories();
		$data['product_color_fetch'] = $this->admin_edit_product_color_m->fetch_product_color($product_color_id);
		$data['edit_product_color'] = $this->admin_edit_product_color_m->product_color_edit();
		$this->load->view('admin_edit_product_color',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_edit_product_color_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_edit_product_color_m->ajax_fetch_subcategories($cat_id);
	?>
		<option selected disabled>Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}
	
	public function edit_product_color()
	{
		$this->load->model('admin_edit_product_color_m');
		$product_color_id= $this->uri->segment(3);
		$sub_category_name = $this->input->post('sub_category');
		$product_color_name = $this->input->post('product_color');
		$product_color_code_name = $this->input->post('color_code');
		
		$records = array('product_color_name'=>$product_color_name,'product_color_code'=>$product_color_code_name,'sub_category_id'=>$sub_category_name);
		$update_product_color = $this->admin_edit_product_color_m->product_color_update($records,$product_color_id);
		if($update_product_color)
		{
			$this->session->set_flashdata("success", "You have successfully updated the product color!");
			redirect('admin_edit_product_color/'.$product_color_id);	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_edit_product_color/'.$product_color_id);
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */