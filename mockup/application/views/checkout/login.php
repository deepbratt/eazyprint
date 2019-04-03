
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
								<button class="accordion active" >LOGIN</button>
								<div class="accordion_panel show">
								  	<div class="row p-2">
								  		<div class="col-md-6">
								  			<?php
								  				if($user_id == ""){
								  			?>
									  		<form method="POST" action="<?php echo base_url('checkout/authenticate/');?><?php echo $this->uri->segment('2');?>">
									  			<?php
						                          if($this->session->flashdata('failed')){
						                        ?>
						                          <div class="alert alert-danger">
						                            <strong><?php echo $this->session->flashdata('failed');?></strong>
						                          </div>
						                        <?php
						                          }
						                        ?>
								  				<div class="form-group">
									  				<h5>Name:</h5>
									  				<input type="email" value="" name="username" class="form-control">
									  			</div>
									  			<div class="form-group">
									  				<h5>Password:</h5>
									  				<input type="password" value="" name="password" class="form-control">
									  			</div>
									  			<div class="form-group">
									  				<button type="submit" class="btn btn-primary">LOGIN</button>
									  			</div>
									  		</form>
									  		<?php
									  			}else{
									  		?>
									  		<?php
									  			if($this->session->userdata['logged_in']['name'] != ""){
									  		?>
								  			<div class="form-group">
								  				<h5>Name:</h5>
								  				<span style="margin-left:5px;"><?php echo $this->session->userdata['logged_in']['name'];?></span>
								  			</div>
								  			<?php
								  				}
								  			?>
								  			<?php
									  			if($this->session->userdata['logged_in']['email'] != ""){
									  		?>
								  			<div class="form-group">
								  				<h5>Email:</h5>
								  				<span style="margin-left:5px;"><?php echo $this->session->userdata['logged_in']['email'];?></span>
								  			</div>
								  			<?php
								  				}
								  			?>
								  			<?php
									  			if($fetch_user_data->user_phone != ""){
									  		?>
								  			<div class="form-group">
								  				<h5>Phone:</h5>
								  				<span style="margin-left:5px;"><?php echo $fetch_user_data->user_phone;?></span>
								  			</div>
								  			<?php
								  				}
								  			?>

								  			<div class="form-group">
								  				<a href="<?php echo base_url('signout')?>">Logout & Signin into another account</a>
								  			</div>
								  		
								  			<!--<div class="form-group">
								  				<a href="#" class="btn btn-azure btn-lg">Continue Checkout</a>
								  			</div>-->
								  			<?php
								  				}
								  			?>
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
								<a href="<?php echo base_url('checkout/delivery_add/');?><?php echo $this->uri->segment('2');?>"><button class="accordion">DELIVERY ADDRESS</button></a>
								<a href="<?php echo base_url('checkout/order_summ/');?><?php echo $this->uri->segment('2');?>"><button class="accordion">ORDER SUMMARY</button></a>
								<a href="<?php echo base_url('checkout/pay_option/');?><?php echo $this->uri->segment('2');?>"><button class="accordion">PAYMENT OPTION</button></a>
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