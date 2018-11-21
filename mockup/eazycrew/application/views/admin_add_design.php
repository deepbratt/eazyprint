
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
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images')?>/favicon.png" />
		<!-- <link href="<?php echo base_url();?>css/imageuploadify.min.css" rel="stylesheet"> -->
		<link href="<?php echo base_url();?>css/custom_checkbox.css" rel="stylesheet">
		<!-- Title -->
		<title>Eazyprint | Add Design</title>
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
							<h4 class="page-title">Add Design</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Admin</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Design</li>
							</ol>
						</div>
						<div class="row">
						<div class="col-md-12">
								<form  method="post" enctype="multipart/form-data" class="card" action="<?php echo base_url('admin_add_design/add_design');?>" >
									<div class="card-header">
										<h3 class="card-title">Add Design</h3>
									</div>
									<div class="card-body">
										<?php
			                                if($this->session->flashdata('admin_add_design_success')){
			                            ?>
			                                <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('admin_add_design_success');?></strong> </div>
			                            <?php
			                                }else if($this->session->flashdata('admin_add_design_failed')){
			                            ?>
			                                <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('admin_add_design_failed');?></strong> </div>
			                            <?php
			                                }
			                            ?>
									  
										<div class="form-group">
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Category</label>
											</div>
											<div class="col-md-10">
												<select name="category" id="" class="form-control select2-show-search" onchange="cat_id(this.value);">
													<option value="" selected="">Category</option>
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
												<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
												<select name="sub_category" class="form-control select2-show-search sub_categoryz"  onchange="get_color(this.value);">
													<option value="">No Results Found</option>
												</select>
												
											</div>
										  </div>
										</div>

										<div class="form-group" >
										 <div class="row">
											<div class="col-md-2">
												<label class="form-label">Material Color</label>
											</div>
											
											<div class="col-md-10">
												<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
												<label id="not_found">No Results Found</label>
												<div class="row mat_color" style="margin-left:0px !important;"></div>
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
													<?php
														foreach($fetch_all_designer as $fetch_designer){
													?>
													<option value="<?php echo $fetch_designer->creator_id;?>"><?php echo ucfirst($fetch_designer->creator_fname);?>&nbsp;<?php echo ucfirst($fetch_designer->creator_lname);?></option>
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
													<label class="form-label">Image</label>
												</div>
												<div class="col-md-10">
													<span onclick="meta_image()" id="hide_span" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i></span>
													<input type="file" name="userfile" id="my_file" style="display: none;" onchange="readURL(this);" />
													<img style="height:150px;" id="blah" onclick="meta_image()" class="img-responsive">
												</div>
											  </div>
										</div>
										
									  
									</div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Submit</button>
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
		</body>
		<!-- Timepicker js -->
		<script src="<?php echo base_url();?>js/jquery.timepicker.js"></script>
		<script src="<?php echo base_url();?>js/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url();?>js/spectrum.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>
		<!-- <script type="text/javascript" src="<?php echo base_url();?>js/imageuploadify.min.js"></script> -->
		<script type="text/javascript">
           function meta_image(){
			$("input[id='my_file']").click();
		}

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#blah').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
				$('#blah').show();
				$('.hide_file').hide();
				$('#hide_span').hide();
			}
		}
        </script>
		<script>
			function cat_id(e){
			
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_add_design/ajax_fetch_sub_category',
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

			function get_color(sub_id)
			{
				$('#not_found').show();
				/*ajax code start*/
				 $.ajax({
					url: '<?php echo base_url();?>admin_add_design/ajax_fetch_color',
					data: {'sub_id': sub_id,}, // change this to send js object
					type: "post",
					beforeSend: function(){
			        	$('#AjaxLoader').show();
			        	$('#not_found').hide();
				    },
				    complete: function(){
				        $('#AjaxLoader').hide();
				        $('#not_found').hide();
				    },
					success: function(response){
						//alert(response);
					  	$('.mat_color').html(response);
					  	
					}
				  });
				 /* ajax code ends*/
			}

		</script>
	

</html>


