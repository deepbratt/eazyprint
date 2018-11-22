
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
		<title>Eazyprint | Edit Brand</title>

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
							<h4 class="page-title">Edit Brand</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
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
							<div class="col-md-12">
								<form  method="post" class="card" action="<?php echo base_url('admin_edit_brand');?>/edit_brand">
									<div class="card-header">
										<h3 class="card-title">Edit Brand</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Category</label>
											</div>
											<div class="col-md-10">
												<select name="category" id="select-countries" class="form-control select2-show-search" onchange="add_brand(this.value);">
													<option value="" selected="">Category</option>
											<?php
													$this->load->model('admin_edit_brand_m');
													$edit_brand = $this->admin_edit_brand_m->brand_edit();
													$sub_category = $brand_fetch->sub_category;
													$get_cat_id = $this->admin_edit_brand_m->get_something($sub_category);
													$get_category = $get_cat_id->parent_cat_id;
													foreach($edit_brand AS $brand_edt)
													{
											?>
													<option value="<?php echo $brand_edt->category_id;?>" <?php echo (($brand_edt->category_id == $get_category)?'selected':'')?>><?php echo $brand_edt->category_name;?></option>
											<?php } ?>
												</select>
											</div>
										  </div>
										</div>
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Subcategory</label>
											</div>
											<div class="col-md-10">
												<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
												<select id="select-countries" name="sub_category" class="form-control select2-show-search sub_categoryz">
													<option value="<?php echo $sub_category;?>" selected=""><?php echo $get_cat_id->sub_category_name; ?></option>
													
												</select>
											</div>
										  </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label class="form-label">Add Brand Name</label>
												</div>
												<div class="col-md-10">
												 <input type="text" class="form-control" placeholder="New Brand Name" name="brand_name" value="<?php echo $brand_fetch->brand_name;?>">
												</div>
											  </div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label class="form-label">Add Brand Code</label>
												</div>
												<div class="col-md-10">
												 <input type="text" class="form-control" placeholder="New Brand Code" name="brand_code" value="<?php echo $brand_fetch->brand_code;?>">
												 <input type="hidden" name="brand_id" value="<?php echo $brand_fetch->brand_id;?>">
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

		<script>
			function add_brand(f){
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_edit_brand/ajax_fetch_sub_brand',
		        data: {'category_id': f,}, // change this to send js object
		        type: "post",
		        beforeSend: function(){
			        $('#AjaxLoader').show();
			    },
			    complete: function(){
			        $('#AjaxLoader').hide();
			    },
		        success: function(response){
		          $('.sub_categoryz').html(response);
		        }
		      });
    		 /* ajax code ends*/
    	}
		</script>

		<!-- Timepicker js -->
		<script src="<?php echo base_url();?>js/jquery.timepicker.js"></script>
		<script src="<?php echo base_url();?>js/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url();?>js/spectrum.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>
	</body>

</html>


