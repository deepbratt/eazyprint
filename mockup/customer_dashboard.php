
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
		<title>Eazyprint | Dashboard</title>
		<?php include("metalinks.php");?>
		<link href="css/timeline.min.css" rel="stylesheet" />
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
									<h1 class="text-center">My Account</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card p-5 ">
									<div class="card-status bg-orange br-tr-3 br-tl-3"></div>
									<div class="card-title">
										My Dashboard
									</div>
									<div class="media-list">
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-box"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">My Order's</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->

										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-heart"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">My Wishlist</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-cart-plus" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">Cart</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-briefcase"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">Rewards/Giftcards</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-phone"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">Support</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-user" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">My Account</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
									</div>
									<!-- media-list -->
								</div>
							</div>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-status bg-success br-tr-3 br-tl-3"></div>
									<div class="card-body" style="height:455px;">
										<h1 class="text-center">Quick Access</h1>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<?php include("footer.php");?>
				
	</body>
</html>