
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
		.bottom-pagination{
			position: absolute;
			bottom: 0;
			width: 100%;
		}
		</style>
		<body class="app">
		<?php
		$this->load->view("common/header");
		?>
		
		<!--<div style="background:#f5365c;height:80px;">
			<img src="<?php echo base_url();?>images/blank_case.png">
		</div>-->

		<div class="page">
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

						<div class="row row-cards" style="margin-top:50px;">
						<?php
							$this->load->view("common/sidebar");
						?>
							<div class="col-lg-9">
								<!--<div class="input-group mb-5">
									<input type="text" class="form-control br-tl-3 br-bl-3" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3 br-br-3">
											<i class="fas fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>-->
								<div class="row">
								<?php
								if(!empty($products)){
								foreach($products As $get_product){
									$img_path = "admin/uploads/product_images/";
									/*$category_id = $get_product->product_category_id;
									$category = $this->product_m->fetch_name_category($category_id);
									if($category = "tshirts"){
										$img_path = "admin/uploads/product_images/";
									}else if($category = "mugs"){
										$img_path = "admin/uploads/product_images/";
									}else if($category = "mobile covers"){
										$img_path = "admin/uploads/product_images/";
									}*/
								?>
									<div class="col-lg-4" style="border-radius:5px !important;text-align:center;">
										<div class="card item-card" style="border-radius:5px 5px 0px 0px !important;border:1px 1px 0px 1px solid #CCC !important;height:300px;">
											<a href="<?php echo base_url("product_details");?>/<?php echo $get_product->product_id;?>">
												<?php
													$product_id = $get_product->product_id;
													$fetch_product_image = $this->product_m->fetch_pro_image($product_id);
													if($fetch_product_image->product_image_path != ""){
												?>
													<img class="img-responsive" alt="" src="<?php echo base_url();?><?php echo $img_path;?><?php echo $fetch_product_image->product_image_path;?>" data-holder-rendered="true" style="text-align:center;padding:10px;object-fit: contain;height:300px;">
												<?php
													}else{	
												?>
													<img class="img-responsive" alt="" src="<?php echo base_url('images/no-image.png');?>" data-holder-rendered="true" style="text-align:center;padding:10px;object-fit: contain;height:300px;">
												<?php
													}	
												?>
											</a>
											<div class="clearfix"></div>
										</div>
										<div class="card item-card" style="margin-top:-22px;background:#fafafa;">
												<div class="cardtitle" style="text-align:center;">
													<a href="<?php echo base_url("product_details");?>/<?php echo $get_product->product_id;?>" style="text-align:center;font-size:16px;color:#424242;"><?php echo ucfirst(substr($get_product->product_name,0,25));?></a>
												</div>
												<p style="font-family:arial;text-align:center;"> 
													<span style="color:red;font-size:18px;" ><strike><i class="fas fa-rupee-sign"></i> 999</strike> </span> 
													<span style="color:#000;font-weight:bold;font-size:18px;padding-left:10px;"> <i class="fas fa-rupee-sign"></i> <?php echo $get_product->product_retail_price;?> /- </span> 
												</p>
											
												<div class="border-top text-center" style="padding:7px;">
													<div>
														<!--<a href="#" class="btn btn-danger btn-xs tip" title="Favorite">
															<i class="fas fa-heart"></i>
														</a>
														<a href="#" class="btn btn-success btn-xs tip" title="Buy">
															<i class="fas fa-shopping-cart"></i>
														</a>-->

														<a href="<?php echo base_url("product_details");?>/<?php echo $get_product->product_id;?>" class="btn btn-success btn-xs tip" title="Buy" style="padding:5px 10px;">
															<i class="fas fa-shopping-cart"></i> Order Now
														</a>
													</div>
												</div>
										</div>
									</div>
								<?php
									}
								}else{
								?>
									<div class="card-body">No results found</div>
								<?php
								}	
								?>
								</div>
								
									<div class="row">
										<div class="col-md-6 col-xs-6 col-sm-6">
											<div class="pagination-wrapper">
												<nav aria-label="Page navigation">
													<?php 
														if(isset($links)){
															echo $links;
														}
													?>
												</nav>
											</div>
										</div>
										<?php
											if($records_in_total > 0){
										?>
										<div class="col-md-6 col-xs-6 col-sm-6" style="text-align:right;margin-top:15px;">
											<span style="font-size:15px;font-weight:400;"><strong><?php echo $records_in_total;?></strong> record(s) found</span>
										</div>
										<?php
											}	
										?>
									</div>
								
								<p>&nbsp;</p>


							</div>
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