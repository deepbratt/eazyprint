<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_sub_category extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_listing_sub_category_m');
		$data['sub_category_fetch'] = $this->admin_listing_sub_category_m->fetch_sub_category();	
		$this->load->view('admin_listing_sub_category',$data);
	}

	public function dlt_sub_category()
	{
		$this->load->model('admin_listing_sub_category_m');
		$sub_category_id = $this->uri->segment(3);
		$dlt_sub_category = $this->admin_listing_sub_category_m->sub_cat_dlt($sub_category_id);
		if($dlt_sub_category)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the subcategory!");
			redirect('admin_listing_sub_category');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_sub_category');
		}
	}

	public function change_status()
	{
		$this->load->model('admin_listing_sub_category_m');
		$sub_cat_id = $this->input->post('sub_cat_id');
		$sub_cat_status = $this->input->post('sub_cat_status');
		if($sub_cat_status == 1){
			$changed_status = "0";
		}else if($sub_cat_status == 0){
			$changed_status = "1";
		}
		$update_array = array('sub_category_status' => $changed_status);
		$update_sub_cat = $this->admin_listing_sub_category_m->update_sub_cat($sub_cat_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $sub_cat_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */