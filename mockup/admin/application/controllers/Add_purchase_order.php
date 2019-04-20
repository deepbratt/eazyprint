<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_purchase_order extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('admin_login');
        }
    }

	public function index()
	{
		$this->load->model('purchase_order_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['fetch_admin_info'] = $this->purchase_order_m->admin_info($user_id);
		$data['fetch_supplier_info'] = $this->purchase_order_m->supplier_info();
		$data['fetch_products'] = $this->purchase_order_m->fetch_products();
		$data['fetch_cities'] = $this->purchase_order_m->fetch_cities();
		$this->load->view('transasctions/add_purchase_order',$data);
	}

	public function ajax_supplier_addr(){
		$this->load->model('purchase_order_m');
		$supplier_id = $this->input->post('supp_id');
		$fetch_supplier_addr = $this->purchase_order_m->supplier_addr($supplier_id);
	?>
		<h5 style="text-decoration: underline;text-transform: uppercase;">Supplier Details :</h5>
		<address>
			<span class="font-weight-semibold"><?php echo $fetch_supplier_addr->user_fname;?>&nbsp;<?php echo $fetch_supplier_addr->user_lname;?></span><br>
			<?php echo $fetch_supplier_addr->user_address;?><br>
			<?php echo $fetch_supplier_addr->user_city;?>, <?php echo $fetch_supplier_addr->user_state;?><br>
			<b>Postal Code:</b> <?php echo $fetch_supplier_addr->user_pincode;?><br>
			<b>Email:</b> <?php echo $fetch_supplier_addr->user_email;?><br>
			<b>Phone: </b><?php echo $fetch_supplier_addr->user_phone;?>
		</address>
	<?php
	}

	public function ajax_place_of_supply(){
		$this->load->model('purchase_order_m');
		$supplier_id = $this->input->post('supp_id');
		$fetch_supplier_addr = $this->purchase_order_m->supplier_addr($supplier_id);
		$fetch_cities = $this->purchase_order_m->fetch_cities();

		foreach($fetch_cities AS $each_fetch_cities){
		?>
	      	<option value="<?php echo $each_fetch_cities->city_state;?>"<?php echo (($fetch_supplier_addr->user_state == $each_fetch_cities->city_state)?'selected':'');?>><?php echo $each_fetch_cities->city_state;?></option>
      	<?php
      		}
	}

	public function ajax_gst_info(){
		$this->load->model('purchase_order_m');
		$supplier_id = $this->input->post('supp_id');
		$fetch_supplier_gst = $this->purchase_order_m->supplier_addr($supplier_id);
		echo $fetch_supplier_gst->user_gst_number;
	}

	public function ajax_fetch_prod_details(){
		$this->load->model('purchase_order_m');
		$product_id = $this->input->post('product_id');
		$fetch_prod_data = $this->purchase_order_m->fetch_products_from_id($product_id);
		echo json_encode($fetch_prod_data);
	}

}

/* End of file Add_purchase_order.php */
/* Location: ./application/controllers/Add_purchase_order.php */