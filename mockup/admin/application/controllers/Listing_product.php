<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing_product extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }else{
			$user_id = $this->session->userdata['logged_in']['user_id'];
		}
		
     }

	public function index()
	{
		$this->load->model('listing_product_m');
		$data['fetch_product'] = $this->listing_product_m->fetch_pro();
		$this->load->view('products/listing_product',$data);
	}

	public function delete_product()
	{
		$product_id = $this->uri->segment(3);
		$this->load->model('listing_product_m');

		//product image starts
		$get_product_images = $this->listing_product_m->get_images($product_id);
		$product_image_array = array();
		foreach($get_product_images as $p_image){
			$product_image_array[] = $p_image->product_image_path;
		}
		//product image ends

		/*design image starts
		$get_design_id = $this->listing_product_m->get_design_id($product_id);
		$design_id = $get_design_id->product_design_id;
		$get_design_image = $this->listing_product_m->get_design_image($design_id);
		$design_image = $get_design_image->designed_image;
		design image ends*/

		//meta image starts
		$get_design_id = $this->listing_product_m->get_design_id($product_id);
		$meta_image = $get_design_id->product_meta_image;
		  
		//meta image ends
		
		$delete_product = $this->listing_product_m->delete_pro($product_id,$product_image_array,$meta_image);
		if($delete_product){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this Product!");
			redirect('listing_product');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_product');
		}
	}

	public function change_status()
	{
		$this->load->model('listing_product_m');
		$product_id = $this->input->post('product_id');
		$product_status = $this->input->post('product_status');
		if($product_status == 1){
			$changed_status = "0";
		}else if($product_status == 0){
			$changed_status = "1";
		}
		$update_array = array('product_status' => $changed_status);
		$update_pro = $this->listing_product_m->update_status($product_id,$update_array);
?>
		<label class="custom-switch">
			<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($changed_status == 1)?'checked':'');?> onchange="change_status('<?php echo $product_id;?>','<?php echo $changed_status;?>');">
			<span class="custom-switch-indicator"></span>
		</label>
<?php
	}

}

/* End of file Admin_listing_product.php */
/* Location: ./application/controllers/Admin_listing_product.php */