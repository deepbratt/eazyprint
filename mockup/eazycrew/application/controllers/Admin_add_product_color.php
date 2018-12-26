<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product_color extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_product_color_m');
		$data['fetch_categories'] = $this->admin_add_product_color_m->fetch_categories();
		$data['fetch_subcategories'] = $this->admin_add_product_color_m->fetch_all_subcategories();
		$data['get_product_color'] = $this->admin_add_product_color_m->fetch_product_color();	
		$this->load->view('admin_add_product_color',$data);
	}

	public function ajax_fetch_sub_category(){
		$this->load->model('admin_add_product_color_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_add_product_color_m->ajax_fetch_subcategories($cat_id);
	?>
		<option selected disabled>Subcategory</option>
	<?php
		
		foreach($ajax_fetch_all_subcategories AS $each_subcategory){
	 ?>
		 	<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
	 <?php
			
		}
	}
	
	public function add_product_color()
	{
		$this->load->model('admin_add_product_color_m');
		$sub_cat_id = $this->input->post('sub_category');
		echo $sub_cat_id;
		exit;
		$product_color_name = $this->input->post('product_color');
		$color_code_name = $this->input->post("color_code");

		for($i=0; $i<sizeof($product_color_name); $i++){
			$records = array(
				'product_color_name' => $product_color_name[$i],
				'product_color_code' => $color_code_name[$i],
				'sub_category_id' => $sub_cat_id
			);
			$insert_product_color = $this->admin_add_product_color_m->product_color_insert($records);	
		}
		
		if($insert_product_color)
		{
			$this->session->set_flashdata("success", "You have successfully insert the product color!");
			redirect('admin_add_product_color');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_product_color');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */