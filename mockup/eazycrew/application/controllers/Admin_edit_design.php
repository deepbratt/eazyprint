<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_edit_design extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_edit_design_m');
		$data['fetch_all_categories'] = $this->admin_edit_design_m->fetch_categories();
		$data['fetch_all_subcategories'] = $this->admin_edit_design_m->fetch_all_subcategories();
		$this->load->view('admin_edit_design',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_edit_design_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_edit_design_m->ajax_fetch_subcategories($cat_id);
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}

}

/* End of file Admin_edit_design.php */
/* Location: ./application/controllers/Admin_edit_design.php */