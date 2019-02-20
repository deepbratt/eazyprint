<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<!-- Title -->
		<title>Eazyprint | Home</title>
		<?php
			$this->load->view("common/metalinks");
		?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
		<style>
			h2{
			  text-align:center;
			  padding: 20px;
			}
			/* Slider */

			.slick-slide {
				margin: 0px 20px;
			}

			.slick-slide img {
				width: 100%;
			}

			.slick-slider
			{
				position: relative;
				display: block;
				box-sizing: border-box;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
						user-select: none;
				-webkit-touch-callout: none;
				-khtml-user-select: none;
				-ms-touch-action: pan-y;
					touch-action: pan-y;
				-webkit-tap-highlight-color: transparent;
			}

			.slick-list
			{
				position: relative;
				display: block;
				overflow: hidden;
				margin: 0;
				padding: 0;
			}
			.slick-list:focus
			{
				outline: none;
			}
			.slick-list.dragging
			{
				cursor: pointer;
				cursor: hand;
			}

			.slick-slider .slick-track,
			.slick-slider .slick-list
			{
				-webkit-transform: translate3d(0, 0, 0);
				   -moz-transform: translate3d(0, 0, 0);
					-ms-transform: translate3d(0, 0, 0);
					 -o-transform: translate3d(0, 0, 0);
						transform: translate3d(0, 0, 0);
			}

			.slick-track
			{
				position: relative;
				top: 0;
				left: 0;
				display: block;
			}
			.slick-track:before,
			.slick-track:after
			{
				display: table;
				content: '';
			}
			.slick-track:after
			{
				clear: both;
			}
			.slick-loading .slick-track
			{
				visibility: hidden;
			}

			.slick-slide
			{
				display: none;
				float: left;
				height: 100%;
				min-height: 1px;
			}
			[dir='rtl'] .slick-slide
			{
				float: right;
			}
			.slick-slide img
			{
				display: block;
			}
			.slick-slide.slick-loading img
			{
				display: none;
			}
			.slick-slide.dragging img
			{
				pointer-events: none;
			}
			.slick-initialized .slick-slide
			{
				display: block;
			}
			.slick-loading .slick-slide
			{
				visibility: hidden;
			}
			.slick-vertical .slick-slide
			{
				display: block;
				height: auto;
				border: 1px solid transparent;
			}
			.slick-arrow.slick-hidden {
				display: none;
			}
			.img_op{
				opacity:1;
			}
			.img_op:hover{
				opacity:0.6;
			}
			.product_ttl{
				padding:10px;margin-top:-60px;background:url(images/item_name.png);z-index:2;position:absolute;width:100%;
			}
		</style>
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <!--<li data-target="#myCarousel" data-slide-to="2"></li>-->
							</ol>
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img class="first-slide" src="<?php echo base_url();?>images/product_banner1.png" alt="First slide" class="img-responsive">
								<!--<div class="container">
								  <div class="carousel-caption text-left">
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								  </div>
								</div>-->
							  </div>
							  <div class="carousel-item">
								<img class="second-slide" src="<?php echo base_url();?>images/homebanner/slide_mobilecover.png" alt="Second slide" class="img-responsive" >
								<div class="container">
								  <div class="carousel-caption">
									<!--<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
								  </div>
								</div>
							  </div>
							  <!--<div class="carousel-item">
								<img class="third-slide" src="<?php echo base_url();?>images/homebanner/tshirt_slide.png" alt="Third slide" class="img-responsive" >
								<div class="container">
								  <div class="carousel-caption">
									
								  </div>
								</div>
							  </div>-->



							</div>
							<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
					</div>


				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:45px;font-family:samarkan1;"> Wide Range of Categories </h1>
						<h4 style="text-align:center;color:#000;font-family:Arial;font-weight:bold;margin-top:20px;font-size:25px;">Follow the trend or be followed #eazyprint. </h4>
						<p>&nbsp;</p>

						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center ">
									<a href="<?php echo base_url('product');?>" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/mugs_thumb.png" >
									</a>
									<a href="<?php echo base_url('product');?>">
										<h3 class="product_ttl">Mugs & Bottles</h3>
									</a>
								</div>

							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="<?php echo base_url('product');?>" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/mob_case.png" >
									</a>
									<a href="<?php echo base_url('product');?>">
										<h3 class="product_ttl">Mobile Back Covers</h3>
									</a>
								</div>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="<?php echo base_url('product');?>" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/tshirts_thumb.png">
									</a>
									<a href="<?php echo base_url('product');?>">
										<h3 class="product_ttl">Clothing & Fashion</h3>
									</a>
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="<?php echo base_url('product');?>" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/roomtiles_thumb2.png" >
									</a>
									<a href="<?php echo base_url('product');?>">
										<h3 class="product_ttl"> Floor Tiles & Frames </h3>
									</a>
								</div>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="<?php echo base_url('product');?>" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/plates_thmb.png" >
									</a>
									<a href="<?php echo base_url('product');?>">
										<h3 class="product_ttl"> Dinner Plates </h3>
									</a>
								</div>
							</div>

							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card card-primary text-center">
									<a href="<?php echo base_url('product');?>" class="bg-dark">
										<img class="img-responsive img_op" src="<?php echo base_url();?>images/banners/cussions_cases_thumb.png" >
									</a>
									<a href="<?php echo base_url('product');?>">
										<h3 class="product_ttl"> Pillows & Cusions </h3>
									</a>
								</div>
							</div>
						</div>
					</div>
					<p>&nbsp;</p>
					
				</div>
				
				 
				 <div class="container-fluid" style="border-top:3px dotted #CCC;">
					<div class="container">
						<p>&nbsp;</p>
						<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:45px;font-family:samarkan1;"> We're Marketplace For Customised Printing Products</h1>
						<h4 style="text-align:center;color:#000;font-family:Arial;margin-top:20px;font-size:20px;">Offer personalized products, commissions, branded reseller shops with centralized admin</h4>
						<p>&nbsp;</p>
					</div>

					<div class="container" style="text-align:center;padding-bottom:30px;">
						<p style="text-align:center;"><img src="<?php echo base_url();?>images/dark_how.png" style="text-align:center;height:450px;"></p>
					</div>
				</div>


				
				<!-- <div class="container">
					<p>&nbsp;</p>
					<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:45px;font-family:samarkan1;"> Clearance Zone </h1>
					<h4 style="text-align:center;color:#000;font-family:Arial;font-weight:bold;margin-top:20px;font-size:25px;">Starting at &#8377; 199! Till stock last, Hurry!</h4>
					<p style="text-align:center;margin-top:20px;"><a href="#" class="btn btn-primary">Shop Now</a></p>
					<p>&nbsp;</p>
				</div>

				<div class="container">
					<div class="row" >
						<div class="col-lg-6" style="padding:0px;margin:0px;text-align:left;">
							<a href="#"><img class="img-responsive img_op" src="<?php echo base_url();?>images/men.png" style="width:99%;height:99%;"></a>
						</div>
						<div class="col-lg-6" style="padding:0px;margin:0px;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/wooman.png" style="width:99%;height:99%;">
						</div>
					</div>
				</div>
				
				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-4" style="padding:0px;margin:0px;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/Mugs.png" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-8" style="padding:0px;margin:0px;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/phone.png" style="width:99%;height:99%;">
						</div>
					</div>
				</div>

				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/3banner_565x.jpg" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/4banner_565x.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div>

				

				<div class="container" style="padding-top:5px;">
					<div class="row">
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:left;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/homebanner/mug-004.jpg" style="width:99%;height:99%;">
						</div>
						<div class="col-lg-6" style="padding:0px;text-align:center;text-align:right;">
							<img class="img-responsive img_op" src="<?php echo base_url();?>images/bewkoof/mobile-covers-desktop-box-1542286246.jpg" style="width:99%;height:99%;">
						</div>
					</div>
				</div> -->
				
				<p style="border-top:3px dotted #CCC;"></p>

				<div class="container">
					<p>&nbsp;</p>
					<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:45px;font-family:samarkan1;"> Why Eazyprint? </h1>
					<h4 style="text-align:center;color:#000;font-family:Arial;font-weight:bold;margin-top:20px;">Hum online pe bhi aur apke pass wale retail store pe bhi.</h4>
					<p>&nbsp;</p>
				</div>

				<div class="container" style="padding-top:3px;margin-top:40px;">
					<div class="row">
						<div class="col-lg-4" style="text-align:center;">
							<h4>Cash On Delivery</h4>
							<img class="img-responsive" src="<?php echo base_url();?>images/cod_d.png" style="text-align:center;height:150px;padding:20px;">
							<p style="margin-top:10px;color:#000;">Doorstep delivery anywhere in india.</p>
						</div>
						<div class="col-lg-4" style="text-align:center;">
							<h4>Refer and Earn</h4>
							<img class="img-responsive" src="<?php echo base_url();?>images/Refer-and-Earn.png" style="text-align:center;height:150px;padding:20px;">
							<p style="margin-top:10px;color:#000;">Exciting offers on referals.</p>
						</div>
						<div class="col-lg-4" style="text-align:center;">
							<h4>Easy Returns</h4>
							<img class="img-responsive" src="<?php echo base_url();?>images/what-do-we-buy.png" style="text-align:center;height:150px;padding:20px;">
							<p style="margin-top:10px;color:#000;">No question asked returns.</p>
						</div>
					</div>
					<p>&nbsp;</p>
				</div>
				
				<p style="border-top:3px dotted #CCC;"></p>

				<div class="container" style="padding-top:3px;margin-top:40px;">
					<div class="row">
						<div class="col-lg-6" style="text-align:center;">

							<h1 class="page-title" style="color:black;text-align:center;font-weight:bold;font-size:35px;font-family:samarkan1;margin-top:50px;"> Track your Delivery </h1>
							<p style="margin-top:10px;color:#000;font-size:25px;">Track Where is your delivery reached.</p>
							
							<form name="delivery" method="POST" action="">
							<p style="text-align:center;">
								<div class="form-group" style="text-align:center;">
									<input type="email" class="form-control" placeholder="Enter your ORDER ID" style="text-align:center;width:50%;margin-left:150px;">
								</div>
							</p>
							<p>
								<button class="btn btn-lg btn-success" type="submit" style="font-size:15px;"> Track </button>
							</p>
							</form>
						</div>

						<div class="col-lg-6" style="text-align:center;">
							<img class="img-responsive" src="<?php echo base_url();?>images/delivery_nn.png" style="text-align:center;">
						</div>
						
					</div>
					<p>&nbsp;</p>
				</div>

				<?php
					$this->load->view("common/footer");
				?>
				
				<script src="<?php echo base_url();?>js/slick.js"></script>
				<script src="<?php echo base_url();?>js/timeline.min.js"></script>
				<script>
					timeline(document.querySelectorAll('.timeline'), {
						forceVerticalMode: 700,
						mode: 'vertical',
						verticalStartPosition: 'left',
						visibleItems: 4
					});

					$(document).ready(function(){
						$('.customer-logos').slick({
							slidesToShow: 6,
							slidesToScroll: 1,
							autoplay: true,
							autoplaySpeed: 1500,
							arrows: false,
							dots: false,
							pauseOnHover: false,
							responsive: [{
								breakpoint: 768,
								settings: {
									slidesToShow: 4
								}
							}, {
								breakpoint: 520,
								settings: {
									slidesToShow: 3
								}
							}]
						});
					});
				</script>
	</body>
</html>