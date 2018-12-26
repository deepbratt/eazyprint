
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
		<title>Eazyprint | Add Product Size</title>
		<style>
			.input-hidden {
			  position: absolute;
			  left: -9999px;
			}

			input[type=radio]:checked + span {
			  border: 1px solid #fff;
			  box-shadow: 0 0 3px 3px #090;

			}

			/* Stuff after this is only to make things more pretty */
			input[type=radio] + span {
			  border: 1px dashed #444;
			  width: 30px;
			  height:30px;
			  transition: 500ms all;
			}

			input[type=radio]:checked + span {
			  transform: 
				rotateZ(-10deg) 
				rotateX(10deg);
			}
			.file_upload_icon{
				background:linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
				border-radius:50% !important;
				height:53.1px;
				width:53.1px;
				margin-top:-85px;
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
							<h4 class="page-title">Add Product Size</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Product Size</li>
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
								<form  method="post" class="card" action="<?php echo base_url('admin_add_product_size');?>/add_product_size">
									<div class="card-header">
										<h3 class="card-title">Add Product Size</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Category</label>
											</div>
											<div class="col-md-10">
												<select name="category" id="" class="form-control select2-show-search" onchange="cat_id(this.value);">
													<option value="" selected="">Category</option>
													<?php
														foreach($fetch_categories As $each_cat){
													?>
													<option value="<?php echo $each_cat->category_id;?>"><?php echo ucfirst($each_cat->category_name);?></option>
													<?php
														}
													?>
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
												<select name="sub_cat" class="form-control select2-show-search sub_categoryz">
													<option value="">No Results Found</option>
												</select>
											</div>
										  </div>
										</div>
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Product Size</label>
											</div>
											<div class="col-md-10">
											 <input type="text" class="form-control" name="product_size" placeholder="New Product Size">
											</div>
										  </div>
										</div>
										<div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Dimension (mm)
												</label>
											  </div>
											  <div class="col-md-4">
													<input type="text" class="form-control pro_len" name="dimension_len" placeholder="Product length">
											  </div>
											  <div class="col-md-3">
													<input type="text" class="form-control pro_wid" name="dimension_wid" placeholder="Product Width">
											  </div>
											  <div class="col-md-3">
													<input type="text" class="form-control pro_height" name="dimension_height" placeholder="Product height">
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
			function cat_id(e){
			
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_add_product_size/ajax_fetch_sub_category',
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
	</body>

</html>


