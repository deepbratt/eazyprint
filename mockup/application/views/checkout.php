
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
				  border: none;
				  text-align: left;
				  outline: none;
				  font-size: 18px;
				  transition: 0.4s;
				  border-bottom: 1px solid #ccc;
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
				  box-shadow: 0 6px 14px 0 rgba(0,0,0,.08);
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
				}
			/* ACCORDIONS ENDS*/
			.table-vcenter td, .table-vcenter th{
				vertical-align: top !important;
				border-top:none !important;
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
				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row" style="padding:15px;margin:0px;">
						
							<div class="col-md-7 col-sm-12 col-xs-12">
								<!--LOGIN STARTS-->
								<button class="accordion active">LOGIN</button>
								<div class="accordion_panel show">
								  	<div class="row p-2">
								  		<div class="col-md-6">
								  			<div class="form-group">
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
								  			</div>
								  		</div>

								  		<div class="col-md-6">
								  			<div class="form-group">
								  				<span class="text-muted">Advantages of our secure login</span>
								  			</div>
								  			<div class="form-group">
								  				<i class="fas fa-truck-moving"></i>
								  				<span style="margin-left:5px;">Easily Track Orders, Hassle free Returns</span>
								  			</div>
								  			<div class="form-group">
								  				<i class="fas fa-bell"></i>
								  				<span style="margin-left:5px;">Get Relevant Alerts</span>
								  			</div>
								  			<div class="form-group">
								  				<i class="fas fa-star"></i>
								  				<span style="margin-left:5px;">Wishlist, Reviews, Ratings and more.</span>
								  			</div>
								  		</div>
								  		<div class="col-md-12">
								  			<span>Please note that upon clicking "Logout" you will lose all items in cart and will be redirected to Eazyprint home page.</span>
								  		</div>
								  	</div>								  
								</div>
								<!-- LOGIN ENDS -->
								<!-- DELIVERY ADDRESS STARTS-->
								<button class="accordion">DELIVERY ADDRESS</button>
								<div class="accordion_panel">
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
										  <div class="form-group">
										  	<p>15/12 Uttara Apartment, Anandapuri, Barrackpore. PIN: 700122</p>
										  </div>
										</div>
										<div class="col-md-1 p-3">
											<div class="form-group">
												<a href="javascript:void(0);" style="font-size:15px;font-weight:bold;">EDIT</a>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-11 p-3">
										  <div class="custom-controls-stacked">
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
												<span class="custom-control-label"><strong>Shuvradeb Mondal</strong></span>
												<span class="custom-control-label" style="background-color:#ccc;padding:5px;">Home</span>
												<span class="custom-control-label"><strong>9230841054</strong></span>
											</label>
										  </div>
										  <div class="form-group">
										  	<p>15/12 Uttara Apartment, Anandapuri, Barrackpore. PIN: 700122</p>
										  </div>
										</div>
										<div class="col-md-1 p-3">
											<div class="form-group">
												<a href="javascript:void(0);" style="font-size:15px;font-weight:bold;">EDIT</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 p-3">
											<a href="javascript:voide(0);" style="font-weight: bold;font-size:13px;"><i class="fas fa-plus"></i> ADD NEW ADDRESS</a>
										</div>
									</div>
								</div>
								<!-- DELIVERY ADDRESS ENDS-->
								<!-- ORDER SUMMARY STARTS-->
								<button class="accordion">ORDER SUMMARY</button>
								<div class="accordion_panel" >
								  <div class="row p-3">
								  	<div class="col-md-2">
								  		<div class="form-group">
								  			<img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="product_image" style="height:130px;">
								  		</div>
								  		<input type="number" class="form-control" name="quantity" value="1">
								  	</div>
								  	<div class="col-md-7">
								  		<div class="form-group">
								  			<h3>Moto G5 Plus backcover</h3>
								  		</div>
								  		<div class="form-group">
								  			<span>Size: L</span>
								  		</div>
								  		<div class="form-group">
								  			<span>Seller: Eazyprint</span>
								  		</div>
								  		<div class="form-group">
								  			<span style="font-size:15px;font-weight:bold;"><i class="fas fa-rupee-sign"></i>499</span>
								  			<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
								  		</div>
								  	</div>
								  	<div class="col-md-3">
								  		<div class="form-group">
								  			<span>Delivery in 2Days, Thur | Free</span>
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
									  		<div class="col-md-3">
									  			<input type="text" class="form-control" value="" name="cvv" placeholder="CVV" style="width:120px;">
									  		</div>
									  		<div class="col-md-3">
									  			<button class="btn btn-orange btn-lg">Continue</button>
									  		</div>
									  </div>	
									  <div class="form-group p-3">
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
									  <div class="row p-3">
									  		<div class="col-md-12">
									  			<input type="text" class="form-control" value="" name="card_number" placeholder="CARD NUMBER">
									  		</div>
									  </div>	
								  	  <div class="row p-3">
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

								   <div class="row p-3">
								   	<div class="col-md-12">
									  <div class="custom-controls-stacked">
										<label class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
											<span class="custom-control-label"><strong>Cash on Delivery</strong></span>
										</label>
									  </div>
									</div>
									
							  		<div class="col-md-6">
							  			<span>CAPTCHA</span>
							  		</div>
							  		<div class="col-md-6">
							  			<input type="text" class="form-control" value="" name="cvv" placeholder="Enter the characters">
							  		</div>
							  	</div>
								  

								</div>
								<!-- PAYMENT OPTION ENDS -->
							</div>
						<!-- RIGHT SIDE PRODUCT DETAILS STARTS-->
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header">
										<strong class="card-title">Price Details</strong>
									</div>
									<div class="card-body">
									  	<div class="table-responsive">
											<table class="table card-table table-vcenter text-nowrap">
												 <tr>
													<td><img src="<?php echo base_url();?>images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="" style="height:100px;"></td>
													<td>
														Moto G5 Plus backcover <br>
														<span>Size: L</span><br>
														<span>Seller: Eazyprint</span>
													</td>
												</tr>
												<tr>
													<td>Price(1 Item)</td>
													<td style="float:right;"><i class="fas fa-rupee-sign"></i> 449</td>
												</tr>
												<tr>
													<td>Delivery Charges</td>
													<td style="float:right;color:green;">FREE</td>
												</tr>
												<tr>
													<td>Amount Payable</td>
													<td style="float:right;"><i class="fas fa-rupee-sign"></i> 499</td>
												</tr>
											</table>
										</div>
									</div>
								</div> 
								<div class="form-group">
									<h5><i class="fas fa-shield-alt"></i> Safe and Secure Payments. Easy Returns. 100% Authentic products.</h5>
								</div>
							</div>
							<!-- RIGHT SIDE PRODUCT DETAILS ENDS-->
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
	</body>
</html>