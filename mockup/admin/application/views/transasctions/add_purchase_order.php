<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="<?php echo base_url('images')?>/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<!-- Date Picker Plugin -->
		<link href="<?php echo base_url();?>css/spectrum.css" rel="stylesheet" />
		<!-- Quantity Plugin -->
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>js/quantity_style.js"></script>
		<!-- Title -->
		<title>Eazyprint | Add Purchase Order</title>
		<style>
			.top-title{
				margin-top:12px;
			}
			.table td{
				vertical-align: middle !important;
			}
		</style>
       <?php $this->load->view('common/metalinks');?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
				<?php $this->load->view('common/header');?>

				<?php $this->load->view('common/sidebar');?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Purchase Order</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="<?php echo base_url('admin_dashboard');?>">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Purchase Order</li>
							</ol>
						</div>
						<?php
						  if($this->session->flashdata('success')){
						?>
							<div class="alert alert-success">
								<strong><?php echo $this->session->flashdata('success');?></strong>
							</div>
						<?php
						}
						if($this->session->flashdata('failed')){
						?>
							<div class="alert alert-danger">
								<strong><?php echo $this->session->flashdata('failed');?></strong>
							</div>
						<?php
						}
						?>
						<div class="row">
							<div class="col-md-12">
								<form  method="post" class="card" action="<?php echo base_url('admin_add_crew/add_crew');?>">
									<div class="card-body">
										<div class="row ">
											<div class="col-md-6 ">
												<div class="row p-2">
													<div class="col-md-4 top-title">
														<h5>Invoice No.</h5>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control" value="" name="invoice_number" placeholder="Invoice Number">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4 top-title">
														<h5>Supplier Name</h5>
													</div>
													<div class="col-md-8">
														<select name="supplier_id" class="form-control select2-show-search" onchange="supplierzz_id(this.value);" style="border:none !important;">
														 	<option value="" selected="" disabled="">Choose Supplier</option>
														  <?php
														  	foreach($fetch_supplier_info AS $each_supplier_data){
														  ?>
							                              	<option value="<?php echo $each_supplier_data->user_id;?>"><?php echo $each_supplier_data->user_store_name;?></option>
							                              	<?php
							                              		}
							                              	?>
							                             </select>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4 top-title">
														<h5>GST Number</h5>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control" value="" name="gst_number" placeholder="GST Number">
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4 top-title">
														<h5>Purchase Date</h5>
													</div>
													<div class="col-md-8">
														<div class="wd-200 mg-b-30">
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="fas fa-calendar tx-16 lh-0 op-6"></i>
																	</div>
																</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" value="<?php echo date('m/d/Y',time())?>">
															</div>
														</div>
													</div>
												</div>
												<div class="row p-2">
													<div class="col-md-4 top-title">
														<h5>Place of Supply</h5>
													</div>
													<div class="col-md-8">
														<select name="place_of_supply" class="form-control select2-show-search placeofsupply" onchange="get_state(this.value)">
														 	<option value="" disabled selected>Choose State</option>
														 	<?php
															  	foreach($fetch_cities AS $each_fetch_cities){
															?>
								                              	<option value="<?php echo $each_fetch_cities->city_state;?>"><?php echo $each_fetch_cities->city_state;?></option>
							                              	<?php
							                              		}
							                              	?>
							                             </select>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row">
													<div class="col-md-4"></div>
													<div class="col-md-8">
							                             <div class="supp_addr" style="margin-top:60px;"></div>
														 <div id="hide_state">
															 <select class="form-control suppl_state">
																<option value="" selected disabled>Choose Supplier State</option>
															 </select>
														 </div>
													</div>
												</div> 	
											</div>
										</div>

										<div class="table-responsive push" id="create_invoice">
											<table class="table table-bordered table-hover">
												<tr>
													<th class="text-center " style="width: 20%">Product</th>
													<th class="text-center" style="width: 1%">Quantity</th>
													<th class="text-center" style="width: 1%">Amount</th>
													<th class="text-center state_same" style="width: 20%" colspan="2">Tax</th>
													<th class="text-center state_not_same" style="width: 20%">Tax</th>
													<th class="text-center" style="width: 1%">Total&nbsp;Amount</th>
													<th class="text-center" style="width: 1%"></th>
												</tr>
												<tr class="state_same">
													<th colspan="3"></th>
													<th class="text-center">CGST</th>
													<th class="text-center">SGST</th>
													<th></th>
													<th>Add&nbsp;More</th>
												</tr>
												<tr class="state_not_same">
													<th colspan="3"></th>
													<th class="text-center">IGST</th>
													<th></th>
													<th>Add&nbsp;More</th>
												</tr>
											
												<tr class="clone_row">
													<td>
														<select class="form-control select2-show-search" name="product_name" onchange="prod_datazz(this.value,'1')">
															<option value="" selected="" disabled="">Choose Product</option>
															<?php
																foreach($fetch_products AS $each_product){
															?>
																<option value="<?php echo $each_product->product_id;?>"><?php echo ucfirst($each_product->product_title);?></option>
															<?php
																}
															?>
														</select>
													</td>
													<td class="text-center">
														<div class="quantity buttons_added">
															<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" onchange="quantity_amtzz(this.value,'1')"><input type="button" value="+" class="plus">
														</div>
													</td>
													<td class="text-right" id="amountzz"><i class="fas fa-rupee-sign"></i><span class=" pro_price_1">0</span>x<span class="quantzz_1">1</span></td>
													<td class="text-center state_same gst_rate_1" id="cgst_rate">0%</td>
													<td class="text-center state_same gst_rate_1" id="sgst_rate">0%</td>
													<td class="text-center state_not_same gst_rate_1" id="igst_rate">0%</td>
													<td class="text-right combat" id="total_amount_1"><i class="fas fa-rupee-sign"></i><span class="card-title">0</span></td>

													<td class="text-center add_more" style="border:none;"><a href="javascript:void(0);"><i class="fas fa-plus-circle" style="font-size:20px;color:green;"></i></a></td>
												</tr>
												<tr class="state_same">
													<td colspan="6" class="font-w600 text-right">Subtotal</td>
													<td class="card-title text-right total-combat" id="subtotal_amountzz"><i class="fas fa-rupee-sign"><span class="card-title">0</span></i></td>
												</tr>
												<tr class="state_not_same">
													<td colspan="5" class="font-w600 text-right">Subtotal</td>
													<td class="card-title text-right total-combat" id="subtotal_amountzz"><i class="fas fa-rupee-sign"><span class="card-title">0</span></i></td>
												</tr>
												<tr class="state_same">
													<td colspan="6" class="font-w600 text-right">Tax Rate</td>
													<td class="card-title text-right">0%</td>
												</tr>
												<tr class="state_not_same">
													<td colspan="5" class="font-w600 text-right">Tax Rate</td>
													<td class="card-title text-right">0%</td>
												</tr>
												<tr class="state_same">
													<td colspan="6" class="font-weight-bold text-uppercase text-right">Total Due</td>
													<td class="card-title text-right" id="total_amount"><i class="fas fa-rupee-sign"><span class="card-title">0</span></i></td>
												</tr>
												<tr class="state_not_same">
													<td colspan="5" class="font-weight-bold text-uppercase text-right">Total Due</td>
													<td class="card-title text-right" id="total_amount"><i class="fas fa-rupee-sign"><span class="card-title">0</span></i></td>
												</tr>
												<tr class="state_same">
													<td colspan="7" class="text-right">
														<button type="reset" class="btn btn-secondary">Cancel</button>
														<button type="submit" class="btn btn-success">Submit</button>
														<p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
													</td>
												</tr>
												<tr class="state_not_same">
													<td colspan="7" class="text-right">
														<button type="reset" class="btn btn-secondary">Cancel</button>
														<button type="submit" class="btn btn-success">Submit</button>
														<p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
													</td>
												</tr>
											
											</table>
											
										</div>
										
									</div>
									  
								</form>




							</div>
						</div>
					</div>
					<!--footer-->
					<?php $this->load->view('common/footer');?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="<?php echo base_url('js');?>/jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js');?>/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js');?>/spectrum.js"></script>
		<script src="<?php echo base_url('js');?>/jquery-ui.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.maskedinput.js"></script>
		<script>
		 $( ".fc-datepicker" ).datepicker({ minDate: 0});
		</script>
		<script>
		  $(document).ready(function() {
				$('.state_same').show();
				$('.state_not_same').hide();
				$('.placeofsupply').hide();
				$('#hide_state').hide();
				$('#create_invoice').hide();

			  var max_fields      = 30; //maximum input boxes allowed
			  var wrapper         = $(".clone_row"); //Fields wrapper
			  var add_button      = $(".add_more"); //Add button ID
			  
			  var fetch_products = <?php echo json_encode($fetch_products);?>;
			  /*var get_categories = <?php echo json_encode($get_categories)?>;*/

			  var x = 1; //initlal text box count
			  $(add_button).click(function(e){ //on add input button click
					
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
				  x++; //text box increment
				  var htmlz = "<td><select class='form-control select2-show-search pro_data' name='product_name' onchange='prod_datazz(this.value,"+x+");'><option value='' selected='' disabled=''>Choose Product</option></select></td><td class='text-center'><div class='quantity buttons_added'><input type='button' value='-' class='minus'><input type='number' step='1' min='1' max='' name='quantity' value='1' title='Qty' class='input-text qty text' size='4' pattern='' inputmode='' onchange='quantity_amtzz(this.value,"+x+")'><input type='button' value='+' class='plus'></div></td><td class='text-right' id='amountzz'><i class='fas fa-rupee-sign'></i><span class='pro_price_"+x+"'>0</span>x<span class='quantzz_"+x+"'>1</span></td><td class='text-center state_same gst_rate_"+x+"'>0%</td><td class='text-center state_same gst_rate_"+x+"'>0%</td><td class='text-center state_not_same gst_rate_"+x+"'>0%</td><td class='text-right' id='total_amount_"+x+"'><i class='fas fa-rupee-sign'></i><span class='card-title'>0</span></td><td class='text-center' style='border:none;'><a href='javascript:void(0);' onclick='remove_rowzz(this);'><i class='fas fa-minus-circle' style='font-size:20px;color:red;'></i></a></td>"; //add input box
				}
				$(".clone_row").after("<tr>"+htmlz+"</tr>");
				$.each(fetch_products, function () {
					var optionHTML = '<option value="'+this.product_id+'">'+this.product_title+'</option>';
					$(".pro_data").append(optionHTML);
				});
				$('select').select2();
				$('.state_same').show();
				$('.state_not_same').hide();
			  });

			});

		    function remove_rowzz(e){
				$(e).parents("tr").remove();
			}

			
		</script>
		<script>
			function supplierzz_id(e){
				$.ajax({
				url: '<?php echo base_url();?>add_purchase_order/ajax_supplier_addr',
				data: {'supp_id': e,},
				type: "post",
					success: function(response){
					  $('.supp_addr').html(response);
					}
			  	});
				$.ajax({
				url: '<?php echo base_url();?>add_purchase_order/ajax_place_of_supply',
				data: {'supp_id': e,},
				type: "post",
				success: function(response){
				  $('.placeofsupply').html(response);
				  $('.suppl_state').html(response);
				  $('#create_invoice').show();
				  //alert(response);
				}
			  });
			}

			function get_state(state){
				var placeofsupply = state;
				var fetch_supply_state = $('.suppl_state').val();
				if(placeofsupply == fetch_supply_state){
					$('.state_same').show();
					$('.state_not_same').hide();
				}else{
					$('.state_not_same').show();
					$('.state_same').hide();
				}
			}
			
			function prod_datazz(prod_id,idzzz){
				//alert(idzzz);
				$.ajax({
				url: '<?php echo base_url();?>add_purchase_order/ajax_fetch_prod_details',
				data: {'product_id': prod_id,},
				type: "post",
				dataType: 'json',
					success: function(response){
						$('.pro_price_'+idzzz+'').html(response.product_retail_price);
						$('.gst_rate_'+idzzz+'').html(response.raw_gst_rate);					
					}
			  	});
			}

			function quantity_amtzz(quantity,idzz){
				var subTotal = 0;
				var quant = 0;
				if(quantity != ''){
					var quant = quantity;
					$('.quantzz_'+idzz+'').html(quant);
					var amount = $('.pro_price_'+idzz+' span').val();
					var gst_rate = $('.gst_rate_'+idzz+'').val();
					var tax_amount = parseFloat(amount*(gst_rate/100));
					
					var Total = parseFloat(quant*tax_amount);
					$('#total_amount_'+idzz+' span').html(Total);
					
					/*var sum = 0;
						 $(this).find('.combat').each(function () {
							 alert('YES');
							 exit;
							 var combat = $(this).text();
							 if (!isNaN(combat) && combat.length !== 0) {
								 sum += parseFloat(combat);
							 }
						 });
					$(this).find('.total-combat span').html(sum);*/
				}
			}

		</script>
		
		

	</body>

</html>


