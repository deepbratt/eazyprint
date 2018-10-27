
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
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Eazyprint | Edit Brand</title>

       <?php include('metalinks.php');?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
				<?php include('header.php');?>

				<?php include('sidebar.php');?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Edit Brand</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form  method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">Edit Brand</h3>
									</div>
									<div class="card-body">
									  <div class="col-md-12">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Choose Category</label>
											</div>
											<div class="col-md-10">
												<select name="country" id="select-countries" class="form-control custom-select">
													<option value="" selected="">Choose Category</option>
													<option value="Electronics">Electronics</option>
													<option value="Fashion">Fashion</option>
													<option value="Gift Items" >Gift Items</option>
												</select>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="col-md-12">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Choose Subcategory</label>
											</div>
											<div class="col-md-10">
												<select name="country" id="select-countries" class="form-control custom-select">
													<option value="" selected="">Choose Subcategory</option>
													<option value="Phone Case">Phone Case</option>
													<option value="Mugs">Mugs</option>
													<option value="T-Shirt" >T-Shirt</option>
												</select>
											</div>
										  </div>
										</div>
									  </div>
									  <div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label class="form-label">Add Brand Name</label>
												</div>
												<div class="col-md-10">
												 <input type="text" class="form-control" placeholder="New Brand Name">
												</div>
											  </div>
										</div>
									  </div>
									  <div class="col-md-12">
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label class="form-label">Add Brand Code</label>
												</div>
												<div class="col-md-10">
												 <input type="text" class="form-control" placeholder="New Brand Code">
												</div>
											  </div>
										</div>
									  </div>
									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--footer-->
					<?php include('footer.php');?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="js/jquery.timepicker.js"></script>
		<script src="js/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="js/spectrum.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/jquery.maskedinput.js"></script>
	</body>

</html>


