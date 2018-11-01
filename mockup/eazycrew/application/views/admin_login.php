
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
		<title>Eazyprint | Login</title>

        <!--Font Awesome-->
		<link href="<?php echo base_url();?>css/all.css" rel="stylesheet">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url();?>css/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- Dashboard Css -->
		<link href="<?php echo base_url();?>css/dashboard.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url();?>css/c3-chart.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo base_url();?>css/plugin.css" rel="stylesheet" />

  </head>
	<body class="login-img bg-gradient">
		<!-- Header Background Animation-->
		<div id="particles-js"  class=""></div>
		<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>
		<div class="page">
			<div class="page-single">
				<div class="container">
					<div class="row">
						<div class="col col-login mx-auto">
							<div class="text-center mb-6">
								<img src="<?php echo base_url('images');?>/logo_w.png" class="h-8" alt="">
							</div>
							<form class="card" method="post" action="<?php echo base_url('admin_login/check_login');?>">
								<div class="card-body p-6">
									<div class="card-title text-center">Login to your Account</div>
									<?php
									  if($this->session->flashdata('failed')){
									?>
										<div class="alert alert-danger">
											<strong><?php echo $this->session->flashdata('failed');?></strong>
										</div>
									<?php
									}
									?>
									<div class="form-group">
										<label class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label class="form-label">Password
										</label>
										<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
									</div>
									
									<div class="form-footer">
										<button type="submit" class="btn btn-primary btn-block">Sign in</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Dashboard js -->
		<script src="<?php echo base_url('js');?>/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url('js');?>/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url('js');?>/selectize.min.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url('js');?>/circle-progress.min.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.rating-stars.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url('js');?>/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- animation -->
        <script src="<?php echo base_url('js');?>/particles.js"></script>
		<script src="<?php echo base_url('js');?>/particlesapp_default.js"></script>

		<!--Counters -->
		<script src="<?php echo base_url('js');?>counterup.min.js"></script>
		<script src="<?php echo base_url('js');?>/waypoints.min.js"></script>

		<!-- custom js -->
		<script src="<?php echo base_url('js');?>/custom.js"></script>
			
	</body>
</html>
