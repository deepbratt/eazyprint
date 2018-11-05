
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico" />

		<!-- Title -->
		<title>Eazyprint | Edit Product Color</title>

<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
<?php
$this->load->view("common/header");
?>

<?php
$this->load->view("common/sidebar");
?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Edit Product Color</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product Color</li>
							</ol>
						</div>
						<?php
						  if($this->session->flashdata('failed')){
						?>
						  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
						<?php
						  }
						  if($this->session->flashdata('success')){
						?>
						  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
						<?php } ?>
						<div class="row">
							<div class="col-lg-12">

								<form  method="post" class="card" action="<?php echo base_url('admin_edit_product_color');?>/edit_product_color/<?php echo $this->uri->segment(2);?>">
									<div class="card-header">
										<h3 class="card-title">Edit Product Color</h3>
									</div>
									<?php
										$sub_cat_id = $product_color_fetch->sub_category_id;
									?>
									<div class="card-body">
									<div class="form-group">
									 <div class="row">
										<div class="col-md-2">
											<label class="form-label">Subcategory</label>
										</div>
										<div class="col-md-10">
											<select name="sub_category" id="select-countries" class="form-control custom-select">
												<option value="" selected="">Subcategory</option>
										<?php
											foreach($edit_product_color AS $product_color_edt){
										?>
												<option value="<?php echo $product_color_edt->sub_category_id;?>" <?php echo (($product_color_edt->sub_category_id == $sub_cat_id)?'selected':'')?> ><?php echo $product_color_edt->sub_category_name;?></option>
										<?php
											} 
										?>
											</select>
									   </div>
									  </div>
									  </div>
									 
										<div class="form-group">
											<div class="main_div">
											 <div class="row" style="margin-bottom:10px;">
												<div class="col-md-2">
													<label class="form-label">Product Color</label>
												</div>
												<div class="col-md-4">
												 <input type="text" class="form-control" name="product_color" placeholder="New Product Color Name" value="<?php echo $product_color_fetch->product_color_name;?>">
												</div>
												<div class="col-md-2">
												 <input type="color" class="form-control" name="color_code" placeholder="New Product Color Code"  style="height:42px;" value="<?php echo $product_color_fetch->product_color_code;?>">
												</div>
											  </div>
											</div>
											
										</div>
									  
									  </div>
									
									
									<div class="card-footer text-right">
										<div class="d-flex">
											<a href="javascript:void(0)" class="btn btn-link">Cancel</a>
											<button type="submit" class="btn btn-primary ml-auto">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!--footer-->
<?php
$this->load->view("common/footer");
?>
					<!-- End Footer-->
				</div>
			</div>
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>


		

		<!-- Timepicker js -->
		<script src="<?php echo base_url();?>js/jquery.timepicker.js"></script>
		<script src="<?php echo base_url();?>js/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url();?>js/spectrum.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>
	</body>

</html>


