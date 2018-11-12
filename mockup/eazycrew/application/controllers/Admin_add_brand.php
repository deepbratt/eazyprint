<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_brand extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_brand_m');
		$this->load->view('admin_add_brand');
	}
	public function ajax_fetch_sub_category()
	{
		$this->load->model('admin_add_brand_m');
		$cat_id = $this->input->post('category_id');
		$ajax_fetch_all_subcategories = $this->admin_add_brand_m->ajax_fetch_subcategories($cat_id);
		foreach($ajax_fetch_all_subcategories AS $each_subcategory)
		{
		?>			
		<option value="<?php echo $each_subcategory->sub_category_id;?>"><?php echo $each_subcategory->sub_category_name;?></option>
		<?php } 
	}
	public function brand_add()
	{
		$this->load->model('admin_add_brand_m');
		$cat_id = $this->input->post('cat_name');
		$sub_cat_id = $this->input->post('sub_category');
		$brand_name = $this->input->post('brand_name');
		$brand_code = $this->input->post('brand_code');
		$brand_status = "1";
		$records=array('brand_name'=>$brand_name,'brand_code'=>$brand_code,'sub_category'=>$sub_cat_id,'brand_status'=>$brand_status);
		$insert_brand = $this->admin_add_brand_m->sub_brand_insert($records);
		if($insert_brand)
		{
			$this->session->set_flashdata("success", "You have successfully insert the brand!");
			redirect('admin_add_brand');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_add_brand');	
		}
	}
}



/* End of file Home.php */
/* Location: ./application/controllers/Home.php */