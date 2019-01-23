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
		<link rel="icon" href="<?php echo base_url('images')?>/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<style>
		.field-icon {
		  float: right;
		  margin-right: 5px;
		  margin-top: -29px;
		  position: relative;
		  font-size:18px;
		  z-index: 2;
		}
		</style>

		<!-- Title -->
		<title>Eazyprint | Setting</title>

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
							<h4 class="page-title">Setting</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Setting</li>
							</ol>
						</div>
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
						<div class="row">
							<div class="col-md-12">
								<form  method="post" class="card" enctype="multipart/form-data">
									<div class="card-header">
										<h3 class="card-title">Setting</h3>
									</div>

									<div class="card-body">
										
											<div class="form-group">
												<div class="row">
													<div class="col-md-12" align="center">
													
														<img class="brround" style="height:150px;width:150px;" src="https://placeholdit.imgix.net/~text?txtsize=33&txtcolor=ffffff&txt=Upload%20Image&bg=333333&w=150&h=150" id="blah">
												
														<!-- <img class="brround" style="height:150px;width:150px;" src="uploads/crew_images/<?php echo $admin_data->crew_image;?>" id="blah"> -->
													
														<input type="file" name="image" id="my_file" style="display: none;" onchange="readURL(this);" />
													</div>
												  </div>
											</div>

					
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">First Name</label>
														<input type="text" class="form-control" name="product_name" placeholder="First Name">
												  </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input type="text" class="form-control" name="product_title" placeholder="Last Name">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Date of Birth</label>
														<input type="text" class="form-control" name="product_name" placeholder="Date of Birth">
												  </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Area</label>
														<input type="text" class="form-control" name="product_title" placeholder="Area">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">City</label>
														<input type="text" class="form-control" name="product_name" placeholder="City">
												  </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Pincode</label>
														<input type="text" class="form-control" name="product_title" placeholder="Pincode">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Phone No.</label>
														<input type="text" class="form-control" name="product_name" placeholder="Phone No.">
												  </div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Email</label>
														<input type="text" class="form-control" name="product_title" placeholder="Email">
													</div>
												</div>
												<!-- <div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Product Desc</label>
														<textarea class="form-control" name="product_desc" placeholder="Enter Product Description"></textarea>
													</div>
												</div> -->
											</div>
									  </div>
									  <div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Submit
										</button>
										<button type="reset" class="btn btn-secondary">Cancel</button>
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

		<script>
		$(".toggle-password").click(function() {

		  $(this).toggleClass("fe-eye-off");
		  var input = $($(this).attr("toggle"));
		  if (input.attr("type") == "password") {
			input.attr("type", "text");
		  } else {
			input.attr("type", "password");
		  }
		});


		$(".brround").click(function() {
			$("input[id='my_file']").click();
		});

		function readURL(input) {
	            if (input.files && input.files[0]) {
	                var reader = new FileReader();

	                reader.onload = function (e) {
	                    $('#blah').attr('src', e.target.result);
	                }

	                reader.readAsDataURL(input.files[0]);
	            }
	        }
		</script>

		<!-- Timepicker js -->
		<script src="<?php echo base_url('js');?>/jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js');?>/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js');?>/spectrum.js"></script>
		<script src="<?php echo base_url('js');?>/jquery-ui.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.maskedinput.js"></script>
	</body>

</html>


