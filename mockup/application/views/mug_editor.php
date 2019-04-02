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
		<title>Eazyprint | <?php echo ucfirst($fetch_raw_data->raw_title); ?></title>
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
		.colorinput input[type=radio]:checked + span {
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
			border: 1px solid #000;
		}
		.colorinput-color:before{
			background:none !important;
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
					<!--<img src="<?php echo base_url();?>images/case-process-image.png">-->
				</div>
				<div class="container" style="margin-top:40px;">
					<div class="side-app" style="">
						<div class="col-md-12">
							<div class="page-header" style="margin-top:-100px;">
								<ol class="breadcrumb" style="background:#fff;">
									<li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
									<li class="breadcrumb-item" aria-current="page">
									<?php
										$cat_id = $fetch_raw_data->raw_category;
										$fetch_cat_name = $this->mug_editor_m->cat_data($cat_id);
										echo ucfirst($fetch_cat_name->category_name);
									?>
									</li>
									<!--<li class="breadcrumb-item" aria-current="page">
									<?php
										echo ucfirst($fetch_raw_data->raw_brand);
									?>
									</li>-->
									<li class="breadcrumb-item" aria-current="page">
									<?php
										echo ucfirst($fetch_raw_data->raw_title);
									?>
									</li>
									<!--<li class="breadcrumb-item active" aria-current="page">Moto G5 Plus backcover</li>-->
								</ol>
							</div>
						
						<div class="row">
							<div class="col-md-7">
								<div class="product-info carttoscroll">
									 <div class="product-gallery" >
						                <div class="product-gallery-thumbnails" style="padding:16px;">
						                  <ol class="thumbnails-list list-unstyled">
						                    <li style="height:96px;"><img src="<?php echo base_url('admin/uploads/product_images/mobile_case/');?><?php echo $fetch_raw_data->raw_image;?>" alt="" style="height:96px;"></li>
						                  
						                  </ol>
						                </div>
						                <div class="product-gallery-featured">
						                  <img src="<?php echo base_url('admin/uploads/product_images/mug/');?><?php echo $fetch_raw_data->raw_image;?>" alt=""  style="height:500px;">
						                </div>
						             </div>
					            </div>
							</div>

							<div class="col-md-5" style="border:1px dotted #000;margin-top:15px;">
							<!----STARTS-->
								<div class="row">
									<div class="col-md-12">
										<div class="card-body cardbody" >
												<div class="loader" id="loader"><img src="<?php echo base_url()?>/images/0_4Gzjgh9Y7Gu8KEtZ.gif" /></div>
												<div class="msg"></div>
												<h1 style="font-size:30px;font-family:samarkan1;">
													<?php
														echo ucfirst($fetch_raw_data->raw_title);
													?>
												</h1>
												<h1 style="font-size:45px;font-weight:normal"><i class="fas fa-rupee-sign"></i> 
													<?php
														echo ucfirst($fetch_raw_data->raw_retail_price);
													?> /-</h1>
												<div style="font-size:16px;font-weight:bold;margin-bottom:10px;">
													<span style="color:red;text-decoration:line-through;font-weight:normal"><i class="fas fa-rupee-sign"></i> 599</span>
													<span style="color:green;font-weight:normal">40% OFF</span>
												</div>
												<span>Inclusive of all taxes</span>
										</div>
										 <?php $this->uri->segment(2);?>
									<form method="POST" action="<?php echo base_url('Product_details/add_to_cart');?>">
										<!-- SELECT COLOR STARTS -->
										<?php
											if($fetch_raw_data->raw_color_code != ''){
										?>
										<div class="card-body cardbody" style="margin-top:-25px;">
											<div class="form-group m-0" style="padding-top:15px;padding-bottom:15px;">
												<label class="form-label">Select Color</label>
												<div class="row gutters-xs">
													<?php
														$color_code = explode(',',$fetch_raw_data->raw_color_code);
														$color_name = explode(',',$fetch_raw_data->raw_color);
														foreach($color_code AS $key=>$each_color_code){
													?>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="<?php echo $color_name[$key];?>" class="colorinput-input">
															<span class="colorinput-color" style="background-color: <?php echo $each_color_code;?>;color:#fff;"></span>
														</label>
													</div>
													<?php
														}
													?>
												</div>
											</div>
										</div>
										<?php
											}
										?>
										<!-- SELECT COLOR ENDS -->
										<!-- SELECT SIZE STARTS -->
										<?php
											if($fetch_raw_data->raw_size != ''){
										?>
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
														<?php
															$explode_size = explode(',',$fetch_raw_data->raw_size);
															foreach($explode_size As $each_raw_size){
														?>
														<label class="selectgroup-item" >
															<input type="radio" name="size" value="<?php echo $each_raw_size;?>" class="selectgroup-input">
															<span class="selectgroup-button" style="border:1px solid #000;color:#000;"><?php echo $each_raw_size;?></span>
														</label>
														
														<?php
															}
														?>
													</div>
												</div>
											</div>
											<?php
												}
											?>
										<!-- SELECT SIZE ENDS -->
										<!-- UPLOAD FILE STARTS -->
										<div class="card-body" style="margin-top:-40px;">
											<div class="form-group" style="padding-bottom:20px;">
													<div class="row p-2">
														<div class="col-md-12 pull-left">
															<label class="form-label">Upload Photo</label>
															<span onclick="profile_imagezz()" id="hide_span" class="btn btn-lg btn-danger file_upload_icon">
						                                        <i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i>
						                                        <strong style="color:#ffffff;">Choose File...</strong>
					                                      	</span>
						                                      <input type="file" name="design_image" id="pro_image" class="form-control" style="display:none;" onchange="show_image(this);">
						                                      <img src="" onclick="profile_imagezz()" style="height:150px;display:none;" id="p_blah">
														</div>
													</div>
												</div>
											</div>
										<!-- UPLOAD FILE ENDS -->
										<!-- CART STARTS -->
										<div class="card-body">
											<div class="row">
												<div class="col-md-3" style="margin-top:7px;">
													<div class="quantity buttons_added">
														<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
													</div>
												</div>

												<input type="hidden" name="p_id" value="<?php echo $fetch_raw_data->raw_id;?>">
												<input type="hidden" name="price" value="<?php echo $fetch_raw_data->raw_retail_price;?>">
												<!--<input type="hidden" name="design_image" value="<?php echo $fetch_raw_data->raw_design_id;?>">-->
												<input type="hidden" name="product_type" value="readymade">
												<div class="col-md-9">
													<button type="button" class="btn btn-info btn-block" style="font-size:20px;" onclick="add_to_cart()">Add To Bag</button>
												</div>
						
											</div>
										</div>
									</form>
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
						<div class="row cartstop" style="color:black;">
							<div class="col-md-12" style="margin:0px;padding:0px;">
								<button class="accordion" style="border:1px dotted black;font-size:25px;font-family:samarkan1;background:#f5f5f5;">Product Description</button>
								<div class="accordion_panel show" style="border:1px dotted black;margin-top:5px;">
								  <div style="padding:15px;" >
								  	<h5>
								  		<?php
											echo ucfirst($fetch_raw_data->raw_title);
										?>
								  	</h5>
								  	<p>
								  		<?php
											echo ucfirst($fetch_raw_data->raw_desc);
										?>
								  	</p>
								  </div>
								</div>

								<button class="accordion" style="border:1px dotted black;font-size:25px;font-family:samarkan1;background:#f5f5f5;">Product Details</button>
								<div class="accordion_panel " style="border:1px dotted black;margin-top:5px;">
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
															<td><?php 
																if($fetch_raw_data->raw_brand != ''){
																	echo $fetch_raw_data->raw_brand;
																}else{
																	echo "N/A";
																}
															?></td>
														</tr>
														<tr>
															<td><strong>Model</strong></td>
															<td><?php 
																if($fetch_raw_data->raw_model_no != ''){
																	echo $fetch_raw_data->raw_model_no;
																}else{
																	echo "N/A";
																}
															?></td>
														</tr>
														<tr>
															<td><strong>Item Weight</strong></td>
															<td><?php 
																if($fetch_raw_data->raw_weight != ''){
																	echo $fetch_raw_data->raw_weight;
																	echo " ";
																	echo $fetch_raw_data->raw_weight_unit;
																}else{
																	echo "N/A";
																}
															?></td>
														</tr>
														<tr>
													<td><strong>Package Dimensions</strong></td>
													<td><?php 
														if($fetch_raw_data->raw_dimension_length != '' && $fetch_raw_data->raw_dimension_width != '' && $fetch_raw_data->raw_dimension_height != ''){
															echo $fetch_raw_data->raw_dimension_length;
															echo " x ";
															echo $fetch_raw_data->raw_dimension_width;
															echo " x ";
															echo $fetch_raw_data->raw_dimension_height;
															echo " ";
															echo $fetch_raw_data->raw_dimension_unit;
														}else{
															echo "N/A";
														}
													?></td>
													</tr>
														
														<tr>
															<td><strong>Compatible Devices</strong></td>
															<td><?php 
																if($fetch_raw_data->raw_name != ''){
																	echo $fetch_raw_data->raw_name;
																}else{
																	echo "N/A";
																}
															?></td>
														</tr>
														<tr>
															<td><strong>Number of Items</strong></td>
															<td>1</td>
														</tr>
														<tr>
															<td><strong>Material</strong></td>
															<td><?php 
																if($fetch_raw_data->raw_material_type != ''){
																	echo $fetch_raw_data->raw_material_type;
																}else{
																	echo "N/A";
																}
															?></td>
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
															<td><strong>Customer Reviews</strong></td>
															<td>5.0</td>
														</tr>
														<tr>
															<td><strong>Best Sellers Rank</strong></td>
															<td>#9,823 in Electronics (See top 100)<br>#1883 in Electronics > Accessories ><br> Mobile Accessories > Cases & Covers<br>#5535 in Electronics > Mobiles & Tablets</td>
														</tr>
													<tr>
														<td><strong>Date First Available</strong></td>
														<td><?php 
															if($fetch_raw_data->raw_added_date != ''){
																echo date('d F Y',$fetch_raw_data->raw_added_date);
															}else{
																echo "N/A";
															}
														?></td>
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
						<?php 
							if(isset($fetch_raw_data->raw_category) && $fetch_raw_data->raw_category == 2){
						?>
						<div class="col-md-12" style="margin:0px;padding:0px;">
							<div class="col-md-6" style="float:left;margin:0px;padding:0px;">
								<h3 style="text-align:center;margin-bottom:10px;color:#000;">MUGS PRICING FOR BULK</h3>
								<p>&nbsp;</p>
								<table class="table table-bordered table-condensed">
									<thead>
										<tr>
											<th style="color:#000;">Qty</th>
											<th style="color:#000;">White Mug<br>Price/Piece</th>
											<th style="color:#000;">Color Mug<br>Price/Piece</th>
											<th style="color:#000;">Magic Mug<br>Price/Piece</th>
										</tr>
									</thead>
									<tbody>
											<tr>
												<td style="color:#000;">Upto 4</td>
												<td>Rs. 249</td>
												<td>Rs. 329</td>
												<td>Rs. 449</td>
											</tr>
											<tr>
												<td style="color:#000;">5 to 9</td>
												<td>Rs. 229</td>
												<td>Rs. 299</td>
												<td>Rs. 429</td>
											</tr>
											<tr>
												<td style="color:#000;">10 to 29</td>
												<td>Rs. 199</td>
												<td>Rs. 279</td>
												<td>Rs. 399</td>
											</tr>
											<tr>
												<td style="color:#000;">30 to 49</td>
												<td>Rs. 189</td>
												<td>Rs. 249</td>
												<td>Rs. 379</td>
											</tr>
											<tr>
												<td style="color:#000;">50+</td>
												<td>Rs. 179</td>
												<td>Rs. 229</td>
												<td>Rs. 349</td>
											</tr>
									</tbody>
								</table>
								<p style="text-align:center;color:#000;">Contact us for bulk orders <a href="<?php echo base_url();?>">Click here</a></p>
							</div>
							<div class="col-md-6" style="float:left;margin:0px;padding:0px;text-align:center;">
								<h3 style="text-align:center;margin-bottom:10px;color:#000;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MUGS SPECIFICATION</h3>
								<p>&nbsp;</p>
								<img src="<?php echo base_url();?>/images/mug-specs.png" style="text-align:center;">
							</div>
							
							
							<div class="clearfix"></div>
						</div>

						<hr />

						<div class="col-md-12" style="margin:0px;padding:0px;">
							<div class="col-md-4" style="float:left;margin:0px;padding:0px;">
								<div class="col-md-2" style="float:left;">
									<img src="<?php echo base_url();?>images/mugs-icon-01.png" alt="Mugs Printing Online Fast Delivery" title="Mugs Printing Online Fast Delivery" style="margin-top:10px;">
								</div>
								<div class="col-md-10" style="float:left;padding:10px;">
									<h4>100% Satisfaction Guaranteed</h4>
									<p>We continuously strive hard to achieve your satisfaction as Our Top Priority.</p>
								</div>
							</div>
							<div class="col-md-4" style="float:left;margin:0px;padding:0px;">
								<div class="col-md-2" style="float:left;">
									<img src="<?php echo base_url();?>images/mugs-icon-02.png" alt="Mugs Printing Online Fast Delivery" title="Mugs Printing Online Fast Delivery" style="margin-top:10px;">
								</div>

								<div class="col-md-10" style="float:left;padding:10px;">
									<h4>Superior Print Quality</h4>
									<p>High quality resolution imaging, quality mugs with multi-color printing..</p>
								</div>
							</div>
							<div class="col-md-4" style="float:left;margin:0px;padding:0px;">
								<div class="col-md-2" style="float:left;">
									<img src="<?php echo base_url();?>images/mugs-icon-03.png" alt="Mugs Printing Online Fast Delivery" title="Mugs Printing Online Fast Delivery" style="margin-top:10px;">
								</div>

								<div class="col-md-10" style="float:left;padding:10px;">
									<h4>Fast Turnaround Times</h4>
									<p>Order printing, packing, and handing over to courier in 2-3 business days.</p>
								</div>
							</div>
					

							<div class="clearfix"></div>
						</div>

						<hr />
						<?php
							}
						?>
						<p>&nbsp;</p>
						<?php
							if(!empty($fetch_similar_pro_data)){
						?>
						<h1 class="page-title" style="color:black;text-align:left;font-size:45px;font-family:samarkan1;"> Similar Products </h1>
						<p>&nbsp;</p>
						<!-- MORE PRODUCT SLIDER STARTS-->
						<div class="row" style="margin-bottom:50px;">
						  <div class="col-md-12">
						  		<!-- LINK: https://bootsnipp.com/snippets/X2ym0-->
						      <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
						        <div class="carousel-inner row w-100 mx-auto" role="listbox">
						        	<?php
						        		foreach($fetch_similar_pro_data AS $key=>$each_similar_prod){
						        	?>
						            <div class="carousel-item col-md-3 <?php echo(($key==0)?'active':'');?>"  >
						               <div class="panel panel-default">
						                  <div class="panel-thumbnail" style="border-radius:5px 5px 0px 0px !important;border:1px solid #CCC !important;height:333px;width:100%;">
						                    <a href="<?php echo base_url("product_details");?>/<?php echo $each_similar_prod->product_id;?>">
					                    	<img class="img-responsive" alt="" src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $each_similar_prod->product_image_path;?>" data-holder-rendered="true" style="text-align:center;padding:10px;object-fit: contain;height:250px;">
					                    	 <div class="card item-card" style="margin-top:-22px;">
												<div class="cardtitle" style="text-align:center;">
													<a href="<?php echo base_url("product_details");?>/<?php echo $each_similar_prod->product_id;?>" style="text-align:center;font-size:16px;">
														<?php
															$pro_name = $each_similar_prod->product_name;
															$substr_pro_name = substr($pro_name,0,20);
															echo $substr_pro_name;
															echo "...";
														?>											
														</a>
												</div>
												<p style="font-family:arial;text-align:center;"> 
													<span style="color:red;font-size:18px;" ><strike><i class="fas fa-rupee-sign"></i> 999</strike> </span> 
													<span style="color:#000;font-weight:bold;font-size:18px;padding-left:10px;"> <i class="fas fa-rupee-sign"></i> <?php echo $each_similar_prod->product_retail_price;?> /- </span> 
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
						<?php
							}
						?>
					</div>
				</div>
			</div>

<?php
$this->load->view("common/footer");
?>
	<!-- cart ajax starts -->
	<script type="text/javascript">

// Ajax post

	function add_to_cart(){
		$(".loader").show();
		var price = $("input[name=price]").val();
		var size = $("input[name=size]").val();
		if(size == null){var yosize = 0;}else{var yosize = $("input[name=size]").val();}

		var color = $("input[name=color]").val();
		if(color == null){var yocolor = 0;}else{var yocolor = $("input[name=color]").val();}

		var product_id = $("input[name=p_id]").val();
		var design_image = $("input[name=design_image]").val();
		var product_type = $("input[name=product_type]").val();
		var qty = $("input[name=quantity]").val();

		$.ajax({
			type: "POST",
			url: "<?php echo base_url('product_details/add_to_cart'); ?>",
			dataType: 'text',
			data: {price: price, size: yosize,color: color,p_id: product_id,design_image: design_image,product_type: product_type,quantity:qty},
			success: function(res) {
				if (res)
				{
					$(".loader").hide();
					$(".msg").html(res);
				}
			}
		});
	}

	</script>
	<!-- cart ajax ends -->
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
			    /* Image Scroll */
			    $(window).scroll(function () { 
				 if($(window).scrollTop() > 670) {
					$('.carttoscroll').css('position','fixed');
					$('.carttoscroll').css('top','48px'); 
					$('.carttoscroll').css('width','50%'); 
				 }

				 else if ($(window).scrollTop() <= 600) {
					$('.carttoscroll').css('position','');
					$('.carttoscroll').css('top','');
					$('.carttoscroll').css('width','100%'); 
				 }  
					if ($('.carttoscroll').offset().top + $(".carttoscroll").height() > $(".cartstop").offset().top) {
						$('.carttoscroll').css('top',-($(".carttoscroll").offset().top + $(".carttoscroll").height() - $(".cartstop").offset().top));
					}
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
		<!-- IMAGE PREVIEW STARTS-->
			<script>
			  function profile_imagezz(){
			      $("input[id='pro_image']").click();
			    }
			  function show_image(input) {
			    if (input.files && input.files[0]) {
			      var reader = new FileReader();

			      reader.onload = function (e) {
			        $('#p_blah').attr('src', e.target.result);
			      }

			      reader.readAsDataURL(input.files[0]);
			      $('#p_blah').show();
			      $('#hide_span').hide();
			    }
			  }
			</script>
		<!-- IMAGE PREVIEW Ends-->
	</body>
</html>