<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_shape extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_product_shape_m');
		$data['fetch_categories'] = $this->admin_add_product_shape_m->fetch_categories();
		$data['fetch_subcategories'] = $this->admin_add_product_shape_m->fetch_all_subcategories();
		$this->load->view('admin_add_product_shape',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_add_product_shape_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_add_product_shape_m->ajax_fetch_subcategories($cat_id);
	?>
		<option selected disabled>Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}
	
	public function add_product_shape()
	{
		$this->load->model('admin_add_product_shape_m');
		$sub_cat_name = $this->input->post('sub_cat');
		$product_shape_name = $this->input->post('product_shape');
		$sub_cat_id = "1";

		$check_product_shape = $this->admin_add_product_shape_m->check_product_shape($sub_cat_name,$product_shape_name);
		if($check_product_shape < 1){
			$records=array('product_shapetype_name'=>$product_shape_name,'sub_category_id'=>$sub_cat_name);
			$insert_product_shape = $this->admin_add_product_shape_m->product_shape_insert($records);
			if($insert_product_shape)
			{
				$this->session->set_flashdata("success", "You have successfully insert the product shape!");
				redirect('admin_add_product_shape');	
			}
			else
			{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('admin_add_product_shape');
			}
		}else{
			$this->session->set_flashdata("exist", "This product shape already exist!");
			redirect('admin_add_product_shape');
		}
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */