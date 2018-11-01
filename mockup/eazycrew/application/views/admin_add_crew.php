
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
		<title>Eazyprint | Add Crew</title>

       <?php $this->load->view('common/metalinks');?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
				<?php $this->load->view('common/header');?>

				<?php $this->load->view('common/sidebar');?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Add Crew</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Crew</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form  method="post" class="card" action="<?php echo base_url('admin_add_crew/add_crew');?>">
									<div class="card-header">
										<h3 class="card-title">Add Crew</h3>
									</div>

									<div class="card-body">
										<?php
											  if($this->session->flashdata('success')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('success');?></strong>
												</div>
											<?php
											}
											if($this->session->flashdata('failed')){
											?>
												<div class="alert alert-danger">
													<strong><?php echo $this->session->flashdata('failed');?></strong>
												</div>
											<?php
											}
											?>
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">First Name</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" name="f_name" placeholder="Enter First Name">
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Last Name</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" name="l_name" placeholder="Enter last Name">
												  </div>
												</div>
											</div>
										
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Email</label>
												  </div>
												  <div class="col-md-10">
													<input type="email" class="form-control" name="email" placeholder="Enter Email">
												  </div>
												</div>
											</div>
										
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Password</label>
												  </div>
												  <div class="col-md-10">
													<input type="password" class="form-control" name="password" placeholder="Enter Password">
												  </div>
												</div>
											</div>
									  
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Assign Role</label>
												  </div>
												  <div class="col-md-10">
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item">
															<input type="radio" name="role" value="admin" class="selectgroup-input">
															<span class="selectgroup-button">Admin</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="role" value="sales" class="selectgroup-input">
															<span class="selectgroup-button">Sales</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="role" value="operation" class="selectgroup-input">
															<span class="selectgroup-button">Operation</span>
														</label>
														<label class="selectgroup-item">
															<input type="radio" name="role" value="accounts" class="selectgroup-input">
															<span class="selectgroup-button">Accounts</span>
														</label>
													</div>
												  </div>
												</div>
											</div>
									  </div>
									  <div class="card-footer text-center">
										<button type="submit" class="btn btn-primary">Submit
										</button>
									  </div>
								</form>




							</div>
						</div>
					</div>
					<!--footer-->
					<?php $this->load->view('common/footer');?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="<?php echo base_url('js');?>/jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js');?>/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js');?>/spectrum.js"></script>
		<script src="<?php echo base_url('js');?>/jquery-ui.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.maskedinput.js"></script>
	</body>

</html>


