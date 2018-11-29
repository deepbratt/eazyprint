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
		<title>Eazyprint | Login</title>
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
											<form  method="post">
												<div class="card-title">Login to your account</div>
												<div class="row">
												  <div class="col-12">
													  <div class="form-group">
															<label class="form-label">Email address</label>
															<input type="email" class="form-control" id="exampleInputEmail12" placeholder="Enter email">
														</div>
												  </div>
											   </div>
											   <div class="row">
												  <div class="col-12">
													  <div class="form-group">
															<label class="form-label">Password</label>
															<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
														</div>
												  </div>
											   </div>
												<div class="form-group">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" />
														<span class="custom-control-label">Remember me</span>
														<a href="<?php echo base_url('forgot_password');?>" class="float-right small">I forgot password</a>
													</label>
												</div>
												<div class="form-footer">
													<a href="<?php echo base_url('login');?>" class="btn btn-primary">Login</a>&nbsp;OR&nbsp;
													<a href="<?php echo base_url('signup');?>" class="btn btn-primary">Sign Up Here</a>
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
	<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>			
	</body>
</html>