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
														<select name="sub_category" class="form-control select2-show-search" onchange="supplier_id(this.value);" style="border:none !important;">
														 	<option value="" selected="" disabled="">Choose Supplier</option>
														  <?php
														  	foreach($fetch_supplier_info AS $each_supplier_data){
														  ?>
							                              	<option value="<?php echo $each_supplier_data->supplier_id;?>"><?php echo $each_supplier_data->supplier_enterprise_name;?></option>
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
														<select name="sub_category" class="form-control select2-show-search placeofsupply" onchange="get_state(this.value);">
														 	<option value="" disabled="">Choose State</option>
														 	<?php
															  	foreach($fetch_cities AS $each_fetch_cities){
															?>
								                              	<option value="<?php echo $each_supplier_data->supplier_id;?>"><?php echo $each_fetch_cities->city_state;?></option>
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
													</div>
												</div> 	
											</div>
										</div>

										<div class="table-responsive push" id="create_invoice">
											<table class="table table-bordered table-hover">
												<tr class=" ">
													<th class="text-center " style="width: 1%;"></th>
													<th class="text-center " style="width: 50%">Product</th>
													<th class="text-center" style="width: 1%">Quantity</th>
													<th class="text-right" style="width: 1%">Amount</th>
													<th class="text-right" style="width: 1%">Tax</th>
													<th class="text-right" style="width: 1%">Total&nbsp;Amount</th>
													<th class="text-right" style="width: 1%"></th>
												</tr>
												
												<tr>
													<td class="text-center">1</td>
													<td>
													<div class="row">
														<div class="col-md-4">
															<input type="text" list="category_list" class="form-control" name="category" onchange="categoriezz(this.value)" style="width:100%;"  placeholder="Category">
															<datalist id="category_list">
																<option value="Mobile Cases">
																<option value="Mugs">
																<option value="T-shirts">
																<!--<?php
																	foreach($fetch_raw_details AS $each_raw_material){
																?>
																<option value="<?php echo $each_raw_material->raw_category?>">
																<?php
																	}
																?>-->
															</datalist>
														</div>
														<div class="col-md-4">
															<input type="text" list="brand_list" class="form-control" name="brand" style="width:100%;" placeholder="Brand">
															<datalist id="brand_list">
																<option value="Nokia">
																<option value="Samsung">
																<option value="Iphone">
																<!--<?php
																	foreach($fetch_raw_details AS $each_raw_material){
																?>
																<option value="<?php echo $each_raw_material->raw_category?>">
																<?php
																	}
																?>-->
															</datalist>
														</div>
														<div class="col-md-4">
															<input type="text" list="raw_pro_name" class="form-control" name="raw_product_name" style="width:100%;" placeholder="Raw Product Name">
															<datalist id="raw_pro_name">
																<option value="Nokia">
																<option value="Samsung">
																<option value="Iphone">
																<!--<?php
																	foreach($fetch_raw_details AS $each_raw_material){
																?>
																<option value="<?php echo $each_raw_material->raw_category?>">
																<?php
																	}
																?>-->
															</datalist>
														</div>
													</div>
													
													</td>
													<td class="text-center">
														<div class="quantity buttons_added">
															<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="" onchange="quantity_amtzz(this.value)"><input type="button" value="+" class="plus">
														</div>
													</td>
													<td class="text-right" id="amountzz"><i class="fas fa-rupee-sign"></i><span>1800</span>x<span class="quantzz">1</span></td>
													<td class="text-right">18%</td>
													<td class="text-right" id="total_amount"><i class="fas fa-rupee-sign"></i><span class="card-title">1800</span></td>

													<td class="text-center"><a href="javascript:void(0);"><i class="fas fa-plus-circle" style="font-size:20px;color:red;"></i></a></td>
												</tr>

												<tr>
													<td colspan="5" class="font-w600 text-right">Subtotal</td>
													<td class="card-title text-right" id="total_amount"><i class="fas fa-rupee-sign"></i>  <span class="card-title">1800</span></td>
												</tr>
												<tr>
													<td colspan="5" class="font-w600 text-right">Tax Rate</td>
													<td class="card-title text-right">18%</td>
												</tr>
												<tr>
													<td colspan="5" class="font-weight-bold text-uppercase text-right">Total Due</td>
													<td class="card-title text-right" id="total_amount"><i class="fas fa-rupee-sign"></i>  <span class="card-title">1800</span></td>
												</tr>
												<tr>
													<td colspan="6" class="text-right">
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
			function supplier_id(e){
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
				  $('#create_invoice').show();
				  //alert(response);
				}
			  });
			}

			function get_state(state){
				if(state != ''){
					$('#create_invoice').show();
				}
			}

			function categoriezz(category_name){
				//alert(category_name);
			}

			function quantity_amtzz(quantity){
				if(quantity != ''){
					var quant = quantity;
					$('.quantzz').html(quant);
					var amount = $('#amountzz span').html();
					var Total = quant * amount;
					$('#total_amount span').html(Total);
				}
			}
		</script>

	</body>

</html>


