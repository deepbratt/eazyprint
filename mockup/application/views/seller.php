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
    <link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.png" />
    <link class="user" href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link class="user" href="<?php echo base_url();?>css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    <link class="user" href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css" />
    <link class="user" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url();?>js/stub.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/VFRemote.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/SfdcCore.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/jquery-3.2.1.min.js">
    </script>
    <script src="<?php echo base_url();?>js/ajax.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/plugin.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/main.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/Sd_Code" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/VFSObjectCrud.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/picklist4.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>js/VFState.js" type="text/javascript">
    </script>
    <!-- Title -->
    <title>Eazyprint | Product
    </title>
    <?php
$this->load->view("common/metalinks");
?>
    <style>
      .register_col_height{
        min-height:0px;
      }
    </style>
    <style>
      .gst-form{
        top: 45px;
      }
      .gst-label{
        text-align:center;
      }
      .timeout-label{
        text-align:center;
        color : #ff0000;
      }
      .upper-case{
        text-transform:uppercase;
      }
      .formPadding{
        padding: 27px 0px;
      }
      .divMargin{
        margin-top: 10px;
        margin-bottom: 5px;
      }
      .errorGst{
        color: #ff0000;
      }
      .register-div{
        text-align: right;
        margin-left:45px;
      }
      .gtsn-edit-label{
        text-align: right;
        margin-top: 12px;
      }
    </style>
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

              <div id="snapdeal-register-component">
                <div class="formDivOuter formPadding gst-form">
					<?php
					  if($this->session->flashdata('error_it')){
					?>
						<div class="alert alert-danger" style="margin-bottom:10px;">
							<strong><?php echo $this->session->flashdata('error_it');?></strong>
						</div>
					<?php
					}if($this->session->flashdata('duplicate')){
					?>
						<div class="alert alert-danger" style="margin-bottom:10px;">
							<strong><?php echo $this->session->flashdata('duplicate');?></strong>
						</div>
					<?php
					}
					if($this->session->flashdata('logged_in'))
					{
					?>
						<div class="alert alert-success" style="margin-bottom:10px;">
							<strong><?php echo $this->session->flashdata('logged_in');?></strong>
						</div>
					<?php
					}
					?>
				   <div class="col-md-12 col-sm-12">
                    <h2 class="register-now-label">WANT TO BUY FROM EAZYPRINT? 
                    </h2>
                    <h5 class="register-now-label gst-label">Order your products in less than 10 minutes! 
                    </h5>
                  </div>
                  <form id=""  method="post" action="<?php echo base_url();?>seller/vendor_registration" class="form frmGST" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                      <div class="col-md-12 show-hd actv" id="fr-new-user">
                        <div class="row">
                          <div class="col-md-12 col-sm-12 gst-label divMargin" id="divGSTN">
                            <div class="group">
                              <div class="tooltip top fade in" role="tooltip" style="bottom:34px">
                                <div class="tooltip-arrow">
                                </div>
                                <div class="tooltip-inner">GST Number is required
                                </div>
                              </div>
                              <label class="sd-input">Enter your email
                              </label>
                              <input  type="text" name="user_email" class="form-control landing_input_text  sd-input " required="required">
                              
                              
                              </span>
                            </div>    
                          </div>
                          <div class="col-md-12 col-sm-12">
                          </div>
                          <div class="">
                          </div>
                          <div class="col-md-12 col-sm-12 marginBottom1 custom_inputrow custom_joinnow_btn" id="divRegisterNowBtn">
                            <div class="group">
                              <span class="loader_icon" id="join_now_loader_gst" style="top: 14px; z-index: 2; display: none;"> 
                                <img class="loader_img" src="/resource/1416511410000/loadingImageSmall">
                              </span>
                              <input class="sf-button-primary" id="" name="register" value="Register Now" tabindex="11" type="submit">
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <div class="professional-service">Need help in getting GST?
                              <br> 
                              <a href="https://snapdeal-sf-prod.s3.amazonaws.com/docs/ProfessionalServices-V2.xlsx" target="_blank">Click Here
                              </a> to download the list of professional service providers
                            </div>
                          </div> 
                          <div class="">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="j_id0:j_id30:j_id31:frmGST:j_id134">
                    </div>
                  </form>
                </div>
              </div>
            </span>
          </div>
        </div>
      </div>
      <div class="bx-wrapper BN1">
        <div class="bx-viewport"> 
          <div class="bx-wrapper" style="max-width: 1360px;">
            <div class="bx-viewport" aria-live="polite" style="width: 100%; overflow: hidden; position: relative; height: 400px;">
              <ul class="bxslider" style="width: 2215%; position: relative; transition-duration: 0s; transform: translate3d(-2760px, 0px, 0px);">
                <li style="float: left; list-style: none; position: relative; width: 1360px;" class="bx-clone" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/seller_images/seller_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/seller_images/seller_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" aria-hidden="false">
                  <img src="<?php echo base_url();?>images/seller_images/seller_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" class="bx-clone" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/seller_images/seller_banner.png" style="visibility: visible;">
                </li>
              </ul>
            </div>
            w
          </div>
        </div>
      </div> 
      <div class="BN2 hidden">
        <img src="<?php echo base_url();?>images/seller_images/03.jpg">
      </div> 
      <div class="BN3 hidden">
        <img src="<?php echo base_url();?>images/seller_images/04.jpg">
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
    <div class="container" id="home-page">
      <div class="row categoryBorder">
        <div class="col-md-4 col-sm-12 col-xs-12 category mb-20"> 
          <span class="cate-cont text-capi">Sell 24x7 across 
          </span>
          <span class="cate-cont">3000 cities and towns
          </span>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 category text-lower mb-20">
          <span class="cate-cont text-capi">Millions of users and 
          </span>
          <span class="cate-cont">3,00,000 sellers across India
          </span> 
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 category mb-20">
          <span class="cate-cont text-capi">Quick payments and 
            <br>
            transparent processes 
          </span>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="sellingOnSnapdeal">How it is simple to buy from Eazyprint
          </h1>
        </div>
      </div>
      <div class="row pos-rel">
        <div class="verti-line">
        </div>
        <div class="col-md-5 noDisplayInMob textAlineRight"> 
          <img class="center" src="<?php echo base_url();?>images/seller_images/Register_yourself_and_List_your_products.png"> 
        </div>
        <div class="col-md-2 middleImageSteps"> 
          <img src="<?php echo base_url();?>images/seller_images/list-step-1.png"> 
        </div>
        <div class="col-md-5 sellingText"> 
          <span>Step 1: Register yourself and List your products
          </span>
          <ul class="cus-pd">
            <li class="mb-10">
              <span>Register your business for free and create a product catalogue
              </span>
            </li>
            <li class="mb-10">
              <span>Sell under your own private label or sell an existing brand
              </span>
            </li>
            <li>
              <span>Get self-serve training
              </span>
            </li>
            <li>
              <span>Order Packaging material from our website to start selling
              </span>
            </li>
          </ul>
        </div>
      </div>
      <div class="row pos-rel">
        <div class="verti-line">
        </div>
        <div class="col-md-5 noDisplayInMob textAlineLeft bottomDiv pull-right "> 
          <img class="center" src="<?php echo base_url();?>images/seller_images/Get_support_from_professional_service_provider.png" style="padding-bottom:50px;"> 
        </div>
        <div class="col-md-2 middleImageSteps upperDiv pull-right"> 
          <img src="<?php echo base_url();?>images/seller_images/list-step-2.png"> 
        </div>
        <div class="col-md-5 sellingText text-right bottomDiv pull-right"> 
          <span>Step 2: Get support from professional service provider
          </span>
          <ul class="cus-pd">
            <li class="mb-10">
              <span>Get your documentation &amp; cataloging done with ease from our Professional Services network across India
              </span>
            </li>
            <li>
              <span>Increase your product visibility with high-quality product photo-shoot by our Partnered Photographers
              </span> 
            </li>
          </ul>
          <br>
          <br>
        </div>
      </div>
      <div class="row pos-rel">
        <div class="verti-line">
        </div>
        <div class="col-md-5 noDisplayInMob textAlineRight"> 
          <img src="<?php echo base_url();?>images/seller_images/Receive_orders_Schedule_a_pickup.png" style="width:100%;padding-left:35px;padding-right:30px;padding-bottom:80px;"> 
        </div>
        <div class="col-md-2 middleImageSteps"> 
          <img src="<?php echo base_url();?>images/seller_images/list-step-3.png" style="padding-bottom:100px"> 
        </div>
        <div class="col-md-5 sellingText"> 
          <span>Step 3: Receive orders &amp; Schedule a pickup
          </span>
          <ul class="cus-pd">
            <li class="mb-10">
              <span>Once listed, your products will be available to millions of users across India 
              </span>
            </li>
            <li>
              <span>Get orders and manage your online business via our Seller Panel and Seller Zone Mobile App
              </span> 
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 noDisplayInMob textAlineLeft pull-right"> 
          <img class="center" src="<?php echo base_url();?>images/seller_images/Receive_quick_payment_grow_your_business.png"> 
        </div>
        <div class="col-md-2 middleImageSteps upperDiv2 pull-right"> 
          <img src="<?php echo base_url();?>images/seller_images/list-step-4.png"> 
        </div>
        <div class="col-md-5 sellingText text-right bottomDiv2 pull-right"> 
          <span>Step 4: Receive quick payment &amp; grow your business
          </span>
          <ul class="ptl">
            <li class="mb-10">
              <span>Receive quick and hassle-free payments in your account once your orders are fulfilled
              </span>
            </li>
            <li>
              <span>Expand your business with low interest &amp; collateral-free loans
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <?php
$this->load->view("common/footer");
?>
  </body>
</html>
