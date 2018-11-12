<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_product extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_add_product_m');
		$data['get_product_category'] = $this->admin_add_product_m->get_product_category();
		$this->load->view('admin_add_product',$data);
	}

	public function ajax_fetch_brand()
	{
		$this->load->model('admin_add_product_m');
		$sub_id = $this->input->post('sub_id');
		$get_brands = $this->admin_add_product_m->get_brands($sub_id);
	?>
		<option value="" selected>Choose Brand</option>
    <?php
		foreach($get_brands as $fetch_brands){
	?>
		<option value="<?php echo $fetch_brands->brand_id;?>"><?php echo $fetch_brands->brand_name;?></option>
	<?php
		}
	}

	public function ajax_fetch_model()
	{
		$this->load->model('admin_add_product_m');
		$brand_id = $this->input->post('brand_id');
		$get_model = $this->admin_add_product_m->get_model($brand_id);
	?>
		<option value="" selected>Choose Model</option>
    <?php
		foreach($get_model as $fetch_model){
	?>
		<option value="<?php echo $fetch_model->model_name;?>"><?php echo $fetch_model->model_name;?></option>
	<?php
		}
	}

	public function ajax_fetch_model_desc()
	{
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */