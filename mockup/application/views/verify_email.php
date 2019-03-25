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
    <title>Eazyprint | Sign Up
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
                  <div class="col-md-12 col-sm-12">
                    <h2 class="register-now-label"> Enter Password
                    </h2>
                  </div>
                  <form id="" name="login" method="post" action="<?php echo base_url("verify_email/reg_authenticate/")?><?php echo $this->uri->segment(2);?>/<?php echo $this->uri->segment(3);?>" class="form frmGST" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                      <div class="col-md-12 show-hd actv" id="fr-new-user">
                      	<?php
          	    					if($this->session->flashdata('failed')){
          	    				?>
          	    					<div class="alert alert-danger">
                            <strong><?php echo $this->session->flashdata('failed');?></strong>
                          </div>
          	    				<?php
          	    					}
          	    				?>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 gst-label divMargin" id="divGSTN">
                            <div class="group">
                              <input type="password" class="form-control landing_input_text sd-input error-input" placeholder="New Password" tabindex="10" autocomplete="password" name="reg_new_pass" id="reg_new_pass" required="required">

                              <input type="password" class="form-control landing_input_text sd-input error-input" placeholder="Confirm Password" tabindex="10" autocomplete="password" name="reg_confirm_pass" id="reg_confirm_pass" required="required" style="margin-top:3px;">
                              <span class="bar"></span>
                            </div>
                            <span class="error-gst hidden errorGst" id="gst-error">
                              <span id="j_id0:j_id30:j_id31:frmGST:errGSTn">
                              </span>
                              <div class="col-md-12 col-sm-12" style="text-align:right;">
                                <a href="/ForgotPassword">
                                  <u>Reset Password</u>
                                </a>
                              </div>
                            </span>
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
                              <input class="sf-button-primary" id="" name="login" value="Submit" tabindex="11" type="submit">
                            </div>
                          </div>
                          <div class="col-md-12 col-sm-12">
                            <div class="professional-service">Have an account? 
                              <a href="<?php echo base_url('login');?>" target="_blank" style="color:#3333cc;text-decoration:underline;">Click Here
                              </a> 
                            </div>
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
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" aria-hidden="false">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
                <li style="float: left; list-style: none; position: relative; width: 1360px;" class="bx-clone" aria-hidden="true">
                  <img src="<?php echo base_url();?>images/login_banner.png" style="visibility: visible;">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
      <div class="BN2 hidden">
        <img src="<?php echo base_url();?>images/login_banner.png">
      </div> 
      <div class="BN3 hidden">
        <img src="<?php echo base_url();?>images/login_banner.png">
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
      <div class="row " style="margin-top:50px;margin-bottom:50px;">
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
    </div>
    <?php
      $this->load->view("common/footer");
    ?>
    <script>
      $('#reg_new_pass, #reg_confirm_pass').on('keyup', function () {
        if ($('#reg_new_pass').val() == $('#reg_confirm_pass').val()) {
          $('.bar').html('Password Matched').css('color', 'green');
        } else 
          $('.bar').html('Enter Confirm Password Same as Password').css('color', 'red');
      });
    </script>
  </body>
</html>
