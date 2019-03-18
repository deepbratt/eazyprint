
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/png"/>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>js/quantity_style.js"></script>
		<!-- Title -->
		<title>Eazyprint | Checkout</title>
		<style>
			body{
				color:black !important;
			}
			/* ACCORDIONS STARTS*/
				button.accordion {
				  background-color: #fff;
				  cursor: pointer;
				  padding: 10px;
				  width: 100%;
				  text-align: left;
				  outline: none;
				  font-size: 18px;
				  transition: 0.4s;
				  border: 1px solid #ccc;
				}

				button.accordion.active, button.accordion:hover {
				  color: #ffffff;
				  background-color: #7490BD;
				}

				button.accordion:before {
				  content: '\02795';
				  font-size: 9px;
				  float: left;
				  margin-left: 0px;
				  margin-right: 10px;
				  margin-top: 7px;
				}

				button.accordion.active:before {
				  content: "\2796";
				}

				div.accordion_panel {
				  background-color: white;
				  max-height: 0;
				  padding-left: 15px;
				  overflow: hidden;
				  padding-top: 0px;
				  box-shadow: 0 0 0 1px rgba(61,119,180,.12), 0 8px 16px 0 rgba(91,139,199,.24);
				  transition: 0.6s ease-in-out;
				  opacity: 0;
				  margin-bottom: 8px;
				}

				.accordion_panel-icon {
				  margin-right: 10px;
				}

				.accordion_panel h5 {
				  font-size: 15px;
				  line-height: 23px;
				  margin-top: 5px;
				  margin-bottom: 0px;
				  display: inline-block;
				  color: #2d2d2d
				}

				.accordion_panel p {
				  font-size: 15px;
				  line-height: 23px;
				  padding: 15px 30px 20px 0;
				  color: #2d2d2d
				}

				div.accordion_panel.show {
				  opacity: 1;
				  max-height: 800px;
				  padding:23px;
				}
			/* ACCORDIONS ENDS*/
			.table-vcenter td, .table-vcenter th{
				vertical-align: top !important;
				border-top:none !important; 
			}
			.custom-control-label:before{
				border:2px solid #7490bd !important;
			}
			.fa, .fas{
				font-size:20px !important;
			}
		</style>
		<?php
		$this->load->view("common/metalinks");
		?>
	</head>
	<body class="app">

				<?php
				$this->load->view("common/header");
				?>
				<div>
					<img src="<?php echo base_url();?>images/checkout_banner.png">
				</div>
				<div class="container">
					<div class="side-app">
						<div class="col-md-12">
							<div class="page-header">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item" aria-current="page">
									<?php
										$this->load->model('checkout_m');
										$cat_id = $fetch_prod_data->product_category_id;
										$fetch_cat_name = $this->checkout_m->cat_data($cat_id);
										echo ucfirst($fetch_cat_name->category_name);
									?>
									</li>
									<li class="breadcrumb-item" aria-current="page">
									<?php
										echo ucfirst($fetch_prod_data->product_name);
									?>
									</li>
								</ol>
							</div>
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						
							<div class="col-md-7 col-sm-12 col-xs-12">
								<!--LOGIN STARTS-->
								<button class="accordion " >LOGIN</button>
								<div class="accordion_panel ">
								  	<div class="row p-2">
								  		<div class="col-md-6">
									  		<form method="POST" action="<?php echo base_url('checkout/login');?>">
								  				<div class="form-group">
									  				<h5>Name:</h5>
									  				<input type="email" value="" name="email" class="form-control">
									  			</div>
									  			<div class="form-group">
									  				<h5>Password:</h5>
									  				<input type="password" value="" name="password" class="form-control">
									  			</div>
									  			<div class="form-group">
									  				<button type="submit" class="btn btn-primary">LOGIN</button>
									  			</div>
									  		</form>
								  			<!--<div class="form-group">
								  				<h5>Name:</h5>
								  				<span style="margin-left:5px;">Debashis Nath</span>
								  			</div>
								  			<div class="form-group">
								  				<h5>Phone:</h5>
								  				<span style="margin-left:5px;">7074459217</span>
								  			</div>
								  			<div class="form-group">
								  				<a href="javascript:void(0);">Logout & Signin into another account</a>
								  			</div>
								  		
								  			<div class="form-group">
								  				<a href="#" class="btn btn-azure btn-lg">Continue Checkout</a>
								  			</div>-->
								  		</div>

								  		<div class="col-md-6">
								  			<h5 style="padding-bottom:10px;">Advantages of our secure login</h5>
								  			<div class="form-group">
								  				<i class="fas fa-truck-moving"></i>
								  				<span style="margin-left:5px;font-size: 13px;">Easily Track Orders, Hassle free Returns</span>
								  			</div>
								  			<div class="form-group">
								  				<i class="fas fa-bell"></i>
								  				<span style="margin-left:12px;font-size: 13px;">Get Relevant Alerts</span>
								  			</div>
								  			<div class="form-group">
								  				<i class="fas fa-star"></i>
								  				<span style="margin-left:8px;font-size: 13px;">Wishlist, Reviews, Ratings and more.</span>
								  			</div>
								  		</div>
								  		<div class="col-md-12">
								  			<span>Please note that upon clicking "Logout" you will lose all items in cart and will be redirected to Eazyprint home page.</span>
								  		</div>
								  	</div>								  
								</div>
								<!-- LOGIN ENDS -->
								<!-- DELIVERY ADDRESS STARTS-->
								<button class="accordion active">DELIVERY ADDRESS</button>
								<div class="accordion_panel show">
									<div class="row">
										<div class="col-md-11 p-3">
										  <div class="custom-controls-stacked">
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
												<span class="custom-control-label"><strong>Debashis Nath</strong></span>
												<span class="custom-control-label" style="background-color:#ccc;padding:5px;">Home</span>
												<span class="custom-control-label"><strong>7074459217</strong></span>
											</label>
										  </div>
										  <div class="form-group address_hide">
										  	<p class="ml-5">15/12 Uttara Apartment, Anandapuri, Barrackpore. PIN: 700122</p>
										  </div>
										</div>
										<div class="col-md-1 p-3">
											<div class="form-group">
												<a href="javascript:void(0);" style="font-size:15px;font-weight:bold;" id="show">EDIT</a>
											</div>
										</div>
									</div>

									<!-- EDIT ADDRESS -->
									<div class="row address_edit" style="display:none;">
										<div class="col-md-6 ">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Name">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Pincode">
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Mobile Number">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Locality">
											</div>
										</div>
										<div class="col-md-12">
											<textarea class="form-control" placeholder="Address"></textarea>
										</div>
										<div class="col-md-12" style="margin-top:10px;">
											<button class="btn btn-success">Submit</button>
											<button id="hide" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								<!-- EDIT ADDRESS -->

									
									<div class="row">
										<div class="col-md-12 p-3">
											<a href="javascript:voide(0);" id="add_address_show" style="font-weight: bold;font-size:13px;"><i class="fas fa-plus"></i> ADD NEW ADDRESS</a>
										</div>
									</div>
									<!-- ADD NEW ADDRESS STARTS-->
									<div class="row address_add" style="display:none;">
										<div class="col-md-6 ">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Name">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Pincode">
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Mobile Number">
											</div>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Locality">
											</div>
										</div>
										<div class="col-md-12">
											<textarea class="form-control" placeholder="Address"></textarea>
										</div>
										<div class="col-md-12" style="margin-top:10px;">
											<button class="btn btn-success">Submit</button>
											<button id="add_address_hide" class="btn btn-secondary">Cancel</button>
										</div>
									</div>
								<!-- ADD NEW ADDRESS ENDS-->
								</div>
								<!-- DELIVERY ADDRESS ENDS-->
								<!-- ORDER SUMMARY STARTS-->
								<button class="accordion ">ORDER SUMMARY</button>
								<div class="accordion_panel" >
								  <div class="row p-3">
								  	<div class="col-md-3">
								  		<div class="form-group">
								  			<img src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $single_prod_image[0];?>" style="height:130px;">
								  		</div>
								  		<div class="quantity buttons_added">
											<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
										</div>
								  	</div>
								  	<div class="col-md-6">
								  		<div class="form-group">
								  			<h4><?php echo $fetch_prod_data->product_title;?></h4>
								  		</div>
								  		<?php
								  			if($size != ''){
								  		?>
								  		<div class="form-group">
								  			<span>Size: <?php echo $size;?></span>
								  		</div>
								  		<?php
								  			}
								  		?>
								  		<div class="form-group">
								  			<span>Seller: Eazyprint</span>
								  		</div>
								  		<div class="form-group">
								  			<span style="font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_data->product_retail_price;?></span>
								  			<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
								  		</div>
								  	</div>
								  	<div class="col-md-3">
								  		<div class="form-group">
								  			<span>Delivery in 2Days, Thursday | Free</span>
								  		</div>
								  	</div>
								  </div>
								  <div class="row p-3">
								  	<div class="col-md-9">
								  		<div class="form-group">
								  			<p>Order Confirmation email will be sent to <a href="javascript:void(0);">debashisnath1992@gmail.com</a></p>
								  		</div>
								  	</div>
								  	<div class="col-md-3 text-right">
								  		<div class="form-group">
								  			<button class="btn btn-orange btn-lg">Continue</button>
								  		</div>
								  	</div>
								  </div>
								</div>
								<!-- ORDER SUMMARY ENDS-->
								<!-- PAYMENT OPTION STARTS -->
								<button class="accordion ">PAYMENT OPTION</button>
								<div class="accordion_panel ">

								  <div class="row">
									<div class="col-md-11 p-3">
									  <div class="custom-controls-stacked">
										<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
											<span class="custom-control-label"><strong>Axis Bank Debit Card</strong></span>
											<span class="custom-control-label" style="float:right;font-weight:bold;">20xx xxxx xxxx xx87</span>
										</label>
									  </div>
								  	  <div class="row">
									  		<div class="col-md-3 ml-5">
									  			<input type="text" class="form-control" value="" name="cvv" placeholder="CVV" style="width:120px;">
									  		</div>
									  		<div class="col-md-3">
									  			<button class="btn btn-orange btn-lg">Continue</button>
									  		</div>
									  </div>	
									  <div class="form-group p-4 ml-2">
									  		<span style="color:green;"><i class="fas fa-rupee-sign"></i>50 instant discount applicable.</span>
									  </div>
									</div>
								  </div>

								   <div class="row">
									<div class="col-md-11 p-3">
									  <div class="custom-controls-stacked">
										<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
											<strong class="custom-control-label">Credit / Debit/ ATM Card</strong>
										</label>
									  </div>
									  <div class="row ml-3">
									  		<div class="col-md-12">
									  			<input type="text" class="form-control" value="" name="card_number" placeholder="CARD NUMBER">
									  		</div>
									  </div>	
								  	  <div class="row  p-5">
								  	  		<div class="col-md-3">
									  			<input type="text" class="form-control" value="" name="cvv" placeholder="Expiry Date" style="width:120px;">
									  		</div>
									  		<div class="col-md-3">
									  			<input type="text" class="form-control" value="" name="cvv" placeholder="CVV" style="width:120px;">
									  		</div>
									  		<div class="col-md-3">
									  			<button class="btn btn-orange btn-lg">Continue</button>
									  		</div>
									  </div>
									</div>
								  </div>

								   <div class="row">
								   	<div class="col-md-12">
									  <div class="custom-controls-stacked">
										<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
											<span class="custom-control-label"><strong>Cash on Delivery</strong></span>
										</label>
									  </div>
									</div>
							  	</div>
								  

								</div>
								<!-- PAYMENT OPTION ENDS -->
							</div>
						<!-- RIGHT SIDE PRODUCT DETAILS STARTS-->
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header" style="background-color:#f5f5f5">
										<strong class="card-title">Price Details</strong>
									</div>
									<div class="card-body" style="padding:4px !important;">
									  	<div class="table-responsive">
											<table class="table card-table table-vcenter text-nowrap">
												<tr>
													<td>Price(1 Item)</td>
													<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_data->product_retail_price;?></td>
												</tr>
												<tr>
													<td>Apply Coupon</td>
													<td style="float:right;"><input type="text" placeholder="coupon" class="form-control" style="width:150px;"></td>
												</tr>
												<tr>
													<td>Delivery Charges</td>
													<td style="float:right;color:green;font-size:21px;;">FREE</td>
												</tr>
												<tr>
													<td>Amount Payable</td>
													<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_data->product_retail_price;?></td>
												</tr>
											</table>
										</div>
									</div>
								</div> 
								<div class="row" style="color:#878787;">
									<div class="col-md-2">
										<img src="<?php echo base_url();?>images/shield_a7ea6b.png" style="height:45px;"> 
									</div>
									<div class="col-md-10" style="margin-left:-21px;font-weight:500;">
										Safe and Secure Payments. Easy Returns. 100% Authentic products.
									</div>
								</div>
							</div>
							<!-- RIGHT SIDE PRODUCT DETAILS ENDS-->
						</div>
						<!-- P TAG MARTE HOBE-->
					</div>
				</div>
			</div>

<?php
$this->load->view("common/footer");
?>
				<!-- ACCORDIONS STARTS -->
				<script>
					var acc = document.getElementsByClassName("accordion");
					var i;

					function click_action(){
					  $('.accordion').removeClass('active');
					  $('.accordion_panel').removeClass('show');

					  this.classList.toggle("active");
					  this.nextElementSibling.classList.toggle("show");
					}

					for (i = 0; i < acc.length; i++) {
					  acc[i].onclick = click_action;
					}
				</script>
			<!-- Accordions Ends -->
				<script>
				$(document).ready(function(){
				    $("#hide").click(function(){
				        $(".address_edit").hide();
				        $(".address_hide").show();
				    });
				    $("#show").click(function(){
				        $(".address_edit").show();
				        $(".address_hide").hide();
				    });
				    $("#add_address_hide").click(function(){
				        $(".address_add").hide();
				        $(".add_address_hide").show();
				    });
				    $("#add_address_show").click(function(){
				        $(".address_add").show();
				        $(".add_address_hide").hide();
				    });
				});
				</script>
	</body>
</html>