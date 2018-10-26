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
		<title>Eazyprint | Dealers Orders</title>
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
									<h1 class="text-center">Order Details</h1>
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

								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="card">
										<div class="card-body" style="height:80px;">
											<h1 class="text-center">Order #123 was placed!</h1>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="card">
										<div class="card-body" style="height:400px;">
											<h1 class="text-center">Order Details</h1>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12">
									<div class="row">
										<div class="col-md-6">
											<div class="card">
												<div class="card-body" style="height:200px;">
													<h1 class="text-center">Billing Address</h1>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="card">
												<div class="card-body" style="height:200px;">
													<h1 class="text-center">Shipping Address</h1>
												</div>
											</div>
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