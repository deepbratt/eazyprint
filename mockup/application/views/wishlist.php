
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

		<!-- Title -->
		<title>Eazyprint | Wishlist</title>
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
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">My Wishlist</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
		<div class="page">
			<div class="page-main">				
				<div class="container">
					<div class="side-app">
						<div class="row row-cards">
							<div class="col-lg-12">
								<div class="row shop-dec">
									<div class="col-lg-6">
										<div class="card item-card">
											<div class="card-body ">
												<div class="border p-0">
													<div class="row">
														<div class="col-md-6 pr-0">
															<div class="text-center bg-gray">
																<img src="<?php echo base_url();?>images/5.png" alt="img" class="img-fluid">
															</div>
														</div>
														<div class="col-md-6 pl-0">
															<div class="card-body cardbody ">
																<div class="cardtitle">
																	<a class="card-title">Digital Watch</a>
																	<span>Accessories</span>
																</div>
																<div class="cardprice">
																	<span class="type--strikethrough">$999</span>
																	<span>$799</span>
																</div>
															</div>
															<div class="card-body"><a href="#" class="btn btn-danger"><i class="fas fa-trash fa-2x" ></i> Remove</a> <a href="#" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card item-card">
											<div class="card-body ">
												<div class="border p-0">
													<div class="row">
														<div class="col-md-6 pr-0">
															<div class="text-center bg-gray">
																<img src="<?php echo base_url();?>images/5.png" alt="img" class="img-fluid">
															</div>
														</div>
														<div class="col-md-6 pl-0">
															<div class="card-body cardbody ">
																<div class="cardtitle">
																	<a class="card-title">Digital Watch</a>
																	<span>Accessories</span>
																</div>
																<div class="cardprice">
																	<span class="type--strikethrough">$999</span>
																	<span>$799</span>
																</div>
															</div>
															<div class="card-body"><a href="#" class="btn btn-danger"><i class="fas fa-trash fa-2x" ></i> Remove</a> <a href="#" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card item-card">
											<div class="card-body ">
												<div class="border p-0">
													<div class="row">
														<div class="col-md-6 pr-0">
															<div class="text-center bg-gray">
																<img src="<?php echo base_url();?>images/5.png" alt="img" class="img-fluid">
															</div>
														</div>
														<div class="col-md-6 pl-0">
															<div class="card-body cardbody ">
																<div class="cardtitle">
																	<a class="card-title">Digital Watch</a>
																	<span>Accessories</span>
																</div>
																<div class="cardprice">
																	<span class="type--strikethrough">$999</span>
																	<span>$799</span>
																</div>
															</div>
															<div class="card-body"><a href="#" class="btn btn-danger"><i class="fas fa-trash fa-2x" ></i> Remove</a> <a href="#" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card item-card">
											<div class="card-body ">
												<div class="border p-0">
													<div class="row">
														<div class="col-md-6 pr-0">
															<div class="text-center bg-gray">
																<img src="<?php echo base_url();?>images/5.png" alt="img" class="img-fluid">
															</div>
														</div>
														<div class="col-md-6 pl-0">
															<div class="card-body cardbody ">
																<div class="cardtitle">
																	<a class="card-title">Digital Watch</a>
																	<span>Accessories</span>
																</div>
																<div class="cardprice">
																	<span class="type--strikethrough">$999</span>
																	<span>$799</span>
																</div>
															</div>
															<div class="card-body"><a href="#" class="btn btn-danger"><i class="fas fa-trash fa-2x" ></i> Remove</a> <a href="#" class="btn btn-success"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
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
			</div>
		</div>

<?php
$this->load->view("common/footer");
?>

	</body>
</html>