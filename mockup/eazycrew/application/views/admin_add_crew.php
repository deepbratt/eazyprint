
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
							<div class="col-lg-12">
								<form  method="post" class="card">
									<div class="card-header">
										<h3 class="card-title">Add Crew</h3>
									</div>
									<div class="card-body">
										 <div class="row">
											<div class="col-md-6">
												<div class="form-group">
												  <label class="form-label">Bank Name
												  </label>
												  <input type="text" class="form-control" placeholder="Bank Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												  <label class="form-label">Branch Name
												  </label>
												  <input type="text" class="form-control" placeholder="Branch Name">
												</div>
											</div>
										 </div>
										 <div class="row">
											<div class="col-md-6">
											<div class="form-group">
											  <label class="form-label">Branch Code
											  </label>
											  <input type="text" class="form-control" placeholder="Branch Code">
											</div>
										  </div>
										  <div class="col-md-6">
											<div class="form-group">
											  <label class="form-label">IFSC Code
											  </label>
											  <input type="text" class="form-control" placeholder="IFSC Code">
											</div>
										  </div>
										 </div>
										  
										 <div class="row">
											<div class="col-md-12">
											<div class="form-group">
											  <label class="form-label">Account Number
											  </label>
											  <input type="text" class="form-control" placeholder="Account Number">
											</div>
										  </div>
										 </div>
									  </div>
									  <div class="card-footer text-center">
										<button type="reset" class="btn btn-primary">Cancel
										</button>
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


