
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
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<!-- Title -->
		<title>Eazyprint | Product</title>
		<?php
		$this->load->view("common/metalinks");
		?>
		</head>
		<style>
      .rounded_div {
        border:1px solid #CCC;
        box-shadow: 0px 0px 3px #bfbfbf;
        border-radius:5px;
      }
  
    
	  .thank_you
	  {
		font-weight:bold;font-size:50px;text-align:center;color:#000;margin-top:40px;
	  }
	  .order_success
	  {
		font-weight:bold;font-size:28px;text-align:center;color:#565a5c
	  }
	  .email_recipt
	  {
		margin-bottom:20px;font-size:16px;text-align:left;width:100%;
	  }
	  .visit
	  {
		margin-bottom:20px;font-size:16px;text-align:right;
	  }
	  .subscription
	  {
		margin-bottom:20px;font-size:16px;text-align:center;
	  }
		</style>
		<body class="app">
		<?php
		$this->load->view("common/header");
		?>
		
		<!--<div style="background:#f5365c;height:80px;">
			<img src="<?php echo base_url();?>images/blank_case.png">
		</div>-->

		<div class="page" style="min-height:600px !important;">
			<div class="page-main">				
				<div class="container">
					<div class="side-app">

						<!--<div class="page-header">
							<h4 class="page-title">Shop</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazyprint</a></li>
								<li class="breadcrumb-item active" aria-current="page">Shop</li>
							</ol>
						</div>-->

	<div class="container " style="margin-top:70px;">
	  
        <div class="row">
		<!--  Tabs -->   
			<div class="col-md-12 rounded_div" style="padding:15px;">	
				<div style="" class="thank_you">Thank You.</div>
				<div style="" class="order_success">Your Order Was Completed Successfully</div>

				<div class="row" style="margin-top:70px;">
					<div class="col-md-2 col-sm-2" style="text-align:right;float:left;">
						<img src="<?php echo base_url()?>images/if_mail_accept_103616.png" style="height:50px;">
					</div>
					<div class="col-md-10 col-sm-10" style="">
						<div style="" class="email_recipt"><i>An email receipt including the details about your order <b>#<?php echo $this->uri->segment(2)?></b> has been sent to the email address <b>sweezit92@gmail.com</b>.<br/>  Please keep it for your records</i></div>
					</div>
				</div>

				<div class="row" style="margin-top:30px;">
					<div class="col-md-10 col-sm-10" style="text-align:right;float:left;">
						<div style="" class="visit"><i>Please visit <a href="<?php echo base_url("my_order");?>" style="color:#000;text-decoration:underline;">My orders page</a> now to download (and again at any time to re-download) the necessary details with regards to the activation of your order  <b>#<?php echo $this->uri->segment(2)?></b>. </i></div>
					</div>
					<div class="col-md-2" style="float:left;">
						<img src="<?php echo base_url()?>images/if_031_Printer_183593.png" style="height:50px;">
					</div>
				</div>
				
				<div class="col-md-12">
					<div style="" class="subscription"><i>Please visit <a href="<?php echo base_url("my_order");?>" style="color:#000;text-decoration:underline;">My Subscription </a> to monitor the progress of the items in your order <b>#<?php echo $this->uri->segment(2)?></b>. </i></div>
				</div>
            </div>
			
			  <!-- End col-md-12-->
		  </div>
        <!-- End row -->
      </div>
							
						
					</div>
				</div>
			</div>
		</div>

<?php
$this->load->view("common/footer");
?>
</body>
</html>