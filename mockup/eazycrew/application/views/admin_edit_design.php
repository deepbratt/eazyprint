
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
		<link href="<?php echo base_url();?>css/imageuploadify.min.css" rel="stylesheet">
		<!-- Title -->
		<title>Eazyprint | Edit Design</title>

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
							<h4 class="page-title">Edit Design</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Admin</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Design</li>
							</ol>
						</div>
						<div class="row">
						<div class="col-md-12">
								<form  method="post" class="card" action="<?php echo base_url('admin_edit_design/update_design');?>" enctype="multipart/form-data">
									<div class="card-header">
										<h3 class="card-title">Edit Design</h3>
									</div>
									<div class="card-body">
										<?php
			                                if($this->session->flashdata('admin_edit_design_success')){
			                            ?>
			                                <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('admin_edit_design_success');?></strong> </div>
			                            <?php
			                                }else if($this->session->flashdata('admin_edit_design_failed')){
			                            ?>
			                                <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('admin_edit_design_failed');?></strong> </div>
			                            <?php
			                                }
			                            ?>
									  
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Category</label>
											</div>
											<div class="col-md-10">
												<select name="category" id="" class="form-control custom-select" onchange="cat_id(this.value);">
													<option value="" selected="">Choose Category</option>
													<?php
														foreach($fetch_all_categories As $each_cat){
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
												<select name="sub_category" class="form-control custom-select sub_categoryz">
													<?php
														foreach($fetch_all_subcategories AS $each_subcat){
													?>
													<option value="<?php echo $each_subcat->sub_category_id;?>" <?php echo (($each_subcat->sub_category_id == $fetch_design_info->sub_category_id)?'selected':'')?>><?php echo $each_subcat->sub_category_name;?></option>
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
													<label class="form-label">Designed By</label>
												</div>
												<div class="col-md-10">
												 <select name="designed_by" class="form-control custom-select">
													<option value="" selected="">Choose Designer</option>
													<option value="Pipon Das" <?php echo (($fetch_design_info->designed_by == 'Pipon Das')?'selected':'')?>>Pipon Das</option>
													<option value="Rajdeep Ghosh" <?php echo (($fetch_design_info->designed_by == 'Rajdeep Ghosh')?'selected':'')?>>Rajdeep Ghosh</option>
													<option value="Shuvradeb Mondal" <?php echo (($fetch_design_info->designed_by == 'Shuvradeb Mondal')?'selected':'')?>>Shuvradeb Mondal</option>
													<option value="Himadri Majumder" <?php echo (($fetch_design_info->designed_by == 'Himadri Majumder')?'selected':'')?>>Himadri Majumder</option>
													<option value="Sujit Sarkar" <?php echo (($fetch_design_info->designed_by == 'Sujit Sarkar')?'selected':'')?>>Sujit Sarkar</option>
													<option value="Debashis Nath" <?php echo (($fetch_design_info->designed_by == 'Debashis Nath')?'selected':'')?>>Debashis Nath</option>
												</select>
												</div>
											  </div>
										</div>
									
									  
										<div class="form-group">
											<div class="row">
												<div class="col-md-2">
													<label class="form-label">Image</label>
												</div>
												<div class="col-md-10">
												 <input type="file" class="form-control" name="userfile[]" accept="image/*" multiple="multiple" value=""/>
												 <img src="<?php echo base_url();?>uploads/designs/<?php echo $fetch_design_info->designed_image;?>" style="height:120px;">
												</div>
											  </div>
										</div>

									</div>
									<div class="card-footer text-right">
										<div class="d-flex">
											<button type="reset" class="btn btn-link">Cancel</button>
											<button type="submit" class="btn btn-primary ml-auto">Update</button>
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
		<script type="text/javascript" src="<?php echo base_url();?>js/imageuploadify.min.js"></script>
		<script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
        </script>
		<script>
			function cat_id(e){
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_edit_design/ajax_fetch_sub_category',
		        data: {'category_id': e,}, // change this to send js object
		        type: "post",
		        success: function(response){
		          $('.sub_categoryz').html(response);
		        }
		      });
    		 /* ajax code ends*/
    	}
		</script>
	</body>

</html>


