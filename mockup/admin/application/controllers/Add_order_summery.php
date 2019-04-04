<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_order_summery extends CI_Controller {

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
		$this->load->model('add_order_summery_m');
		$raw_id = $this->uri->segment(2);
		$data['fetch_order_product'] = $this->add_order_summery_m->fetch_pro($raw_id);
		//print_r($data['fetch_order_product']);
		//exit;
		//$this->load->view('products/order_summery',$data);
		$this->load->view('orders/add_order_summery',$data);
	}

	public function delete_product()
	{
		$product_id = $this->uri->segment(3);
		$this->load->model('listing_product_m');
		$delete_product = $this->listing_product_m->delete_pro($product_id);
		if($delete_product){
			$this->session->set_flashdata("success", "Success , Your have successfully deleted this Product!");
			redirect('listing_product');
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('listing_product');
		}
	}

	public function add_order()
	{
		$this->load->model('add_order_summery_m');
		$raw_id = $this->input->post('raw_id');

		$this->load->library('upload');
		$count_image = count($_FILES['meta_image']['name']);		
		for($i = 0; $i < $count_image; $i++){
			$_FILES['userFile']['name'] = $_FILES['meta_image']['name'][$i];
			$_FILES['userFile']['type'] = $_FILES['meta_image']['type'][$i];
			$_FILES['userFile']['tmp_name'] = $_FILES['meta_image']['tmp_name'][$i];
			$_FILES['userFile']['error'] = $_FILES['meta_image']['error'][$i];
			$_FILES['userFile']['size'] = $_FILES['meta_image']['size'][$i];

			$config['upload_path'] = 'uploads/order_images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = rand(999,99999).$_FILES['meta_image']['name'][$i];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('userFile')){
				$fileData = $this->upload->data();
				$product_image[$i]['file_name'] = $fileData['file_name'];
				$product_image[$i]['created'] = date("Y-m-d H:i:s");
				$product_image[$i]['modified'] = date("Y-m-d H:i:s");
			}
			$record = array('product_id'=>$update_product,'product_image_path'=>$product_image[$i]['file_name']);
			$update_image = $this->add_product_m->update_pro_img($record);
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