<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_mobile_case extends CI_Controller {

	public function index()
	{
		$this->load->model('admin_add_mobile_case_m');
		$data['fetch_raw_materials'] = $this->admin_add_mobile_case_m->fetch_product_details();
		$this->load->view('products/listing_mobile_case',$data);
	}

	public function delete_product()
	{
		$this->load->model('admin_add_mobile_case_m');
		$product_id = $this->uri->segment(3);
		$delete_query = array('raw_status' => '0');
		$delete_product = $this->admin_add_mobile_case_m->delete_product($delete_query,$product_id);
		$this->session->set_flashdata("success", "Product Deleted!");
		redirect('products/listing_mobile_case');
	}

		public function change_status()
	{
		$this->load->model('admin_add_mobile_case_m');
		$product_id = $this->input->post('product_id');
		$product_status = $this->input->post('product_status');
		if($product_status == 1){
			$changed_status = "0";
		}else if($product_status == 0){
			$changed_status = "1";
		}
		$update_array = array('raw_status' => $changed_status);
		$update_product = $this->admin_add_mobile_case_m->update_status($product_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $product_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_mobile_case.php */
/* Location: ./application/controllers/Admin_listing_mobile_case.php */