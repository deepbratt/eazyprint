
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
		<title>Eazyprint | Add Brand</title>

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
							<h4 class="page-title">Add Brand</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Brand</li>
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
								<form  method="post" class="card" action="<?php echo base_url('admin_add_brand');?>/brand_add">
									<div class="card-header">
										<h3 class="card-title">Add Brand</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Category</label>
											</div>
											<div class="col-md-10">
												<select name="cat_name" id="select-countries" class="form-control select2-show-search"  data-placeholder="Choose Category" onchange="add_sub(this.value);">
											<?php
												$this->load->model('admin_add_brand_m');
												$get_category = $this->admin_add_brand_m->fetch_category();
												foreach($get_category AS $cat_get)
												{
											?>
													<option value="<?php echo $cat_get->category_id;?>"><?php echo $cat_get->category_name;?></option>
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
												<select name="sub_category" class="form-control select2-show-search sub_categoryz"  data-placeholder="Subcategory">
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
												 <input type="text" class="form-control" name="brand_name" placeholder="New Brand Name">
												</div>
											  </div>
										</div>
									  
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label class="form-label">Add Brand Code</label>
												</div>
												<div class="col-md-10">
												 <input type="text" class="form-control" name="brand_code" placeholder="New Brand Code">
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
			function add_sub(e){
				
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_add_brand/ajax_fetch_sub_category',
		        data: {'category_id': e,}, // change this to send js object
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
		<!-- Inline js -->


	</body>

</html>


