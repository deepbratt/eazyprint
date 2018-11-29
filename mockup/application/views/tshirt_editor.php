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
	/* IMAGE DRAG AND RESIZE WITH COLOR CHANGE STARTS */
		#draggable_image{
		    margin: 0px;
			resize: both;
			position: absolute;
			display: block;
			height: 30%;
			width: 30%
		}
		.ui-wrapper{
			top:220px !important;
			left:150px !important;
		}
		.bg-black{
			background-color: #000000;
		}
		.bg-white{
			background-color: #ffffff;
		}
		.bg-army_green{
			background-color: #4b5320;
		}
		.bg-bold_red{
			background-color: #ba3f38;
		}
		.bg-mustard_yellow{
			background-color: #ffdb58;
		}
		.bg-ocean_blue{
			background-color: #0077be;
		}
		/* IMAGE DRAG AND RESIZE WITH COLOR CHANGE ENDS */
		</style>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
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
									<li class="breadcrumb-item active" aria-current="page">Editor</li>
								</ol>
							</div>
						<div class="row">
							<div class="col-md-7">
								
								<div class="row" style="height:717px;">
									<div class="col-md-4" style="border:1px solid black;">
										<div class="form-group p-2">
											<h4>UPLOAD YOUR IMAGE</h4>
										</div>
										<div class="form-group p-2">
											<input type="file"  onchange="readURL(this);"">
										</div>
									</div>
									<div class="col-md-8" style="border:1px solid red; overflow:hidden;">
										<div style="background-image: url(<?php echo base_url();?>images/editor/t-shirt/black/black_blank.png); height:70%;background-size: cover;background-repeat: no-repeat;padding:5px;margin-top:100px;" id="background_image">

											<div id="draggable_image" style="display:inline-block;">
												<img src="<?php echo base_url();?>images/5-2-attitude-quotes-png.png" id="image_resize">
											</div>

										</div>
									</div>
								</div>

							</div>

							<div class="col-md-5" style="border:1px dotted #000;">
							<!----STARTS-->
								<div class="row">
									<div class="col-md-12">
										<div class="card-body cardbody" >
												<h1 style="font-size:30px;font-family:samarkan1;">Dont worry be happy</h1>
												<h1 style="font-size:45px;font-weight:normal"><i class="fas fa-rupee-sign"></i> 349 /-</h1>
												<div style="font-size:16px;font-weight:bold;margin-bottom:10px;">
													<span style="color:red;text-decoration:line-through;font-weight:normal"><i class="fas fa-rupee-sign"></i> 599</span>
													<span style="color:green;font-weight:normal">40% OFF</span>
												</div>
												<span>Inclusive of all taxes</span>
										</div>
										<!-- SELECT COLOR STARTS -->
										<div class="card-body cardbody" style="margin-top:-25px;">
											<div class="form-group m-0" style="border-bottom:1px dotted #000;border-top:1px dotted #000;padding-top:15px;padding-bottom:15px;">
												<label class="form-label">Select Color</label>
													<div class="row gutters-xs">
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="radio" value="black" class="colorinput-input" checked="" id="make_it_black">
																	<span class="colorinput-color bg-black"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="radio" value="white" class="colorinput-input" id="make_it_white">
																	<span class="colorinput-color bg-white"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="radio" value="army_green" class="colorinput-input" id="make_it_army_green">
																	<span class="colorinput-color bg-army_green"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="radio" value="bold_red" class="colorinput-input" id="make_it_bold_red">
																	<span class="colorinput-color bg-bold_red"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="radio" value="mustard_yellow" class="colorinput-input" id="make_it_mustard_yellow">
																	<span class="colorinput-color bg-mustard_yellow"></span>
																</label>
															</div>
															<div class="col-auto">
																<label class="colorinput">
																	<input name="color" type="radio" value="ocean_blue" class="colorinput-input" id="make_it_ocean_blue">
																	<span class="colorinput-color bg-ocean_blue"></span>
																</label>
															</div>
														</div>
													</div>
												</div>
										<!-- SELECT COLOR ENDS -->
										<!-- SELECT SIZE STARTS -->
										<div class="card-body" style="margin-top:-40px;">
											<div class="form-group" style="border-bottom:1px dotted #000;padding-bottom:20px;">
													<div class="row p-2">
														<div class="col-md-3 pull-left">
															<label class="form-label" style="text-align:left;margin-left:-8px;">Select Size</label>
														</div>
														<div class="col-md-3"></div>
														<div class="col-md-3"></div>
														<div class="col-md-3 pull-right">
															<a href="JavaScript:void(0);" class="form-label" style="text-align:right;">Size Guide</a>
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
							
							<div class="col-md-12" style="margin:0px;padding:0px;">
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
						<div class="row" >
						  <div class="col-md-12" style="margin:0px;padding:0px;">
						  		<!-- LINK: https://bootsnipp.com/snippets/X2ym0-->
						      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000" style="margin:0px;padding:0px;">
						        <div class="carousel-inner row w-100 mx-auto" role="listbox">
						        	<?php
						        		for($i=0;$i<5;$i++){
						        	?>
						            <div class="carousel-item col-md-3 <?php echo(($i==0)?'active':'');?>"  >
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

		<!-- IMAGE RESIZE AND COLOR CHANGE STARTS -->
			<script type="text/javascript">
				function readURL(input) {
					
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function (e) {
							$('#image_resize').attr('src', e.target.result);
						}

						reader.readAsDataURL(input.files[0]);
						$('#image_resize').show();
					}
				}
			</script>
			<script type="text/javascript">
				$(window).load(function(){
					$('#draggable_image').draggable();
					$('#image_resize').resizable();
				});

			</script>
			<script>
				document.getElementById('make_it_black').onclick = function(){
					 if( $(this).is(':checked') ){
						 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/black/black_blank.png)';
					 }
				};

				document.getElementById('make_it_white').onclick = function(){
					 if( $(this).is(':checked') ){
						 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/white/white_blank.png)';
					 }
				};

				document.getElementById('make_it_army_green').onclick = function(){
					 if( $(this).is(':checked') ){
						 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/army_green/army_green_blank.png)';
					 }
				};

				document.getElementById('make_it_bold_red').onclick = function(){
					 if( $(this).is(':checked') ){
						 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/bold_red/bold_red_blank.png)';
					 }
				};

				document.getElementById('make_it_mustard_yellow').onclick = function(){
					 if( $(this).is(':checked') ){
						 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/mustard_yellow/mustard_yellow_blank.png)';
					 }
				};

				document.getElementById('make_it_ocean_blue').onclick = function(){
					 if( $(this).is(':checked') ){
						 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/ocean_blue/ocean_blue_blank.png)';
					 }
				};
			</script>
		<!-- IMAGE RESIZE AND COLOR CHANGE ENDS -->

	</body>
</html>