<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_category extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_category_m');
		$data['category_fetch'] = $this->admin_listing_category_m->fetch_category();
		$this->load->view('admin_listing_category',$data);
	}

	public function dlt_category()
	{
		$this->load->model('admin_listing_category_m');
		$category_id = $this->uri->segment(3);
		$dlt_category = $this->admin_listing_category_m->ct_dlt($category_id);
		if($dlt_category)
		{
			$this->session->set_flashdata("success", "You have successfully deleted the category!");
			redirect('admin_listing_category');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_category');
		}

	
	}

	public function change_status()
	{
		$this->load->model('admin_listing_category_m');
		$cat_id = $this->input->post('cat_id');
		$cat_status = $this->input->post('cat_status');
		if($cat_status == 1){
			$changed_status = "0";
		}else if($cat_status == 0){
			$changed_status = "1";
		}
		$update_array = array('category_status' => $changed_status);
		$update_category = $this->admin_listing_category_m->update_category($cat_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $cat_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */