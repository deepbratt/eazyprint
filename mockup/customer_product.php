
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
		<link rel="icon" href="images/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Product</title>
	<?php include("metalinks.php");?>
	</head>
	<body class="app">
	<?php include("header.php");?>
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
						<?php include("customer_product_sidebar.php");?>
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
												<div class="text-center">
													<a href=""><img src="images/14.png" alt="img" class="img-fluid"></a>
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
											<div class="text-center border-top" style="padding:10px;">
												<a href="#" class="btn btn-danger btn-xs tip" title="Favorite">
												<i class="fas fa-heart"></i>
												</a>
												<a href="#" class="btn btn-success btn-xs tip" title="Buy">
											    <i class="fas fa-shopping-cart"></i>
												</a>
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

<?php include("footer.php");?>

</body>
</html>