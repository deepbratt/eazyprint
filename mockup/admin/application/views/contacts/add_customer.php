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
		<title>Eazyprint | Add Customer</title>
		<style>
		.error{
			color : red;
			font-weight: 450;
		}
		input.error[type="text"],input.error[type="number"],input.error[type="email"],select.error,textarea.error{
			border : 1px solid red !important;
			color : #7490BD;
		}
		select{
			color : #7490BD;
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
							<h4 class="page-title">Add Customer &nbsp;&nbsp;<a href="<?php echo base_url("listing_customers");?>" class="btn btn-primary">View All</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Customer</li>
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
						else if($this->session->flashdata('failed')){
						?>
							<div class="alert alert-danger">
								<strong><?php echo $this->session->flashdata('failed');?></strong>
							</div>
						<?php
						}else if($this->session->flashdata('exist')){
						?>
							<div class="alert alert-danger">
								<strong><?php echo $this->session->flashdata('exist');?></strong>
							</div>
						<?php
						}
						?>
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
								  <div class="panel panel-primary">
									<div class="tab-menu-heading">
									  <div class="tabs-menu ">
										<!-- Tabs -->
										<ul class="nav panel-tabs">
										  <li >
											<a href="#personal" class="active" id="p_info" data-toggle="tab">Personal info
											</a>
										  </li>
										  <li class="">
											<a href="#address" id="b_info" data-toggle="tab">Billing Address
											</a>
										  </li>
										</ul>
									  </div>
									</div>
									

									<div class="panel-body tabs-menu-body">
									  <div class="tab-content">
										<div class="tab-pane active " id="personal">
										  <div class="col-lg-12">
											<?php
											  if($this->session->flashdata('success_personal')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('success_personal');?></strong>
												</div>
											<?php
											}
											else if($this->session->flashdata('failed_personal')){
											?>
												<div class="alert alert-danger">
													<strong><?php echo $this->session->flashdata('failed_personal');?></strong>
												</div>
											<?php
											}
											?>
											<form class="card" method="POST" name="update_general" enctype="multipart/form-data" action="<?php echo base_url('account/update_account_info');?>">
											  <div class="card-body">
												<div class="row">
												<div class="col-md-12">
												<div class="row">
												<div class="col-md-12" align="center">
													<div class="form-group">
														  <img class="brround" style="height:150px;width:150px;cursor: pointer;" src="https://via.placeholder.com/150?text=Upload+Image" id="blah">
														  <input type="file" name="image" id="my_file" style="display: none;" onchange="readURL(this);" />
													</div>
												</div>
												  <div class="col-md-6">
													<div class="form-group">
													  <label class="form-label">First Name
													  </label>
													  <input type="text" class="form-control" name="fname" placeholder="First Name">
													</div>
												  </div>
												  <div class="col-md-6">
													<div class="form-group">
													  <label class="form-label">Last Name
													  </label>
													  <input type="text" class="form-control" name="lname"  placeholder="Last Name" >
													</div>
												  </div>
												   <div class="col-md-6">
													<div class="form-group">
													  <label class="form-label">Email address
													  </label>
													  <input type="email" class="form-control" name="email"  placeholder="Email" >
													</div>
												  </div>
												  <div class="col-md-6">
													<div class="form-group">
													  <label class="form-label">Phone
													  </label>
													  <input type="number" class="form-control" id="mobile" name="phone"  placeholder="Phone" onkeyup="check(); return false;" >
													  <span id="message"></span>
													</div>
												  </div>
												</div>
											  </div>
											 
											</div>
											  </div>
											  <div class="card-footer text-right">
												<button type="submit" class="btn btn-primary">Update Profile
												</button>
											  </div>
											</form>
										  </div>
										</div>
										<div class="tab-pane" id="address">
										  <div class="col-lg-12">
											<?php
											  if($this->session->flashdata('address_success')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('address_success');?></strong>
												</div>
											<?php
											}else if($this->session->flashdata('address_failed')){
											?>
												<div class="alert alert-danger">
													<strong><?php echo $this->session->flashdata('address_failed');?></strong>
												</div>
											<?php
											}else if($this->session->flashdata('address_status_success')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('address_status_success');?></strong>
												</div>
											<?php
											}
											else if($this->session->flashdata('address_del_success')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('address_del_success');?></strong>
												</div>
											<?php
											}else if($this->session->flashdata('success_add_update')){
											?>
												<div class="alert alert-success">
													<strong><?php echo $this->session->flashdata('success_add_update');?></strong>
												</div>
											<?php
											}
											else if($this->session->flashdata('failed_add_update')){
											?>
												<div class="alert alert-danger">
													<strong><?php echo $this->session->flashdata('failed_add_update');?></strong>
												</div>
											<?php
											}
											?>
										  <div class="card-body" id="new_button">
											<div class="row">
											  <div class="col-md-12">
												<div class="form-group">
												  <span class="add_name" style="cursor:pointer;" onclick="add_more();"><i class="fas fa-plus" style="font-size:14px;"></i>&nbsp;&nbsp;&nbsp;Add a new address</span>
												</div>
											  </div>
											</div>
										  </div>
										  <form method="post" name="add_address" action="<?php echo base_url('account/add_address');?>">
										  <div id="append_div" style="display:none;">
											<div class="card-body">
												<div class="row">
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Name</label>
															<input type="text" class="form-control" name="name" placeholder="Full Name">
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Phone</label>
															<input type="text" class="form-control" name="phone" placeholder="Phone Number">
														</div>
													</div>
													<div class="col-md-12">
														<div class="form-group">
															<label class="form-label">Address</label>
															<textarea class="form-control" name="address" placeholder="Address"></textarea>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">State</label>
															<select class="form-control select2-show-search" name="state" onchange="get_city(this.value);">
																<option selected disabled>Select state</option>
																<?php
																foreach($fetch_city_state as $fetch_all_state){
																?>
																<option value="<?php echo $fetch_all_state->city_state;?>"><?php echo $fetch_all_state->city_state;?></option>
																<?php
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">City</label>
															<select class="form-control select2-show-search" name="city" id="city_select">
																<option selected disabled>Select city</option>
																<?php
																foreach($fetch_all_city as $fetch_all_cities){
																?>
																<option value="<?php echo $fetch_all_cities->city_id;?>"><?php echo $fetch_all_cities->city_name;?></option>
																<?php
																}
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Postal Code</label>
															<input type="number" class="form-control" name="pincode" placeholder="ZIP Code">
														</div>
													</div>
													<div class="col-sm-6 col-md-6">
														<div class="form-group">
															<label class="form-label">Country</label>
															<input type="text" class="form-control" name="country" placeholder="Country" value="india" disabled>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-right">
												<button type="submit" class="btn btn-primary">Add Address</button> <a href="javascript:void(0);" class="btn btn-primary" onclick="close_add();">close</a>
											</div>
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
	  $("form[name='add_customer']").validate({
		rules: {
		  f_name: "required",
		  l_name: "required",
		  email : "required",
		  mobile : "required",
		  address : "required",
		  state : "required",
		  city : "required",
		  pincode : "required",
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
		},
		submitHandler: function(form) {
		  form.submit();
		}
	  });
	});	
	</script>

	<script>
		$('.selectpicker').selectpicker({
		    dropupAuto: false
		});
		function state_name(state){
				$.ajax({
				url: '<?php echo base_url();?>add_customer/ajax_state_name',
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
	<script>
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
</html>


