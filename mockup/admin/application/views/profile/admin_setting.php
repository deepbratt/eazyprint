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
								<form  method="post" class="card" enctype="multipart/form-data" action="<?php echo base_url('admin_setting/update_admin');?>">
									<div class="card-header">
										<h3 class="card-title">Setting</h3>
									</div>

									<div class="card-body">
										
											<div class="form-group">
												<div class="row">
													<div class="col-md-12" align="center">
													<?php
													if($fetch_user->user_profile_image == '')
													{
													?>
														<img class="brround" style="height:150px;width:150px;" src="https://via.placeholder.com/150?text=Upload+Image" id="blah">
													<?php
													}else{
													?>
														<img class="brround" style="height:150px;width:150px;" src="uploads/crew_images/<?php echo $fetch_user->user_profile_image;?>" id="blah">
													<?php
													}
													?>
														<input type="file" name="image" id="my_file" style="display: none;" onchange="readURL(this);" />
													</div>
												  </div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">First Name</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $fetch_user->user_fname;?>" name="f_name" placeholder="Enter First Name">
												  </div>
												</div>
											</div>

											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Last Name</label>
												  </div>
												  <div class="col-md-10">
													<input type="text" class="form-control" value="<?php echo $fetch_user->user_lname;?>" name="l_name" placeholder="Enter last Name">
												  </div>
												</div>
											</div>
										
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Email</label>
												  </div>
												  <div class="col-md-10">
													<input type="email" class="form-control" value="<?php echo $fetch_user->user_email;?>" name="email" placeholder="Enter Email" disabled>
												  </div>
												</div>
											</div>
											<?php
												if($this->session->userdata['logged_in']['user_type'] == 'dealer')
												{
											?>
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Choose Category Want To Sell</label>
												  </div>
												  <div class="col-md-10">
												  <?php
														$get_cate = explode(",",$fetch_user->category_want_to_sell);
												  		$this->load->model('admin_setting_m');
														$get_category = $this->admin_setting_m->get_category();
														//print_r($get_category);
														foreach($get_category As $key)
														{

												  ?>
													 <label class="checkbox-inline">
													  <input type="checkbox" value="<?php echo $key->category_name;?>" name="category[]" <?php echo (in_array($key->category_name,$get_cate)?'checked':'')?>>&nbsp;&nbsp;<span style="color:black;"><?php echo ucfirst($key->category_name);?></span>
													</label>&nbsp;&nbsp;
												<?php
														}
												?>
												  </div>
												</div>
											</div> 
										<?php
											}
										?>
									  </div>
									  <div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Update
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


