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
		<title>Eazyprint | Settings</title>
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
									<h1 class="text-center">My Settings</h1>
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
								<div class="card">
									<div class="card-body p-6">
										<div class="panel panel-primary">
											<div class="tab-menu-heading">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab1" class="active" data-toggle="tab">General</a></li>
														<li><a href="#tab2" data-toggle="tab">Password</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active " id="tab1">
														<div class="col-lg-12">
																<div class="card-body">
																  <div id="pay-invoice">
																	  <form action="" method="post" novalidate="novalidate">
																	  	  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Full Name</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter Full Name" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Shop Name</label>
																				  <input  name="cc-payment" type="text" placeholder="Enter Shop Name" class="form-control">
																			  </div>
																		  </div>
																		  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Email</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter Your Email" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Phone</label>
																				  <input  name="cc-payment" type="text" placeholder="Enter Your Phone Number" class="form-control">
																			  </div>
																		  </div>
																		  
																		  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">GST</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter Your GST Number" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Trade License</label>
																				  <input  name="cc-payment" type="text" placeholder="Enter Your Trade License Number" class="form-control">
																			  </div>
																		  </div>
																		  <div class="row">
																			  <div class="col-12">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Address</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter Your Address" class="form-control">
																				  </div>
																			  </div>
																		  </div>

																		  <div class="card-footer text-center">
																			<button type="submit" class="btn btn-primary">Update Details
																			</button>
																		  </div>
																	  </form>
																  </div>
																</div>
														</div>
													</div>
													<div class="tab-pane  " id="tab2">
														<div class="col-lg-12">
																<div class="card-body">
																  <div id="pay-invoice">
																	  <form action="" method="post" novalidate="novalidate">
																	  	  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">New Password</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter Your New Password" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Confirm New Password</label>
																				  <input  name="cc-payment" type="text" placeholder="Confirm Your New Password" class="form-control">
																			  </div>
																		  </div>
																		  <div class="card-footer text-center">
																			<button type="submit" class="btn btn-primary">Update Password
																			</button>
																		  </div>
																	  </form>
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

				<?php include("footer.php");?>
				
	</body>
</html>