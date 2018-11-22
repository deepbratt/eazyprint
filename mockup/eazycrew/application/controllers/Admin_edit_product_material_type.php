<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_product_material_type extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_product_material_type_m');
		$product_material_type_id = $this->uri->segment(2);
		$data['fetch_all_categories'] = $this->admin_edit_product_material_type_m->fetch_categories();
		$data['fetch_subcategories'] = $this->admin_edit_product_material_type_m->fetch_all_subcategories();
		$data['product_material_type_fetch'] = $this->admin_edit_product_material_type_m->fetch_product_material_type($product_material_type_id);
		$this->load->view('admin_edit_product_material_type',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_edit_product_material_type_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_edit_product_material_type_m->ajax_fetch_subcategories($cat_id);
	?>
		<option selected disabled>Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}
	
	public function edit_product_material_type()
	{
		$this->load->model('admin_edit_product_material_type_m');
		$sub_category_name = $this->input->post('sub_category');
		$product_metarial_name = $this->input->post('product_metarial');
		$cat_sub_id = $this->uri->segment(3);

		$check_material = $this->admin_edit_product_material_type_m->check_material($sub_category_name,$product_metarial_name,$cat_sub_id);
		if($check_material < 1)
		{
			$records=array('product_material_type'=>$product_metarial_name,'sub_category_id'=>$sub_category_name);
			$update_product_metarial = $this->admin_edit_product_material_type_m->product_metarial_update($records,$cat_sub_id);
			if($update_product_metarial)
			{
				$this->session->set_flashdata("success", "You have successfully updated the subcategory!");
				redirect('admin_edit_product_material_type/'.$cat_sub_id);	
			}
			else
			{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('admin_edit_product_material_type/'.$cat_sub_id);
			}
		}else{
			$this->session->set_flashdata("exist", "This product material type already exist!");
			redirect('admin_edit_product_material_type/'.$cat_sub_id);
		}

		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */