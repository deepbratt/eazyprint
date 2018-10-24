
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
		<title>Eazyprint | How & Why</title>
		<?php include("metalinks.php");?>
		<link href="css/timeline.min.css" rel="stylesheet" />
	</head>
	<body class="app">

				<?php include("header.php");?>

				<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							  <li data-target="#myCarousel" data-slide-to="1"></li>
							  <li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img class="first-slide" src="images/Untitled-1 (2).png" alt="First slide" style="width:100%;height:550px;">
								<div class="container">
								  <div class="carousel-caption text-left">
									<!--<h1>Example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>-->
								  </div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="second-slide" src="images/Screenprinting-banner.jpg" alt="Second slide" style="width:100%;height:550px;">
								<div class="container">
								  <div class="carousel-caption">
									<!--<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
								  </div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="third-slide" src="images/mobile-cover-bannerrr-2018.jpg" alt="Third slide" style="width:100%;height:550px;">
								<div class="container">
								  <div class="carousel-caption text-right">
									<!--<h1>One more for good measure.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>-->
								  </div>
								</div>
							  </div>
							</div>
							<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
					</div>


				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body" style="height:500px;">
									<h1 class="text-center">Content</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12 text-center">
							<div class="example">
								<div class="btn-list">
									<a href="#" class="btn btn-pill btn-success">Submit Your Artwork</a>
									<a href="#" class="btn btn-pill btn-info">Create Your Own Artwork</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php include("footer.php");?>
				<script src="js/timeline.min.js"></script>
				<script>
					timeline(document.querySelectorAll('.timeline'), {
						forceVerticalMode: 700,
						mode: 'vertical',
						verticalStartPosition: 'left',
						visibleItems: 4
					});
				</script>
	</body>
</html>