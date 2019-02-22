
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
	<body class="app">
<?php
$this->load->view("common/header");
?>
		<div>
			<img src="<?php echo base_url();?>images/product_banner4.png">
		</div>
		<div class="page">
			<div class="page-main">				
				<div class="container">
					<div class="side-app">
						
						
						
						<div class="page-header">
							<h4 class="page-title">Shop</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazyprint</a></li>
								<li class="breadcrumb-item active" aria-current="page">Shop</li>
							</ol>
						</div>
						<div class="row row-cards">
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
								
								foreach($products As $key=>$get_product){
									$category = $get_product->category_name;
									if($category = "tshirts"){
										$img_path = "admin/uploads/product_images/";
									}else if($category = "mugs"){
										$img_path = "admin/uploads/product_images/";
									}else if($category = "mobile_covers"){
										$img_path = "admin/uploads/product_images/";
									}
								?>
									<div class="col-lg-4" style="border-radius:5px !important;">
										<a href="<?php echo base_url("product_details");?>"><img class="" alt="" src="<?php echo base_url();?><?php echo $img_path;?><?php echo $get_product->product_image_path;?>" data-holder-rendered="true" style="border-radius:5px 5px 0px 0px !important;border:1px solid #CCC !important;height:300px;"></a>
										<div class="card item-card">
												<div class="cardtitle" style="text-align:center;padding-top:15px;">
													<a href="<?php echo base_url("product_details");?>" style="text-align:center;font-size:16px;"><?php echo $get_product->product_name;?></a>
												</div>
												<p style="font-family:arial;text-align:center;"> 
													<span style="color:red;font-size:18px;" ><strike><i class="fas fa-rupee-sign"></i> 999</strike> </span> 
													<span style="color:#000;font-weight:bold;font-size:18px;padding-left:10px;"> <i class="fas fa-rupee-sign"></i> <?php echo $get_product->product_retail_price;?> /- </span> 
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
									</div>
								<?php
								}
								?>
								</div>


								<div class="pagination-wrapper center">
									<nav aria-label="Page navigation">
										<ul class="pagination mg-b-0">
											<li class="page-item active">
												<a class="page-link" href="#">1</a>
											</li>
											<li class="page-item">
												<a class="page-link" href="#">2</a>
											</li>
											<li class="page-item">
												<a class="page-link" href="#">3</a>
											</li>
											<li class="page-item">
												<a class="page-link" href="#">4</a>
											</li>
											<li class="page-item">
												<a class="page-link" href="#">5</a>
											</li>
											<li class="page-item">
												<a aria-label="Next" class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
											</li>
										</ul>
									</nav>
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