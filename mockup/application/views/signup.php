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

		<!-- Title -->
		<title>Eazyprint | Sign Up</title>
<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card" style="height:400px;">
								<div class="card-body">
									<h1 class="text-center">Banner Goes Here</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="side-app">
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-body row justify-content-between">
										<div class="col-md-6 bg-muted border p-5">
											<h3>Register now for <span class="text-success">FREE</span></h3>
											<ul class="mb-5">
												<li><span class="fas fa-check text-success"></span> See all your orders</li>
												<li><span class="fas fa-check text-success"></span> Fast re-order</li>
												<li><span class="fas fa-check text-success"></span> Save your favorites</li>
												<li><span class="fas fa-check text-success"></span> Fast checkout</li>
												<li><span class="fas fa-check text-success"></span> Get a gift (only new customers)</li>
												<li><span class="fas fa-check text-success"></span> Save your favorites</li>
												<li><span class="fas fa-check text-success"></span> Fast checkout</li>
											</ul>
											<a href="#" class="btn btn-success">Read More!</a>
										</div>
										<div class="col-md-6 bg-muted border p-5">
											<form action="" method="post" novalidate="novalidate">
											<div class="card-title">Creare your account</div>
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
											  

											  <div class="card-footer">
												<a href="<?php echo base_url('dashboard');?>" class="btn btn-primary">Sign Up</a>&nbsp;OR&nbsp;
												<a href="<?php echo base_url('login');?>" class="btn btn-primary">Login Here</a>
											  </div>
										  </form>
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