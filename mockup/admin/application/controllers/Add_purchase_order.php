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

	public function ajax_supplier_addr()
	{

		$this->load->model('purchase_order_m');
		$supplier_id = $this->input->post('supp_id');
		$fetch_supplier_addr = $this->purchase_order_m->supplier_addr($supplier_id);
		//print_r ($fetch_supplier_addr);
		//print_r($fetch_supplier_addr);
		$city = $fetch_supplier_addr->city;
		$get_city_name = $this->purchase_order_m->yoo_city_name($city);
		//print_r($get_city_name);
		$city_name = $get_city_name->city_name;
		
	?>
		<h5 style="text-decoration: underline;text-transform: uppercase;">Supplier Details :</h5>
		<address>
			<span class="font-weight-semibold"><?php echo $fetch_supplier_addr->user_fname;?>&nbsp;<?php echo $fetch_supplier_addr->user_lname;?></span><br>
			<?php echo $fetch_supplier_addr->address;?><br>
			<?php 
			echo $city_name;?>, <?php echo $fetch_supplier_addr->state;?><br>
			<b>Postal Code:</b> <?php echo $fetch_supplier_addr->postal_code;?><br>
			<b>Email:</b> <?php echo $fetch_supplier_addr->user_email;?><br>
			<b>Phone: </b><?php echo $fetch_supplier_addr->phone;?>
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
	      	<option value="<?php echo $each_fetch_cities->city_state;?>"<?php echo (($fetch_supplier_addr->state == $each_fetch_cities->city_state)?'selected':'');?>><?php echo $each_fetch_cities->city_state;?></option>
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
		$raw_id = $this->input->post('raw_id');
		$id = $this->input->post('count_id');
	
		$supply_place = $this->input->post('supply');
	
		$fetch_raw_data = $this->purchase_order_m->fetch_raw_from_id($raw_id);
		$raw_price = $fetch_raw_data->raw_purchase_price;
		$raw_gst = $fetch_raw_data->raw_gst_rate;
		$tax_amount = round(($raw_price * $raw_gst)/100);
		$price = $raw_price - $tax_amount;
		//tax calculation starts
		$ctaxamt = $tax_amount / 2;
		$ctax_percentage = $raw_gst / 2;
		$staxamt = $tax_amount - $ctaxamt;
		$stax_percentage = $raw_gst - $ctax_percentage;
		$itaxamt = $tax_amount;
		$itax_percentage = $raw_gst;
		//tax calculation ends

			
		 
		
		
		

	?>
	
		
	
		<td>
			<input type="text" class="form-control yoo" name="raw_id" value="<?php echo $raw_id;?>" onchange="prod_datazz(this.value,'<?php echo $id;?>')" placeholder="Enter Raw Id">
		</td>
		<td class="text-center">
			<div class="quantity buttons_added">
				<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" id="qty_<?php echo $id;?>" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" onchange="quantity_amtzz(this.value,'<?php echo $id;?>')"><input type="button" value="+" class="plus">
			</div>
		</td>
		
		<td class="text-right" id="amountzz"><i class="fas fa-rupee-sign"></i><span class="pro_price_<?php echo $id;?>">&nbsp;<?php echo $price;?></span>x<span class="quantzz_<?php echo $id;?>">1</span></td>
		
		<td class="text-center state_same gst_rate_<?php echo $id;?> cgst_rating_<?php echo $id;?>" style="<?php echo (($supply_place != 'West Bengal')?'display:none':'');?>" id="cgst_rate"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $ctaxamt;?><span>(<?php echo $ctax_percentage;?>%)</span></td>
		<td class="text-center state_same gst_rate_<?php echo $id;?> sgst_rating_<?php echo $id;?>" style="<?php echo (($supply_place != 'West Bengal')?'display:none':'');?>" id="sgst_rate"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $staxamt;?>(<?php echo $stax_percentage;?>%)</td>
	
		<td class="text-center state_not_same gst_rate_<?php echo $id;?> igst_rating_<?php echo $id;?>" style="<?php echo (($supply_place == 'West Bengal')?'display:none':'');?>" id="igst_rate"><i class="fas fa-rupee-sign"></i><?php echo $itaxamt;?>(<?php echo $itax_percentage;?>%)</td> 
		
		<td class="text-right combat" id="total_amount_<?php echo $id;?>"><i class="fas fa-rupee-sign"></i><span class="card-title_<?php echo $id;?>"><?php echo $raw_price;?></span></td>
		<?php
			if($id == '1')
		{
		?>
		<td class="text-center add_more" style="border:none;"><a href="javascript:void(0);"><i class="fas fa-plus-circle" style="font-size:20px;color:green;"></i></a></td>
		<?php
		}
		else
		{
		?>
		<td class="text-center" style="border:none;"><a href="javascript:void(0);" onclick="remove_rowzz(this);"><i class='fas fa-minus-circle' style='font-size:20px;color:red;'></i></a></td>
		<?php
		}
		?>

		
<?php		
	
	}

}

/* End of file Add_purchase_order.php */
/* Location: ./application/controllers/Add_purchase_order.php */