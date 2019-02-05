<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_dealers extends CI_Controller {

	public function index()
	{
		$this->load->model('listing_dealers_m');
		$data['fetch_dealers_data'] = $this->listing_dealers_m->fetch_dealers_info();

 		$this->load->view('contacts/listing_dealers',$data);
	}

	public function delete_dealer()
	{
		$dealer_id = $this->uri->segment(3);
		$this->load->model('listing_dealers_m');
		$delete_dealer = $this->listing_dealers_m->delete_dealer($dealer_id);
		if($delete_dealer){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this dealer!");
			redirect('listing_dealers');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_dealers');
		}
	}

	public function change_status()
	{
		$this->load->model('listing_dealers_m');
		$dealer_id = $this->input->post('dealer_id');
		$dealer_status = $this->input->post('dealer_status');
		if($dealer_status == 1){
			$changed_status = "0";
		}else if($dealer_status == 0){
			$changed_status = "1";
		}
		$update_array = array('dealers_status' => $changed_status);
		$update_dealer = $this->listing_dealers_m->update_status($dealer_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $dealer_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_add_mug.php */
/* Location: ./application/controllers/Admin_add_mug.php */