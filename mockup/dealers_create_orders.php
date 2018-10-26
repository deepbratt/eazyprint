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
		<title>Eazyprint | Create Order</title>
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
									<h1 class="text-center">Create Order</h1>
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
														<li class=""><a href="#tab1" class="active" data-toggle="tab">Mobile</a></li>
														<li><a href="#tab2" data-toggle="tab">T-Shirt</a></li>
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
																			  <div class="col-5">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Brand Name</label>
																					  <select name="user[month]" class="form-control custom-select">
																						<option selected disabled>Choose..</option>
																						<?php
																						for($i = 1;$i <=6 ;$i++){
																						?>
																						<option value="">Brand</option>
																						<?php
																						}
																						?>
																					  </select>
																				  </div>
																			  </div>
																			  <div class="col-5">
																				  <label class="control-label mb-1">Model Number</label>
																				  <select name="user[month]" class="form-control custom-select">
																					<option selected disabled>Choose..</option>
																					<?php
																					for($i = 1;$i <=6 ;$i++){
																					?>
																					<option value="">Model</option>
																					<?php
																					}
																					?>
																				  </select>
																			  </div>
																			  <div class="col-2">
																				  <label class="control-label mb-1">Quantity</label>
																				  <input  name="cc-payment" type="number" class="form-control">
																			  </div>
																		  </div>
																		  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Customer Name(Optional)</label>
																					  <input  name="cc-payment" type="text" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Customer Phone Number(Optional)</label>
																				  <input  name="cc-payment" type="text" class="form-control">
																			  </div>
																		  </div>
																		  
																		  <div class="row">
																			 <div class="card-body" style="height:200px;">
																				<h1 class="text-center">EDITOR GOES HERE</h1>
																			</div>
																		  </div>
																		  <div class="card-footer text-center">
																			<button type="submit" class="btn btn-primary">Create Order
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
																					  <label class="control-label mb-1">T-Shirt Shape</label>
																					  <select name="user[month]" class="form-control custom-select">
																						<option selected disabled>Choose..</option>
																						<?php
																						for($i = 1;$i <=6 ;$i++){
																						?>
																						<option value="">Shape</option>
																						<?php
																						}
																						?>
																					  </select>
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Color</label>
																				  <select name="user[month]" class="form-control custom-select">
																					<option selected disabled>Choose..</option>
																					<?php
																					for($i = 1;$i <=6 ;$i++){
																					?>
																					<option value="">Color</option>
																					<?php
																					}
																					?>
																				  </select>
																			  </div>
																		  </div>
																		  <div class="row">
																			  <div class="col-6">
																				  <label class="control-label mb-1">Size</label>
																				  <select name="user[month]" class="form-control custom-select">
																					<option selected disabled>Choose..</option>
																					<?php
																					for($i = 1;$i <=6 ;$i++){
																					?>
																					<option value="">Size</option>
																					<?php
																					}
																					?>
																				  </select>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Quantity</label>
																				  <input  name="cc-payment" type="number" class="form-control">
																			  </div>
																		  </div>
																		  <div class="row">
																			  <div class="col-6">
																				  <div class="form-group">
																					  <label class="control-label mb-1">Customer Name(Optional)</label>
																					  <input  name="cc-payment" type="text" class="form-control">
																				  </div>
																			  </div>
																			  <div class="col-6">
																				  <label class="control-label mb-1">Customer Phone Number(Optional)</label>
																				  <input  name="cc-payment" type="text" class="form-control">
																			  </div>
																		  </div>
																		  
																		  <div class="row">
																			 <div class="card-body" style="height:200px;">
																				<h1 class="text-center">EDITOR GOES HERE</h1>
																			</div>
																		  </div>
																		   <div class="card-footer text-center">
																			<button type="submit" class="btn btn-primary">Create Order
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