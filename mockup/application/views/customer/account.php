
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/png"/>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<!-- Title -->
		<title>Eazyprint | Account</title>
		<?php
		$this->load->view("common/metalinks");
		?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
		<style>
		.sidebar_active{
			background:#009fdc !important;
		}
		.sidebar_active .text-dark{
			color:#fff !important;
		}
		</style>

	</head>
	<body class="app">
		<?php
		$this->load->view("common/header");
		?>
		<div class="container">
			<div class="side-app">
				<p>&nbsp;</p>
				<div class="row">
				<?php $this->load->view("customer/customer_sidebar");?>
					<div class="col-lg-8">
						
						<div class="card">
									<div class="panel panel-primary" style="height:455px;">
										<div class="tab-menu-heading">
											<div class="tabs-menu ">
												<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li ><a href="#personal" class="active" data-toggle="tab">Personal info</a></li>
														<li class=""><a href="#address" data-toggle="tab">Billing Address</a></li>
														<li><a href="#password" data-toggle="tab">Password Change</a></li>
													</ul>
												</div>
											</div>
																<div class="panel-body tabs-menu-body">
																	<div class="tab-content">
																		<div class="tab-pane active " id="personal">
																			<div class="col-lg-12">
																				<form class="card">
																					<div class="card-body">
																						<div class="row">
																						<div class="col-md-5">
																		<div class="form-group">
																			<label class="form-label">Company</label>
																			<input type="text" class="form-control"  placeholder="Company" >
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-3">
																		<div class="form-group">
																			<label class="form-label">Username</label>
																			<input type="text" class="form-control" placeholder="Username" >
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-4">
																		<div class="form-group">
																			<label class="form-label">Email address</label>
																			<input type="email" class="form-control" placeholder="Email">
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="form-label">First Name</label>
																			<input type="text" class="form-control" placeholder="First Name" >
																		</div>
																	</div>
																	<div class="col-md-6">
																		<div class="form-group">
																			<label class="form-label">Last Name</label>
																			<input type="text" class="form-control" placeholder="Last Name" >
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-4">
																		<div class="form-group">
																			<label class="form-label">City</label>
																			<input type="text" class="form-control" placeholder="City" >
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-3">
																		<div class="form-group">
																			<label class="form-label">Postal Code</label>
																			<input type="number" class="form-control" placeholder="ZIP Code">
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="form-label">Country</label>
																			<select class="form-control custom-select">
																				<option value="0">--Select--</option>
																				<option value="1">Germany</option>
																				<option value="2">Canada</option>
																				<option value="3">Usa</option>
																				<option value="4">Aus</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-footer text-right">
																<button type="submit" class="btn btn-primary">Update Profile</button>
															</div>
														</form>
													</div>
												</div>

												<div class="tab-pane" id="address">
													<div class="col-lg-12">
														<form class="card">
															<div class="card-body">
																<div class="row">
																	<div class="col-md-12">
																		<div class="form-group">
																			<label class="form-label">Address</label>
																			<input type="text" class="form-control" placeholder="Home Address" >
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-4">
																		<div class="form-group">
																			<label class="form-label">City</label>
																			<input type="text" class="form-control" placeholder="City" >
																		</div>
																	</div>
																	<div class="col-sm-6 col-md-3">
																		<div class="form-group">
																			<label class="form-label">Postal Code</label>
																			<input type="number" class="form-control" placeholder="ZIP Code">
																		</div>
																	</div>
																	<div class="col-md-5">
																		<div class="form-group">
																			<label class="form-label">Country</label>
																			<select class="form-control custom-select">
																				<option value="0">--Select--</option>
																				<option value="1">Germany</option>
																				<option value="2">Canada</option>
																				<option value="3">Usa</option>
																				<option value="4">Aus</option>
																			</select>
																		</div>
																	</div>
																</div>
															</div>
															<div class="card-footer text-right">
																<button type="submit" class="btn btn-primary">Update Profile</button>
															</div>
														</form>
													</div>
												</div>

												<div class="tab-pane  " id="password">
													<div class="card">
														<div class="card-body">
															<form class="" method="post">
																<div class="mt-4">
																	<div class="card-title">Forgot password</div>
																	<p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
																	<div class="form-group">
																		<label class="form-label" for="exampleInputEmail1">Email address</label>
																		<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
																	</div>
																	<div class="form-footer">
																		<button type="submit" class="btn btn-primary btn-block">Send me new password</button>
																	</div>
																</div>
															</form>
															<div class="text-center text-muted mt-3 ">
																Forget it, <a href="">send me back</a> to the sign in screen.
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

		<?php
		$this->load->view("common/footer");
		?>
	</body>
</html>