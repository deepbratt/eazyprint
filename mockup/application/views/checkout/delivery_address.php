
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
		<title>Eazyprint | Delivery Address</title>
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
									<li class="breadcrumb-item" aria-current="page">Delivery Address</li>
								</ol>
							</div>
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						
							<div class="col-md-7 col-sm-12 col-xs-12">
								<a href="<?php echo base_url('checkout');?>"><button class="accordion">ORDER SUMMARY</button></a>
								<!--LOGIN STARTS-->
								<a href="<?php echo base_url('checkout/login');?>"><button class="accordion">USER DETAILS</button></a>
								
								<!-- DELIVERY ADDRESS STARTS-->
								<button type="button" class="accordion active">DELIVERY ADDRESS</button>
								<div class="accordion_panel show">
								<form method="POST" action="<?php echo base_url('checkout/add_delivery_address');?>">
									<div class="row">
										<?php
											foreach($user_addrezzz AS $key=>$fetch_user_address){
										?>
										<div class="col-md-11 p-3">
										  <div class="custom-controls-stacked">
											<label class="custom-control custom-radio">
												
												<input type="radio" class="custom-control-input" name="del_address" value="<?php echo $fetch_user_address->user_address_id;?>" <?php echo (($fetch_user_address->address_status == '1')?'checked':'')?>>
												
												<span class="custom-control-label"><strong><?php echo $fetch_user_address->full_name;?></strong></span>
												<!--<span class="custom-control-label" style="background-color:#ccc;padding:5px;">Home</span>-->
												<?php
													if($fetch_user_address->phone != ""){
												?>
												<span class="custom-control-label"><strong>(<?php echo $fetch_user_address->phone;?>)</strong></span>
												<?php
													}
												?>
											</label>
										  </div>
										  <div class="form-group address_hide_<?php echo $fetch_user_address->user_address_id;?>">
										  	<p class="ml-5"><?php echo $fetch_user_address->address;?><br><?php echo $fetch_user_address->city;?>,&nbsp;<?php echo $fetch_user_address->state;?>,&nbsp;<?php echo $fetch_user_address->country;?><br><?php echo $fetch_user_address->postal_code;?></p>
										  </div>
										</div>
										<?php
											}
										?>
										<div class="col-md-6">
											<a href="<?php echo base_url('checkout/manage_address');?>" class="btn btn-link btn-lg" style="float:left;">Manage Address</a>
										</div>
										<?php
											if(!empty($user_addrezzz)){
										?>
										<div class="col-md-6">
											<button type="submit" class="btn btn-orange btn-lg" style="float:right;">Continue</button>
										</div>
										<?php
											}
										?>
									</div>
								</form>
								</div>
								<!-- DELIVERY ADDRESS ENDS-->
								
								
								<a href="<?php echo base_url('checkout/payment_option');?>"><button class="accordion">PAYMENT OPTION</button></a>
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
				</script>-->
			<!-- Accordions Ends -->
				<script>
				function edit_addrr(e){
					var addrez_id = e;
					
				    $("#hide_"+addrez_id+"").click(function(){
				        $(".address_edit_"+addrez_id+"").hide();
				        $(".address_hide_"+addrez_id+"").show();
				    });
				    $("#show_"+addrez_id+"").click(function(){
				        $(".address_edit_"+addrez_id+"").show();
				        $(".address_hide_"+addrez_id+"").hide();
				    });
				    $("#add_address_hide").click(function(){
				        $(".address_add").hide();
				        $(".add_address_hide").show();
				    });
				    $("#add_address_show").click(function(){
				        $(".address_add").show();
				        $(".add_address_hide").hide();
				    });
				};
				</script>
	</body>
</html>