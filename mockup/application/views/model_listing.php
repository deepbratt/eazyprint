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
		<title>Eazyprint | <?php echo $brand_name->raw_brand?></title>
		<style>
		/* ACCORDIONS STARTS*/
		button.accordion {
		  background-color: #fff;
		  cursor: pointer;
		  padding: 10px;
		  width: 100%;
		  border: none;
		  text-align: left;
		  outline: none;
		  font-size: 18px;
		  transition: 0.4s;
		  border-bottom: 1px solid #ccc;
		}

		button.accordion.active, button.accordion:hover {
		  color: #7490BD;
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
		  border-bottom: 4px solid #ccc;
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
		  max-height: 500px;
		}
		/* ACCORDIONS ENDS*/
		.button:focus{
			outline:0px !important;
		}
		.cartstop{
			clear: both;
		}
		.selectgroup-input:checked+.wishlist{
			color: #fff !important;
			background: #fd0303 !important;
		}
		.alert-info{
			/*display:none;*/
		}
		.loader{
			display:none;
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

				<div style="background:#f5365c;height:80px;">
					<!--<img src="<?php echo base_url();?>images/blank_case.png">-->
				</div>
				<div class="container" style="margin-top:40px;">
					<div class="side-app" style="">
						<div class="col-md-12">
							<div class="page-header" style="margin-top:-100px;">
								<ol class="breadcrumb" style="background:#fff;">
									<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
									<li class="breadcrumb-item" aria-current="page">
										 <?php echo $brand_name->raw_brand?>
									</li>
									<!--<li class="breadcrumb-item active" aria-current="page">Moto G5 Plus backcover</li>-->
								</ol>
							</div>
						
						
					<h1>&nbsp;</h1>
					<div class="row">
						<div class="col-md-12" style="margin:0px;padding:0px;">
							<div class="row">
								<?php
									foreach($fetch_brand_name As $each_brand){
								?>
								<div class="col-md-3">
									<button class="accordion" style="border:1px dotted black;font-size:25px;font-family:samarkan1;background:#f5f5f5;text-transform:uppercase;"><?php echo $each_brand->raw_brand;?></button>
									<div class="accordion_panel <?php echo (($raw_id == $each_brand->raw_id)?'show':'')?>" style="border:1px dotted black;margin-top:5px;">
									  <div style="margin:15px;">
									  	<?php
									  		$fetch_models = $this->model_listing_m->fetch_models($each_brand->raw_brand);
									  		foreach($fetch_models AS $each_models){
									  	?>
									  		<a href="javascript:void(0);" style="color:#009fdc;"><?php echo $each_models->raw_name;?></a><br>
									  	<?php
									  		}
									  	?>
									  </div>
									  </div>
									</div>
								<?php
									}	
								?>
							</div>
						</div>
					</div>
					<h1>&nbsp;</h1>
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
	</body>
</html>