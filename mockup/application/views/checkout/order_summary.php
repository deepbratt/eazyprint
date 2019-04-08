
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
		<title>Eazyprint | Order Summary</title>
		<style>
			body{
				color:black !important;
			}
			/* ACCORDIONS STARTS*/
				button.accordion {
				  background-color: #fff;
				  cursor: pointer;
				  padding: 0.5rem 1.5rem;
				  width: 100%;
				  text-align: left;
				  outline: none;
				  font-size: 18px;
				  transition: 0.4s;
				  border: 1px solid #ccc;
				  min-height:3.5rem;
				}

				button.accordion.active{
				  color: #000;
				  /*background-color: #7490BD;*/
				  background-color: #ffe4ca;
				}

				button.accordion:hover {
				  color: #000;
				  /*background-color: #7490BD;*/
				  background-color: #ced4da;
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
									<li class="breadcrumb-item" aria-current="page">Checkout</li>
									<li class="breadcrumb-item" aria-current="page">Order Summary</li>
								</ol>
							</div>
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						
							<div class="col-md-7 col-sm-12 col-xs-12">
								<!-- ORDER SUMMARY STARTS-->
								<button type="button" class="accordion active">ORDER SUMMARY</button>
								<div class="accordion_panel show">
								<?php
									if(!empty($fetch_prod_data)){
								?>
								<form method="POST" action="<?php echo base_url('checkout/update_order_summary');?>">
								  <div class="row" style="overflow-y: scroll;max-height:300px;">
								  	<?php
								  		foreach($fetch_prod_data AS $fetch_prod_data){
								  	?>
								  	<div class="col-md-3 p-3">
								  		<div class="form-group">
								  			<?php
								  				$prod_id = $fetch_prod_data->product_id;
								  				$fetch_prod_image = $this->checkout_m->prod_image_info($prod_id);
								  			?>
								  			<img src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $fetch_prod_image->product_image_path;?>" style="height:130px;">
								  		</div>
								  		<input type="hidden" name="cartzz_id[]" value="<?php echo $fetch_prod_data->cart_id;?>">
								  		<div class="quantity buttons_added">
											<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity[]" value="<?php echo $fetch_prod_data->qty;?>" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
										</div>
								  	</div>
								  	<div class="col-md-6">
								  		<div class="form-group">
								  			<h4><?php echo $fetch_prod_data->product_title;?></h4>
								  		</div>
								  		
								  		<?php
								  			if($fetch_prod_data->size != ''){
								  		?>
								  		<div class="form-group">
								  			<span>Size: <?php echo $fetch_prod_data->size;?></span>
								  		</div>
								  		<?php
								  			}
								  		?>
							  		
							  			<?php
							  				$fetch_supplier_name = $this->checkout_m->user_detailzz($fetch_prod_data->user_id);
								  			if(!empty($fetch_supplier_name)){
								  		?>
								  		<div class="form-group">
								  			<span>Seller: <?php echo $fetch_supplier_name->user_store_name;?></span>
								  		</div>
								  		<?php
								  			}else{
								  		?>
								  		<div class="form-group">
								  			<span>Seller: Eazyprint</span>
								  		</div>
								  		<?php
								  			}
								  		?>
										  	
								  		<div class="form-group">
								  			<span style="font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_data->price;?></span>
								  			<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
								  		</div>
								  	</div>
								  	<div class="col-md-3">
								  		<div class="form-group">
											<a href="<?php echo base_url('checkout/remove_cart/');?><?php echo $fetch_prod_data->cart_id;?>">Remove</a>
										</div>
								  		<div class="form-group">
								  			<span>Delivery in 2Days, Thursday | Free</span>
								  		</div>
								  	</div>
								  	<?php
								  		}
								  	?>
								  </div>
								  <div class="row p-3">
								  	<?php
								  		if(isset($this->session->userdata['logged_in']['email']) && $this->session->userdata['logged_in']['email'] != ""){
								  	?>
								  	<div class="col-md-9">
								  		<div class="form-group">
								  			<p>Order Confirmation email will be sent to <a href="javascript:void(0);"><?php echo $this->session->userdata['logged_in']['email']?></a></p>
								  		</div>
								  	</div>
								  	<?php
								  		}
								  	?>
								  	<div class="col-md-12 text-right">
								  		<div class="form-group">
								  			<button class="btn btn-orange btn-lg">Continue</button>
								  		</div>
								  	</div>
								  </div>
								</form>
								<?php
									}else{
								?>
								<div class="row p-5" style="text-align:center;">
									<img src="<?php echo base_url('images/empty-cart.jpg');?>" style="height:100%;">
								</div>
								<?php
									}
								?>
								</div>
								<!-- ORDER SUMMARY ENDS-->
								<!--LOGIN STARTS-->
								<a href="<?php echo base_url('checkout/login');?>"><button class="accordion">LOGIN</button></a>
								<a href="<?php echo base_url('checkout/delivery_address');?>"><button class="accordion">DELIVERY ADDRESS</button></a>
								
								<!-- PAYMENT OPTION STARTS -->
								<a href="<?php echo base_url('checkout/payment_option');?>"><button class="accordion">PAYMENT OPTION</button></a>
								<p>&nbsp;</p>
							<!-- PAYMENT OPTION ENDS -->
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
				<!-- ACCORDIONS STARTS
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
				</script> -->
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