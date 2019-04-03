
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
								<button class="accordion" >LOGIN</button>
								
								<!-- DELIVERY ADDRESS STARTS-->
								<button type="button" class="accordion active">DELIVERY ADDRESS</button>
								<div class="accordion_panel show">
									<div class="row">
										<div class="col-md-11 p-3">
										  <div class="custom-controls-stacked">
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
												<span class="custom-control-label"><strong><?php echo $this->session->userdata['logged_in']['name'];?></strong></span>
												<!--<span class="custom-control-label" style="background-color:#ccc;padding:5px;">Home</span>-->
												<span class="custom-control-label"><strong><?php echo $fetch_user_data->user_phone;?></strong></span>
											</label>
										  </div>
										  <div class="form-group address_hide">
										  	<p class="ml-5"><?php echo $fetch_user_data->user_address;?><br><?php echo $fetch_user_data->user_city;?><br><?php echo $fetch_user_data->user_state;?><br><?php echo $fetch_user_data->user_pincode;?></p>
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
												<label>Full Name</label>
												<input type="text" class="form-control" value="<?php echo $this->session->userdata['logged_in']['name'];?>" placeholder="Name">
											</div>
											<div class="form-group">
												<label>Pincode</label>
												<input type="text" class="form-control" value="<?php echo $fetch_user_data->user_pincode;?>" placeholder="Pincode">
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control" value="<?php echo $fetch_user_data->user_phone;?>" placeholder="Mobile Number">
											</div>
										</div>
										<div class="col-md-12">
											<label>Address</label>
											<textarea class="form-control" placeholder="Address"><?php echo $fetch_user_data->user_address;?></textarea>
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
												<label>Full Name</label>
												<input type="text" class="form-control" placeholder="Name">
											</div>
											<div class="form-group">
												<label>Pincode</label>
												<input type="text" class="form-control" placeholder="Pincode">
											</div>
										</div>
										<div class="col-md-6 ">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control" placeholder="Mobile Number">
											</div>
										</div>
										<div class="col-md-12">
											<label>Address</label>
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
								<button type="button" class="accordion ">ORDER SUMMARY</button>
								<!-- PAYMENT OPTION STARTS -->
								<button type="button" class="accordion ">PAYMENT OPTION</button>
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