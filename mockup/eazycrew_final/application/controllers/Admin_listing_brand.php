<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_brand extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('admin_listing_brand_m');
		$data['brand_fetch'] = $this->admin_listing_brand_m->fetch_brand();
		$this->load->view('admin_listing_brand',$data);
	}

	public function dlt_brand()
	{
		$this->load->model('admin_listing_brand_m');
		$brand_id = $this->uri->segment(3);
		$dlt_brand = $this->admin_listing_brand_m->brand_dlt($brand_id);
		if($dlt_brand)
		{
			$this->session->set_flashdata("success", "You have successfully delete the brand!");
			redirect('admin_listing_brand');	
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('admin_listing_brand');
		}	
	}

	public function change_status()
	{
		$this->load->model('admin_listing_brand_m');
		$brand_id = $this->input->post('brand_id');
		$brand_status = $this->input->post('brand_status');
		if($brand_status == 1){
			$changed_status = "0";
		}else if($brand_status == 0){
			$changed_status = "1";
		}
		$update_array = array('brand_status' => $changed_status);
		$update_brand = $this->admin_listing_brand_m->update_brand($brand_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $brand_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */