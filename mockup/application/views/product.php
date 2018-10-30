
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
		<title>Eazyprint | Product</title>
<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app">
<?php
$this->load->view("common/header");
?>
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
								<div class="input-group mb-5">
									<input type="text" class="form-control br-tl-3 br-bl-3" placeholder="">
									<div class="input-group-append ">
										<button type="button" class="btn btn-primary br-tr-3 br-br-3">
											<i class="fas fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>
								<div class="row">
									<?php
								for($i = 1;$i <=6 ;$i++){
								?>
									<div class="col-lg-4">
										<div class="card item-card">
											<div class="card-body pb-0">
												<div class="card">
													<div class="card-body">
														<div id="carousel-controls" class="carousel slide" data-ride="carousel">
															<div class="carousel-inner">
																<div class="carousel-item active">
																	<img class="d-block w-100" alt="" src="<?php echo base_url();?>images/14.png" data-holder-rendered="true">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100" alt="" src="<?php echo base_url();?>images/14.png" data-holder-rendered="true">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100" alt="" src="<?php echo base_url();?>images/14.png" data-holder-rendered="true">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100" alt="" src="<?php echo base_url();?>images/14.png" data-holder-rendered="true">
																</div>
																<div class="carousel-item">
																	<img class="d-block w-100" alt="" src="<?php echo base_url();?>images/14.png" data-holder-rendered="true">
																</div>
															</div>
															<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
																<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																<span class="sr-only">Previous</span>
															</a>
															<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
																<span class="carousel-control-next-icon" aria-hidden="true"></span>
																<span class="sr-only">Next</span>
															</a>
														</div>
													</div>
												</div>
												<div class="card-body cardbody" style="padding:0;text-align:center;">
													<div class="cardtitle">
														<a>Moto G5 Plus backcover</a>
														<p style="padding-top:5px;">$999</p>
													</div>													
												</div>
											</div>
											<div class="border-top text-center" style="padding:10px;">
											<div>
												<a href="#" class="btn btn-danger btn-xs tip" title="Favorite">
												<i class="fas fa-heart"></i>
												</a>
												<a href="#" class="btn btn-success btn-xs tip" title="Buy">
											    <i class="fas fa-shopping-cart"></i>
												</a>
												<a class="btn btn-xs tip" style="background:#1cc8e3;color:white;"><i class="fas fa-star" style=""></i>		
												</a>
											</div>
										</div>
									  </div>
									</div>
								<?php
								}
								?>
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