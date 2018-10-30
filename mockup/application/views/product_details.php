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
<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>

				<div class="container">
					<div class="side-app">
						<div class="col-md-12">
							<div class="page-header">
							<h4 class="page-title">Product Name</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazyprint</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product Name Details</li>
							</ol>
						</div>
								<div class="card b-1 hover-shadow mb-20">
									<div class="media card-body p-0">
										<div class="product-content product-wrap w-100 clearfix">
											<div class="row">
													<div class="col-md-5 col-sm-12 col-xs-12">
														<div class="product-image">
															<img src="<?php echo base_url();?>images/product.jpg" alt="194x228" class="img-fluid">
															<span class="tag2 hot bg-gradient-danger">
																HOT
															</span>
														</div>
													</div>
													<div class="col-md-7 col-sm-12 col-xs-12">
													<div class="product-deatil">
														<h5 class="name">
															<a href="#">
																Product Name Title Here <span class="text-muted">Category</span>
															</a>
														</h5>
														<div class="rating">
															<label for="stars-rating-5"><i class="fa fa-star text-warning"></i></label>
															<label for="stars-rating-4"><i class="fa fa-star text-warning"></i></label>
															<label for="stars-rating-3"><i class="fa fa-star text-warning"></i></label>
															<label for="stars-rating-2"><i class="fa fa-star"></i></label>
															<label for="stars-rating-1"><i class="fa fa-star"></i></label>
														</div>
														<p class="price-container">
															<span>$99</span>
														</p>
														<div>
														 <h5>
															Select size
														 </h5>
	   													    <span class="avatar  brround">S</span>
															<span class="avatar  brround">M</span>
															<span class="avatar  brround">L</span>
															<span class="avatar  brround">XL</span>
															<span class="avatar  brround">XXL</span>
														</div>
														<span class="tag1"></span>
													</div>
													<div class="description">
														<p>White solid straight kurta, has a mandarin collar, long sleeves, button closures, asymmetric hem, multiple slits.</p>
														<span style="font-size:20px;">Material & Care</span>
														<p>Cotton <br>Machine-wash</p>
														<span style="font-size:20px;">Complete The Look</span>
														<p>Complete your look with this kurta from See Designs. Dress this burgundy piece up with your favourite accessories and head out to any family event in style.</p>
														<span style="font-size:20px;">Product Code</span>
														<p>2323132</p>
														<span style="font-size:20px;">Important Note</span>
														<p>The color and design of this product may vary from what is shown in the image, as the product is sourced in mixed batches.</p>
													</div>
													<div class="product-info smart-form" style="float:right;">
														<div class="row">
															<div class="col-md-12 col-sm-12 col-xs-12">
																<a href="javascript:void(0);" class="btn btn-danger btn-sm float-left"><i class="fas fa-shopping-cart"></i> Add to cart</a>
																<a href="javascript:void(0);" class="btn btn-success btn-sm float-left"><i class="fas fa-heart"></i> Wishlist</a>
															</div>
														</div>
													</div>
												</div>
											</div>
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