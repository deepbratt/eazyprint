
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.png" />
		
		<!-- Title -->
		<title>Eazyprint | Edit Subcategory</title>
		<style>
			.bootstrap-select{
				width:100% !important;
			}
		</style>
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
							<h4 class="page-title">Edit Subcategory</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Subcategory</li>
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
						<?php 
							} 
						   if($this->session->flashdata('exist')){
						?>
							<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('exist');?></strong> </div>
						<?php
						  }
						?>
						<div class="row">
							<div class="col-lg-12">



								<form  method="post" class="card" action="<?php echo base_url('admin_edit_sub_category/edit_sub_cat/');?><?php echo $this->uri->segment(2);?>">
									<div class="card-header">
										<h3 class="card-title">Edit Subcategory</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Choose Category</label>
											</div>
											<div class="col-md-10">
												
												<select name="category" class="form-control select2-show-search">
													<option value="" selected="">Choose Category</option>
											<?php
													$get_category = $sub_cat_fetch->parent_cat_id;
													$this->load->model('admin_edit_sub_category_m');
													$edit_sub_cat = $this->admin_edit_sub_category_m->sub_cat_edit();
													foreach($edit_sub_cat AS $cat_sub_edt)
													{
											?>
													<option value="<?php echo $cat_sub_edt->category_id;?>" <?php echo (($cat_sub_edt->category_id == $get_category)?'selected':'')?>><?php echo $cat_sub_edt->category_name;?></option>
											<?php } ?>
																							
												</select>
											</div>
										  </div>
										</div>
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Subcategory Name</label>
											</div>
											<div class="col-md-10">
												<input type="text" class="form-control" name="sub_category" value="<?php echo $sub_cat_fetch->sub_category_name;?>" placeholder="New Subcategory Name">
											</div>
										  </div>
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
		<script>
			$(function() {
			  $('.selectpicker').selectpicker();
			});
		</script>
	</body>

</html>


