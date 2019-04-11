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

		<!-- Title -->
		<title>Eazyprint | Add Dealer</title>
		<style>
		.error{
			color : red;
			font-weight: 450;
		}
		input.error[type="text"],input.error[type="number"],input.error[type="email"],span.error,textarea.error{
			border : 1px solid red !important;
		}
		</style>
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
							<h4 class="page-title">Add Dealer &nbsp;&nbsp;<a href="<?php echo base_url("listing_dealers");?>" class="btn btn-primary">View All</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Dealer</li>
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
						if($this->session->flashdata('exist')){
						?>
							<div class="alert alert-warning">
								<strong><?php echo $this->session->flashdata('exist');?></strong>
							</div>
						<?php
						}
						?>
						<div class="row">
							<div class="col-md-12">
								<form  method="post" name="add_dealer" action="<?php echo base_url('add_dealer/add_new_dealer');?>">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Profile</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" name="f_name" placeholder="Enter First Name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" name="l_name" placeholder="Enter last Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Email</label>
													<input type="email" class="form-control" name="email" placeholder="Enter Email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Mobile</label>
													<input type="number" class="form-control" name="mobile" placeholder="Enter Mobile">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<textarea class="form-control" name="address" placeholder="Enter Address Here"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">State</label>
													<select class="form-control select2-show-search" id="val_state" name="state" onchange="state_name(this.value);" >
														<option vlaue="" selected disabled>Choose State</option>
														<?php
															foreach($fetch_city_state AS $each_state){
														?>
															<option value="<?php echo $each_state->city_state;?>"><?php echo $each_state->city_state;?></option>
														<?php
															}
														?>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">City</label>
													<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
													<select class="form-control city_state select2-show-search" name="city">
														<option vlaue="" selected disabled>Choose City</option>
														<?php
															foreach($fetch_city_state AS $each_city){
														?>
															<option value="<?php echo $each_city->city_name;?>"><?php echo $each_city->city_name;?></option>
														<?php
															}
														?>
													</select>
												</div>
											</div>
									  	</div>
									  	<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Pincode</label>
													<input type="number" class="form-control" name="pincode" placeholder="Enter Pincode">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">GST Information</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Legal Name</label>
											<input type="text" class="form-control" name="legal_name" placeholder="Enter Your Legal Name">
										</div>

										<div class="form-group">
											<label class="form-label">GSTIN Number</label>
											<input type="text" class="form-control" name="gst_number" placeholder="Enter Your GSTIN Number">
										</div>

										<div class="form-group">
											<label class="form-label">Trade License Number</label>
											<input type="text" class="form-control" name="trade_license_number" placeholder="Enter Your Trade License Number">
										</div>
									</div>
								</div>
								  <div class="card-footer text-center">
									<button type="submit" class="btn btn-primary" id="sbmt">Submit
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
		<!-- Timepicker js -->
		<script src="<?php echo base_url('js');?>/jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js');?>/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js');?>/spectrum.js"></script>
		<script src="<?php echo base_url('js');?>/jquery-ui.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.maskedinput.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.validate.js"></script>
	</body>
	
	<script>
	$(function() {
	  $("form[name='add_dealer']").validate({
		rules: {
		  f_name: "required",
		  l_name: "required",
		  email : "required",
		  mobile : "required",
		  address : "required",
		  state : "required",
		  city : "required",
		  pincode : "required",
		  legal_name : "required",
		  gst_number : "required",
		  trade_license_number : "required",
		},
		messages: {
		  f_name: "This field is required",
		  l_name: "This field is required",
		  email : "This field is required",
		  mobile : "This field is required",
		  address : "This field is required",
		  state : "This field is required",
		  city : "This field is required",
		  pincode : "This field is required",
		  legal_name : "This field is required",
		  gst_number : "This field is required",
		  trade_license_number : "This field is required",
		  
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	

	
	</script>
	<script>

	window.setInterval(function(){
	  if($('#val_state').hasClass('error')){
				$('#select2-val_state-container').addClass('error');
			}else{
				$('#select2-val_state-container').removeClass('error');
			}
	}, 1000);
	</script>
	<script>
		function state_name(state){
				$.ajax({
				url: '<?php echo base_url();?>add_dealer/ajax_state_name',
				data: {'state': state,},
				type: "post",
				beforeSend: function(){
			        $('#AjaxLoader').show();
			    },
			    complete: function(){
			        $('#AjaxLoader').hide();
			    },
				success: function(response){
				  $('.city_state').html(response);
				}
			  });
			}
	</script>
</html>


