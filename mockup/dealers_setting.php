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
						<div class="row">
							<div class="col-md-12">
								<div class="card card-profile "  style="background-image: url(images/background.jpg); background-size:cover;">
									<div class="card-body text-center">
										<img class="card-profile-img" src="images/16.jpg" alt="img">
										<h3 class="mb-3 text-white">Shuvradeb Mondal</h3>
										<p class="mb-4 text-white">Deep Kumar Impex</p>
										<button class="btn btn-primary btn-sm">
											<span class="fab fa-twitter"></span> Follow
										</button>
										<a href="javascript:void(0);" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt" aria-hidden="true"></i> Edit profile</a>
									</div>
								</div>
							</div>
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
														<li><a href="#tab2" data-toggle="tab">Security</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active " id="tab1">
														<div class="col-lg-12">
																<div class="card-body">
																	  <form action="" method="post" novalidate="novalidate">
																	  	  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">First Name</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter First Name" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Last Name</label>
																				  <input  name="cc-payment" type="text" placeholder="Enter Last Name" class="form-control">
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
																					  <label class="control-label mb-1">State</label>
																					  <select name="state" class="form-control custom-select">
																						<option selected disabled>Select State</option>
																						<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
																						<option value="Andhra Pradesh">Andhra Pradesh</option>
																						<option value="Arunachal Pradesh">Arunachal Pradesh</option>
																						<option value="Assam">Assam</option>
																						<option value="Bihar">Bihar</option>
																						<option value="Chandigarh">Chandigarh</option>
																						<option value="Chhattisgarh">Chhattisgarh</option>
																						<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
																						<option value="Daman and Diu">Daman and Diu</option>
																						<option value="Delhi">Delhi</option>
																						<option value="Goa">Goa</option>
																						<option value="Gujarat">Gujarat</option>
																						<option value="Haryana">Haryana</option>
																						<option value="Himachal Pradesh">Himachal Pradesh</option>
																						<option value="Jammu and Kashmir">Jammu and Kashmir</option>
																						<option value="Jharkhand">Jharkhand</option>
																						<option value="Karnataka">Karnataka</option>
																						<option value="Kerala">Kerala</option>
																						<option value="Lakshadweep">Lakshadweep</option>
																						<option value="Madhya Pradesh">Madhya Pradesh</option>
																						<option value="Maharashtra">Maharashtra</option>
																						<option value="Manipur">Manipur</option>
																						<option value="Meghalaya">Meghalaya</option>
																						<option value="Mizoram">Mizoram</option>
																						<option value="Nagaland">Nagaland</option>
																						<option value="Orissa">Orissa</option>
																						<option value="Pondicherry">Pondicherry</option>
																						<option value="Punjab">Punjab</option>
																						<option value="Rajasthan">Rajasthan</option>
																						<option value="Sikkim">Sikkim</option>
																						<option value="Tamil Nadu">Tamil Nadu</option>
																						<option value="Tripura">Tripura</option>
																						<option value="Uttaranchal">Uttaranchal</option>
																						<option value="Uttar Pradesh">Uttar Pradesh</option>
																						<option value="West Bengal">West Bengal</option>
																					  </select>
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">City</label>
																				  <input  name="cc-payment" type="text" placeholder="Enter Your City" class="form-control">
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

																		  <div class="row">
																			  <div class="col-12">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Shop Name</label>
																					  <input  name="cc-payment" type="text" placeholder="Enter Shop Name" class="form-control">
																				  </div>
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
																		  

																		  <div class="card-footer text-center">
																			<button type="submit" class="btn btn-primary">Update Details
																			</button>
																		  </div>
																	  </form>
																 
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