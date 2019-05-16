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
		<title>Eazyprint | Payment Option</title>
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
				  margin-top:5px;
				}

				button.accordion.active{
				  color: #000;
				  /*background-color: #7490BD;*/
				  background-color: #f5f5f5;
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
				  /*box-shadow: 0 0 0 1px rgba(61,119,180,.12), 0 8px 16px 0 rgba(91,139,199,.24);*/
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
			/*.fa, .fas{
				font-size:20px !important;
			}*/
		</style>
		<?php
		$this->load->view("common/metalinks");
		?>
	</head>
	<body class="app">

				<?php
				$this->load->view("common/header");
				?>
<div class=" " style="background-color: #e40046;" >
      <div class="container">
        <div class="row">
          <div class="col-md-12 register_col_height">
            <span id="j_id0:j_id30">
              <style>
                .readOnly    
                {
                  cursor: not-allowed;
                  opacity: 1;
                  background-color: #eeeeee;
                  padding-left: 8px;
                  font-size: 14px;
                  font-weight: 500;
                  margin-bottom: 0;
                  display: block;
                  color: #333333;
                  width: 96%;
                }
                .field-icon {
                  float: right;
                  margin-left: -25px;
                  margin-top: -25px;
                  position: relative;
                  z-index: 2;
                  width: 25px;
                }
                input.error-input {
                  border-color: #fb0229!important;
                }
                #divPwd2 .tooltip{
                  left:60px;
                }
                #divPwd2 .tooltip.top .tooltip-arrow {
                  left: 10%;
                }
                #divPwd2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divPincode2 .tooltip{
                  left:60px;
                }
                #divPincode2 .tooltip.top .tooltip-arrow {
                  left: 10%;
                }
                #divPincode2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divShippingaddr2 .tooltip{
                  left:60px;
                }
                #divShippingaddr2 .tooltip.top .tooltip-arrow {
                  left: 90%;
                }
                #divShippingaddr2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divMobNo2 .tooltip{
                  left:-125px;
                }
                #divMobNo2 .tooltip.top .tooltip-arrow {
                  left: 90%;
                }
                #divMobNo2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
                #divEmailId2 .tooltip{
                  left:-85px;
                }
                #divEmailId2 .tooltip.top .tooltip-arrow {
                  left: 90%;
                }
                #divEmailId2 .tooltip.top .tooltip-inner {
                  text-align: left;
                }
              </style>
          
            </span>
          </div>
        </div>
      </div>

      <div class="bx-wrapper BN1">
        <div class="bx-viewport"> 
          <div class="bx-wrapper" style="max-width: 1360px;">
            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 200px;">
                <!--<li style="float: left; list-style: none; position: relative; width: 1360px;" class="bx-clone" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>-->
					<p style="color:#fff;text-align:center;padding-top:35px;"><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:36px;"></i></p>
					<h1 style="color:#fff;text-align:center;padding:20px;margin-top:-20px;">Seamleess Checkout Experience</h1>
					<h4 style="color:#fff;text-align:center;margin-top:-20px;">Eazy Checkout within few clicks</h4>
            </div>
          </div>
        </div>
      </div>

      <style>
        .bxslider img{
          height:400px;
        }
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 55%;
        }
      </style> 
      </div>

				<div class="container">
					<div class="side-app">
						<div class="col-md-12">
							<div class="page-header">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item" aria-current="page">Checkout</li>
									<li class="breadcrumb-item" aria-current="page">Payment Option</li>
								</ol>
							</div>
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						
							<div class="col-md-7 col-sm-12 col-xs-12">
								
								<!-- LOGIN ENDS -->
								<!--<?php print_r($response);?>-->
								<a href="<?php echo base_url('checkout');?>"><button class="accordion">ORDER SUMMARY</button></a>
								<!-- DELIVERY ADDRESS STARTS-->
								<a href="<?php echo base_url('checkout/login');?>"><button class="accordion">USER DETAILS</button></a>
								<a href="<?php echo base_url('checkout/delivery_address');?>"><button class="accordion">DELIVERY ADDRESS</button></a>
								
								<!-- PAYMENT OPTION STARTS -->
								<button type="button" class="accordion active">PAYMENT OPTION</button>
								<div class="accordion_panel show" style="border:1px solid #CCC;border-top:0px;">
								 <form method="post" action="<?php echo base_url('checkout/pay_mode');?>">
								   <div class="row">
								   	<div class="col-md-12 pay_online"> 
								   		<div class="form-group"> 
								   			<label class="custom-control custom-radio"> 
								   				<input type="radio" name="pay_mode" class="custom-control-input" value="online"  required> 
								   				<span class="custom-control-label">Pay Online</span> 
								   			</label> 
								   		</div>
								   	</div>
								   	<div class="col-md-12 cod"> 
								   		<div class="form-group"> 
								   			<label class="custom-control custom-radio"> 
								   				<input type="radio" name="pay_mode" class="custom-control-input" value="cash_delivery" required> 
								   				<span class="custom-control-label">Cash on Delivery</span>
								   			</label> 
								   		</div>
								   	</div>

										<input type="hidden" name="language" value="EN"/>
										<input type="hidden" name="currency" value="INR"/>
										<input type="hidden" name="amount" value="10.00"/>
										<input type="hidden" name="tid" id="tid" readonly />
										<input type="hidden" name="merchant_id" value="185282"/>
										<input type="text" name="order_id" value="123"/>
										<input type="hidden" name="redirect_url" value="https://eazyprint.in/beta/application/views/ccavenue/ccavResponseHandler.php"/>
										<input type="hidden" name="cancel_url" value="https://eazyprint.in/beta/application/views/ccavenue/ccavResponseHandler.php"/>
										<input type="hidden" name="billing_country" value="India"/>
										<input type="hidden" name="integration_type" value="iframe_normal"/>

									<div class="col-md-6 ">
										<div class="form-group pay_mode_change">
								   			<a class="btn btn-info" href="javascript:void(0);" onclick="change_mode();">Change Payment Mode</a>
								   		</div>
								   	</div>
								   	<div class="col-md-6 text-right">
								  		<div class="form-group">
								  			<button type="submit" class="btn btn-orange btn-lg">Continue</button>
								  		</div>
								  	</div>
								   </div>
								  </form>
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
				    $('.hide_pay_online').hide();
				    $('.pay_mode_change').hide();
				});
		
				
				</script>
	</body>
</html>