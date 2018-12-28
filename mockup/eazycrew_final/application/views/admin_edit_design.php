
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
		<link href="<?php echo base_url();?>css/custom_checkbox.css" rel="stylesheet">
		<!-- Title -->
		<title>Eazyprint | Edit Design</title>
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
							<h4 class="page-title">Edit Design</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Admin</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Design</li>
							</ol>
						</div>
						<div class="row">
						<div class="col-md-12">
								<form  method="post" class="card" action="<?php echo base_url('admin_edit_design/update_design');?>/<?php echo $this->uri->segment(2);?>" enctype="multipart/form-data">
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
												<?php
													$sub_cat = $fetch_design_info->sub_category_id;
													$get_cat = $this->admin_edit_design_m->get_cat($sub_cat);
													$cat_id = $get_cat->category_id;
												?>
												<select name="category" id="" class="form-control select2-show-search" onchange="cat_id(this.value);">
													<option value="" selected="">Choose Category</option>
													<?php
														foreach($fetch_all_categories As $each_cat){
													?>
													<option value="<?php echo $each_cat->category_id;?>"<?php echo (($each_cat->category_id == $cat_id)?'selected':'')?>><?php echo ucfirst($each_cat->category_name);?></option>
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
												<select name="sub_category" class="form-control select2-show-search sub_categoryz" onchange="get_color(this.value);">
													<?php
														$get_resul_sub = $this->admin_edit_design_m->ajax_fetch_subcategories($cat_id);
														if($get_resul_sub == ''){
														foreach($get_resul_sub AS $each_subcat){
													?>
														<option value="<?php echo $each_subcat->sub_category_id;?>" <?php echo (($each_subcat->sub_category_id == $fetch_design_info->sub_category_id)?'selected':'')?>><?php echo $each_subcat->sub_category_name;?></option>
													<?php
														}
													}else{
													?>
														<option value="">No Results Found</option>
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
												<label class="form-label">Material Color</label>
											  </div>
											  <div class="col-md-10">
											  	<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader2" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
												<div class="row mat_color" id="material_colorzz" style="margin-left:0px !important;">
													<?php
													$fetch_colors = $this->admin_edit_design_m->fetch_color($sub_cat);
														foreach($fetch_colors AS $each_colors){
													
													?>
													<label class="custom-container">
														<input name="color" type="radio" value="<?php echo $each_colors->product_color_code;?>" class="colorinput-input" <?php echo (($each_colors->product_color_code == $fetch_design_info->designed_color)?'checked':'');?>>
														<span class="checkmark" style="background-color:<?php echo $each_colors->product_color_code;?>"></span>
													</label>
												
												<?php
													}
												?>
												</div>
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
													<option value="" selected="" disabled="">Choose Designer</option>
													<?php
														foreach($fetch_all_designer AS $each_designer){
													?>
														<option value="<?php echo $each_designer->creator_id;?>" <?php echo (($fetch_design_info->designed_by == $each_designer->creator_id)?'selected':'')?>><?php echo ucfirst($each_designer->creator_fname);?>&nbsp;<?php echo ucfirst($each_designer->creator_lname);?>
														</option>
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
														<input type="file" name="image" id="my_file" style="display: none;" onchange="readURL(this);" />
														<?php
															if($fetch_design_info->designed_image != ''){
														?>
												 			<img src="<?php echo base_url();?>uploads/designs/<?php echo $fetch_design_info->designed_image;?>" onclick="meta_image()" style="height:120px;padding-top:15px;" id="blah">
												 		<?php
												 			}else{
												 		?>
												 			<span onclick="meta_image()" id="hide_spanz" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
												 		<?php
												 			}
												 		?>
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
		<!--<script type="text/javascript" src="<?php echo base_url();?>js/imageuploadify.min.js"></script>
		<script type="text/javascript">
            $(document).ready(function() {
                $('input[type="file"]').imageuploadify();
            })
        </script>-->
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
					$('#hide_spanz').show();
	            }
	        }
	    </script>
		<script>
			function cat_id(e){
			/*ajax code start*/
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_edit_design/ajax_fetch_sub_category',
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
				
				/*ajax code start*/
				 $.ajax({
					url: '<?php echo base_url();?>admin_edit_design/ajax_fetch_color',
					data: {'sub_id': sub_id,}, // change this to send js object
					type: "post",
					beforeSend: function(){
			        	$('#AjaxLoader2').show();
			        	$('#not_found').hide();
			        	$('#material_colorzz').hide();
				    },
				    complete: function(){
				        $('#AjaxLoader2').hide();
				        $('#not_found').show();
				        $('#material_colorzz').show();
				    },
					success: function(response){
						//alert(response);
					  $('.mat_color').html(response);
					}
				  });
				 /* ajax code ends*/
			}
		</script>
	</body>

</html>


