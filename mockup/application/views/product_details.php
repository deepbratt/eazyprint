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


		<!-- Title -->
		<title>Eazyprint | Product Details</title>
		<style>
			.card-body{
				color:black !important;
			}
			.carousel-control-next-icon, .carousel-control-prev-icon{
				width:30px !important;
				height:35px !important;
			}
			.card-body+.card-body, .product-gallery{
				border:none !important;
			}
			.table-vcenter td, .table-vcenter th{
				border:none !important;
			}
			/* IMAGES SLIDER IN PRODUCT DETAILS*/
		/*TOP SLIDER STARTS*/
			.product-info .product-gallery {
			  display: flex;
			  flex-direction: row;
			  border-bottom: 1px solid rgba(0,0,0,.125);
			}

			.product-gallery-featured {
			  display: flex;
			  width: 100%;
			  flex-direction: row;
			  justify-content: center;
			  align-items: flex-start;
			  padding: 15px 0;
			  cursor: zoom-in;
			}

			.product-gallery-thumbnails .thumbnails-list li {
			  margin-bottom: 5px;
			  cursor: pointer;
			  position: relative;
			  width: 70px;
			  height: 70px;
			}

			.thumbnails-list li img {
			  display: block;
			  width: 100%;
			}

			.product-gallery-thumbnails .thumbnails-list li:hover::before {
			  content: "";
			  width: 3px;
			  height: 100%;
			  background: #007bff;
			  position: absolute;
			  top: 0;
			  left: 0;
			}
		/*TOP SLIDER ENDS*/
			@media (min-width: 768px) {

		    /* show 3 items */
		    .carousel-inner .active,
		    .carousel-inner .active + .carousel-item,
		    .carousel-inner .active + .carousel-item + .carousel-item,
		    .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
		        display: block;
		    }
		    
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
		    .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
		        transition: none;
		    }
		    
		    .carousel-inner .carousel-item-next,
		    .carousel-inner .carousel-item-prev {
		      position: relative;
		      transform: translate3d(0, 0, 0);
		    }
		    
		    .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
		        position: absolute;
		        top: 0;
		        right: -25%;
		        z-index: -1;
		        display: block;
		        visibility: visible;
		    }
		    
		    /* left or forward direction */
		    .active.carousel-item-left + .carousel-item-next.carousel-item-left,
		    .carousel-item-next.carousel-item-left + .carousel-item,
		    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
		    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
		    .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
		        position: relative;
		        transform: translate3d(-100%, 0, 0);
		        visibility: visible;
		    }
		    
		    /* farthest right hidden item must be abso position for animations */
		    .carousel-inner .carousel-item-prev.carousel-item-right {
		        position: absolute;
		        top: 0;
		        left: 0;
		        z-index: -1;
		        display: block;
		        visibility: visible;
		    }
		    
		    /* right or prev direction */
		    .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
		    .carousel-item-prev.carousel-item-right + .carousel-item,
		    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
		    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
		    .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
		        position: relative;
		        transform: translate3d(100%, 0, 0);
		        visibility: visible;
		        display: block;
		        visibility: visible;
		    }

		}

		 /* Bootstrap Lightbox using Modal */

		#profile-grid { overflow: auto; white-space: normal; } 
		#profile-grid .profile { padding-bottom: 40px; }
		#profile-grid .panel { padding: 0 }
		#profile-grid .panel-body { padding: 15px }
		#profile-grid .profile-name { font-weight: bold; }
		#profile-grid .thumbnail {margin-bottom:6px;}
		#profile-grid .panel-thumbnail { overflow: hidden; }
		#profile-grid .img-rounded { border-radius: 4px 4px 0 0;}
	/* IMAGE SLIDER FOR PRODUCT DETAILS PAGE*/
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
		</style>

<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>

				<div class="container" style="margin-top:40px;">
					<div class="side-app">
						<div class="col-md-12">
							<div class="page-header">

								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item" aria-current="page">Clothing & fashion</li>
									<li class="breadcrumb-item" aria-current="page">Tshirts</li>
									<li class="breadcrumb-item active" aria-current="page">Moto G5 Plus backcover</li>
								</ol>
							</div>
						
						<div class="row">
							
							<div class="col-md-7">
								<div class="product-info">
									 <div class="product-gallery">
						                <div class="product-gallery-thumbnails" style="padding:16px;">
						                  <ol class="thumbnails-list list-unstyled">
						                    <li style="height:96px;"><img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="" style="height:96px;"></li>
						                    <li style="height:96px;"><img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="" style="height:96px;"></li>
						                    <li style="height:96px;"><img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="" style="height:96px;"></li>
						                    <li style="height:96px;"><img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="" style="height:96px;"></li>
						                    <li style="height:96px;"><img src="http://localhost/pbeazyprint/mockup/images/homebanner/promo-5_765x.jpg" alt="" style="height:96px;"></li>
						                  </ol>
						                </div>
						                <div class="product-gallery-featured" style="padding-left:">
						                  <img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt=""  style="height:700px;">
						                </div>
						             </div>
					            </div>
							</div>

							<div class="col-md-5">
							<!----STARTS-->
								<div class="row">
									<div class="col-md-12">

										<div class="card-body cardbody" style="border-bottom:1px dotted #000;">
												<h1 style="font-size:45px;font-family:samarkan1;">Dont worry be happy</h1>
											
												<h1 style="font-size:45px;font-weight:normal"><i class="fas fa-rupee-sign"></i> 349 /-</h1>
													<div style="font-size:16px;font-weight:bold;">
														<span style="color:red;text-decoration:line-through;font-weight:normal"><i class="fas fa-rupee-sign"></i> 599</span>
														<span style="color:green;font-weight:normal">50% OFF</span>
													</div>
												<span class="text-muted">Inclusive of all taxes</span>
											
											<!--<div class="cardprice pt-5" style="font-size:12px;">
												<span><i class="fas fa-rupee-sign" style="border-radius:20%;background-color:#eaeaea;padding:10px;"></i> Use Eazyprint coins on this product</span><br>
												<span class="pl-6"><a href="javascript:void(0);" target="_blank">Know More</a></span>
											</div>-->
										</div>
										<!-- SELECT COLOR STARTS -->
										<div class="card-body">
											<div class="form-group m-0">
												<label class="form-label">Select Color</label>
												<div class="row gutters-xs">
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="azure" class="colorinput-input" checked="">
															<span class="colorinput-color bg-azure"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="indigo" class="colorinput-input">
															<span class="colorinput-color bg-indigo"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="purple" class="colorinput-input">
															<span class="colorinput-color bg-purple"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="pink" class="colorinput-input">
															<span class="colorinput-color bg-pink"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="red" class="colorinput-input">
															<span class="colorinput-color bg-red"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="orange" class="colorinput-input">
															<span class="colorinput-color bg-orange"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="yellow" class="colorinput-input">
															<span class="colorinput-color bg-yellow"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="lime" class="colorinput-input">
															<span class="colorinput-color bg-lime"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="green" class="colorinput-input">
															<span class="colorinput-color bg-green"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="checkbox" value="teal" class="colorinput-input">
															<span class="colorinput-color bg-teal"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
										<!-- SELECT COLOR ENDS -->
										<!-- SELECT SIZE STARTS -->
										<div class="card-body">
											<div class="form-group ">
													<div class="row p-2">
														<div class="col-md-3 pull-left">
															<label class="form-label">Select Size</label>
														</div>
														<div class="col-md-3 text-center" style="border:1px solid red;padding:1px;color:red;font-weight:bold;">
															<label class="form-label">Almost Gone</label>
														</div>
														<div class="col-md-3"></div>
														<div class="col-md-3 pull-right">
															<a href="JavaScript:void(0);" class="form-label">Size Guide</a>
														</div>
													</div>
													
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item" >
															<input type="radio" name="value" value="HTML" class="selectgroup-input" checked="" >
															<span class="selectgroup-button" style="border:1px solid #000;color:#000;">S</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="value" value="CSS" class="selectgroup-input">
															<span class="selectgroup-button" style="border:1px solid #000;color:#000;">M</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="value" value="PHP" class="selectgroup-input">
															<span class="selectgroup-button" style="border:1px solid #000;color:#000;">L</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="value" value="JavaScript" class="selectgroup-input">
															<span class="selectgroup-button" style="border:1px solid #000;color:#000;text-decoration: line-through;">XL</span>
														</label>

													</div>
												</div>
										</div>
										<!-- SELECT SIZE ENDS -->
										<!-- CART STARTS -->
										<div class="card-body">
											<div class="row">
												<div class="col-md-2">
													<label class="selectgroup-item">
														<input type="checkbox" name="value" value="Like" class="selectgroup-input">
														<span class="selectgroup-button" style="color:#ccc"><i class="far fa-heart" style="font-size:35px;"></i></span>
													</label>
												</div>
												<div class="col-md-10">
													<button type="button" class="btn btn-info btn-block" style="font-size:20px;">Add To Bag</button>
												</div>

											</div>
										</div>
										<!-- CART ENDS -->
										<!-- COD Starts-->
										<div class="card-body">
											<div class="cardprice" style="font-size:12px;">
												<span>Check delivery date / COD availability</span><br>
												<span class="pl-6">
													<div class="row">
														<div class="col-md-8">
															<input type="text" class="form-control" placeholder="Enter Pincode">
														</div>
														<div class="col-md-4">
															<button class="btn btn-small btn-white">CHECK</button>
														</div>
													</div>
												</span>
											</div>
										</div>
										<!-- COD ENDS-->
									</div>
								</div>


								<!--ENDS-->
							</div>
						</div>
						<h1>&nbsp;</h1>
						<div class="row" style="color:black;">
							
							<div class="col-md-12">
								<button class="accordion" style="border:1px dotted black;font-size:25px;font-family:samarkan1;background:#f5f5f5;">Product Description</button>
								<div class="accordion_panel show" style="border:1px dotted black;margin-top:5px;">
								  <div style="padding:15px;" >
								  	<h5>Moto G5 Plus backcover</h5>
								  	<p>This Back Cover Is A Soft Silicon Case.It Is Transparent In Colour. Light Weight And Ultrathin Thickness And Is Easy To Apply.</p>
								  </div>
								</div>

								<button class="accordion" style="border:1px dotted black;font-size:25px;font-family:samarkan1;background:#f5f5f5;">Product Details</button>
								<div class="accordion_panel" style="border:1px dotted black;margin-top:5px;">
									<div class="row">
										<div class="col-md-6">
											<div class="p-2">
												<h3>Technical Details</h3>
											</div>
											<div class="table-responsive" style="height:460px;">
												<table class="table card-table table-vcenter text-nowrap">
													<tbody>
														<tr>
															<td><strong>Brand</strong></td>
															<td>LOFAD CASE</td>
														</tr>
														<tr>
															<td><strong>Model</strong></td>
															<td>MOTOROLA MOTO G5S PLUS</td>
														</tr>
														<tr>
															<td><strong>Item Weight</strong></td>
															<td>90.7 g</td>
														</tr>
														<tr>
															<td><strong>Package Dimensions</strong></td>
															<td>18.5 x 10.8 x 1.6 cm</td>
														</tr>
														<tr>
															<td><strong>Item model number</strong></td>
															<td>MOTOROLA MOTO G5S PLUS</td>
														</tr>
														<tr>
															<td><strong>Compatible Devices</strong></td>
															<td>MOTOROLA MOTO G5S PLUS</td>
														</tr>
														<tr>
															<td><strong>Number Of Items</strong></td>
															<td>1</td>
														</tr>
														<tr>
															<td><strong>Material</strong></td>
															<td>Silicone</td>
														</tr>
														<tr>
															<td><strong>Device Type</strong></td>
															<td>Back Cover</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- table-responsive -->
									</div>
									<div class="col-md-6">
											<div class="p-2">
												<h3>Additional Information</h3>
											</div>
											<div class="table-responsive" style="height:260px;">
												<table class="table card-table table-vcenter text-nowrap">
													<tbody>
														<tr>
															<td><strong>EZIN</strong></td>
															<td>B0751JLVM7</td>
														</tr>
														<tr>
															<td><strong>Customer Reviews</strong></td>
															<td>5.0</td>
														</tr>
														<tr>
															<td><strong>Best Sellers Rank</strong></td>
															<td>#9,823 in Electronics (See top 100)<br>#1883 in Electronics > Accessories ><br> Mobile Accessories > Cases & Covers<br>#5535 in Electronics > Mobiles & Tablets</td>
														</tr>
														<tr>
															<td><strong>Date First Available</strong></td>
															<td>22 August 2017</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!-- table-responsive -->
											<div class="p-2" style="margin-left:15px;">
												<h4>Warranty & Support</h4>
												<span>Warranty Details: no warranty</span>
											</div>
											<div class="p-2" style="margin-left:15px;">
												<h4>Feedback</h4>
												<span>Would you like to tell us about a lower price?</span>
											</div>
										
									</div>
								  </div>
								</div>
								
							</div>
						</div>
						<h1>&nbsp;</h1>


						<p>&nbsp;</p>
						<h1 class="page-title" style="color:black;text-align:left;font-size:45px;font-family:samarkan1;"> Similar Products </h1>
						<p>&nbsp;</p>


						<!-- MORE PRODUCT SLIDER STARTS-->
						<div class="row">
						  <div class="col-md-12">
						  		<!-- LINK: https://bootsnipp.com/snippets/X2ym0-->
						      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
						        <div class="carousel-inner row w-100 mx-auto" role="listbox">

						        	<div class="carousel-item col-md-3 active">
						               <div class="panel panel-default">
						                  <div class="panel-thumbnail">
						                    <a href="#" title="image 1" class="thumb">
						                      <img class="img-fluid mx-auto d-block" src="http://localhost/pbeazyprint/mockup/images/homebanner/promo-5_765x.jpg" alt="slide 1" data-holder-rendered="true" style="height:360px;border-radius:5px 5px 0px 0px !important;border:1px solid #CCC !important;">

						                      <div class="card item-card">
												<div class="cardtitle" style="text-align:center;padding-top:15px;">
													<a href="<?php echo base_url("product_details");?>" style="text-align:center;font-size:16px;">Moto G5 Plus backcover</a>
												</div>
												<p style="font-family:arial;text-align:center;"> 
													<span style="color:red;font-size:18px;" > &#8377; <strike>999</strike> </span> 
													<span style="color:#000;font-weight:bold;font-size:18px;padding-left:10px;">&#8377; 499 /- </span> 
												</p>
											
												<div class="border-top text-center" style="padding:7px;">
													<div>
														<a href="#" class="btn btn-danger btn-xs tip" title="Favorite">
															<i class="fas fa-heart"></i>
														</a>
														<a href="#" class="btn btn-success btn-xs tip" title="Buy">
															<i class="fas fa-shopping-cart"></i>
														</a>
													</div>
												</div>
											  </div>

						                    </a>
						                  </div>
						                </div>
						            </div>
						        	<?php
						        		for($i=0;$i<5;$i++){
						        	?>
						            <div class="carousel-item col-md-3 ">
						               <div class="panel panel-default">
						                  <div class="panel-thumbnail">
						                    <a href="#" title="image 1" class="thumb">
						                      <img class="img-fluid mx-auto d-block" src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="slide 1" data-holder-rendered="true" style="border-radius:5px 5px 0px 0px !important;border:1px solid #CCC !important;height:360px;">

						                      <div class="card item-card">
												<div class="cardtitle" style="text-align:center;padding-top:15px;">
													<a href="<?php echo base_url("product_details");?>" style="text-align:center;font-size:16px;">Moto G5 Plus backcover</a>
												</div>
												<p style="font-family:arial;text-align:center;"> 
													<span style="color:red;font-size:18px;" > &#8377; <strike>999</strike> </span> 
													<span style="color:#000;font-weight:bold;font-size:18px;padding-left:10px;">&#8377; 499 /- </span> 
												</p>
											
												<div class="border-top text-center" style="padding:7px;">
													<div>
														<a href="#" class="btn btn-danger btn-xs tip" title="Favorite">
															<i class="fas fa-heart"></i>
														</a>
														<a href="#" class="btn btn-success btn-xs tip" title="Buy">
															<i class="fas fa-shopping-cart"></i>
														</a>
													</div>
												</div>
											  </div>

						                    </a>
						                  </div>
						                </div>
						            </div>
						            
						           <?php
										}
						           ?>
						        </div>
						        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
						            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						            <span class="sr-only">Previous</span>
						        </a>
						        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
						            <span class="carousel-control-next-icon" aria-hidden="true"></span>
						            <span class="sr-only">Next</span>
						        </a>
						    </div>

						    </div>
						</div>
						<!-- MORE PRODUCT SLIDER ENDS-->
					</div>
				</div>
			</div>

<?php
$this->load->view("common/footer");
?>
	<!-- IMAGE SLIDER PRODUCT DETAILS STARTS-->
		<script>
			// select all thumbnails
			const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
			// select featured
			const galleryFeatured = document.querySelector(".product-gallery-featured img");

			// loop all items
			galleryThumbnail.forEach((item) => {
			  item.addEventListener("mouseover", function () {
			    let image = item.children[0].src;
			    galleryFeatured.src = image;
			  });
			});

			// show popover
			$(".main-questions").popover('show');
		</script>

		<script>
			$('#carouselExample').on('slide.bs.carousel', function (e) {

			  
			    var $e = $(e.relatedTarget);
			    var idx = $e.index();
			    var itemsPerSlide = 4;
			    var totalItems = $('.carousel-item').length;
			    
			    if (idx >= totalItems-(itemsPerSlide-1)) {
			        var it = itemsPerSlide - (totalItems - idx);
			        for (var i=0; i<it; i++) {
			            // append slides to end
			            if (e.direction=="left") {
			                $('.carousel-item').eq(i).appendTo('.carousel-inner');
			            }
			            else {
			                $('.carousel-item').eq(0).appendTo('.carousel-inner');
			            }
			        }
			    }
			});


			  $('#carouselExample').carousel({ 
			                interval: 2000
			        });


			  $(document).ready(function() {
			/* show lightbox when clicking a thumbnail */
			    $('a.thumb').click(function(event){
			      event.preventDefault();
			      var content = $('.modal-body');
			      content.empty();
			        var title = $(this).attr("title");
			        $('.modal-title').html(title);        
			        content.html($(this).html());
			        $(".modal-profile").modal({show:true});
			    });

			  });
		</script>
		<!-- IMAGE SLIDER PRODUCT DETAILS ENDS-->
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