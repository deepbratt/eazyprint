
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
												<span class="custom-control-label"><strong>(<?php echo $fetch_user_address->phone;?>)</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code style="background-color:#F5365C;color:white;display:<?php echo(($fetch_user_address->address_status == '1')?'':'none');?>">PRIMARY</code></span>
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
										<div class="col-md-11">
											<?php
											  if($this->session->flashdata('failed')){
											?>
											  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
											<?php
											  }
											?>
										</div>
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