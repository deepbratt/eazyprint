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
		<title>Eazyprint | Add Inventory</title>

       <?php $this->load->view('common/metalinks');?>
       <style>
       	#show_brandz, #show_models{
       		display:none !important;
       	}
   	   </style>
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
							<h4 class="page-title">Add Inventory</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Inventory</li>
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
								<form  method="post" action="<?php echo base_url('add_inventory/add_new_inventory');?>">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Category</label>
													<select class="form-control" name="category" onchange="cat_ajax(this.value);">
														<option vlaue="" selected disabled>Choose Category</option>
														<?php
															foreach($fetch_catzz AS $each_catz){
														?>
															<option value="<?php echo $each_catz->category_name;?>"><?php echo ucfirst($each_catz->category_name);?></option>
														<?php
															}
														?>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Brand</label>
													<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader" style="float:left;margin-top:10px;position: absolute;z-index: 2;display: none;">
													<input list="show_brandz" class="form-control" name="brand" onchange="brand_ajax(this.value);">
												  	<datalist id="show_brandz">
												    	<option vlaue="" selected disabled>Choose Brand</option>
												  	</datalist>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Model</label>
													<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader1" style="float:left;margin-top:10px;position: absolute;z-index: 2;display: none;">
													<input list="show_models" class="form-control" name="model" onchange="model_ajax(this.value);">
												  	<datalist id="show_models">
												    	<option vlaue="" selected disabled>Choose model</option>
												  	</datalist>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Quantity</label>
													<input type="number" class="form-control" name="quantity" placeholder="Enter Quantity">
												</div>
											</div>
									  	</div>
									</div>
								</div>
								  <div class="card-footer text-center">
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
		<!-- Timepicker js -->
		<script src="<?php echo base_url('js');?>/jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js');?>/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js');?>/spectrum.js"></script>
		<script src="<?php echo base_url('js');?>/jquery-ui.js"></script>
		<script src="<?php echo base_url('js');?>/jquery.maskedinput.js"></script>
		<script>
			function cat_ajax(e){
				$.ajax({
		        url: '<?php echo base_url();?>add_inventory/get_brand',
		        data: {'cat_name': e}, // change this to send js object
		        type: "post",
		        beforeSend: function(){
		        	$('#show_brandz').hide();
			        $('#AjaxLoader').show();
			    },
			    complete: function(){
			    	$('#show_brandz').show();
			        $('#AjaxLoader').hide();
			    },
		        success: function(response){
				 $('#show_brandz').html(response);
				 $('#AjaxLoader').hide();
		        }
		      });
    		 /* ajax code ends*/
			}
			function brand_ajax(e){
				$.ajax({
		        url: '<?php echo base_url();?>add_inventory/get_model',
		        data: {'brand_name': e}, // change this to send js object
		        type: "post",
		        beforeSend: function(){
		        	$('#show_models').hide();
			        $('#AjaxLoader1').show();
			    },
			    complete: function(){
			    	$('#show_models').show();
			        $('#AjaxLoader1').hide();
			    },
		        success: function(response){
				 $('#show_models').html(response);
				 $('#AjaxLoader1').hide();
		        }
		      });
    		 /* ajax code ends*/
			}
		</script>
	</body>
</html>


