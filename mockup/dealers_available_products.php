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
		<link rel="icon" href="images/favicon.png" type="image/png"/>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Products</title>
		<?php include("metalinks.php");?>
	</head>
	<body class="app">

				<?php include("header.php");?>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">Available Products</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row">
							<?php
							include("dealers_sidebar.php");
							?>
							<div class="col-lg-8">
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
												<div class="text-center">
													<img src="images/14.png" alt="img" class="img-fluid">
												</div>
												<div class="card-body cardbody ">
													<div class="cardtitle">
														<span>Accessories</span>
														<a>Sports Watch</a>
													</div>
													<div class="cardprice">
														<span class="type--strikethrough">$999</span>
														<span>$799</span>
													</div>
												</div>

											</div>
											<div class="text-center border-top">
												<a href="shop-des.html" class="btn btn-primary btn-sm mt-4 mb-4"> View More</a>
												<a href="javascript:void(0)" class="btn btn-primary btn-sm mt-4 mb-4"><i class="fas fa-shopping-cart"></i> Add to cart</a>
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

				<?php include("footer.php");?>
				
	</body>
</html>