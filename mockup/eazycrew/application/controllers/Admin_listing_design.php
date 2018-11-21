<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_listing_design extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_listing_design_m');
		$data['fetch_design_info'] = $this->admin_listing_design_m->fetch_designs();
		$this->load->view('admin_listing_design',$data);
	}

	public function change_status()
	{
		$this->load->model('admin_listing_design_m');
		$design_id = $this->input->post('design_id');
		$design_status = $this->input->post('design_status');
		if($design_status == 1){
			$changed_status = "0";
		}else if($design_status == 0){
			$changed_status = "1";
		}
		$update_array = array('status' => $changed_status);
		$update_design = $this->admin_listing_design_m->update_design($design_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $design_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

	public function delete_design()
	{
		$this->load->model('admin_listing_design_m');
		$design_id = $this->uri->segment(3);
		$delete_query = $this->admin_listing_design_m->delete_query($design_id);
		$this->session->set_flashdata("success", "You have successfully deleted this design!");
		redirect('admin_listing_design');	
	}

}

/* End of file Admin_listing_design.php */
/* Location: ./application/controllers/Admin_listing_design.php */