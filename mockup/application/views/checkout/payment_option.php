
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
								
								<!-- LOGIN ENDS -->
								
								<!-- DELIVERY ADDRESS STARTS-->
								<button type="button" class="accordion">LOGIN</button>
								<button type="button" class="accordion">DELIVERY ADDRESS</button>
								<button type="button" class="accordion">ORDER SUMMARY</button>
								
								<!-- PAYMENT OPTION STARTS -->
								<button type="button" class="accordion active">PAYMENT OPTION</button>
								<div class="accordion_panel show">
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
								   
								   <!--<div class="row">
										<iframe src="https://www.instamojo.com/@asimsagir/7b1edb2e88fd4f51b5ffc9aec0f93614/?embed=form" width="600" height="600" border="0"></iframe>

										<iframe src="https://api.juspay.in/merchant/pay/ord_e294a26e66ad4336a992ceab81ad704c?mobile=true"width="630" height="400"style="border: 1px solid #CCC;padding: 20px;height: auto;min-height: 300px;"></iframe>
								   </div>-->
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
							<p>&nbsp;</p>
						
						</div>
						<?php $this->load->view("checkout/product_details");?>
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