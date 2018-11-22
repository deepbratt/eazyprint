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
		<title>Eazyprint | Edit Product</title>
		<link rel="stylesheet" href="<?php echo base_url('css/');?>bootstrap-tagsinput.css">
		<style>
		.label{
			margin-bottom: 0px !important;
		}
		.file_upload_icon{
			background:linear-gradient(87deg, #5e72e4 0, #825ee4 100%) !important;
			border-radius:50% !important;
			height:53.1px;
			width:53.1px;
			margin-top:-15px;
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
							<h4 class="page-title">Edit Product</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
							</ol>
						</div>
						<?php
						  if($this->session->flashdata('success')){
						?>
						  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
						<?php 
							} 
						?>
						<div class="row">
							<div class="col-lg-12">
								<div class="api" style="display:none;">
								   Api is ready to Run
								</div>
								<form  method="post" enctype="multipart/form-data" action="<?php echo base_url('admin_edit_product/update_product/');?><?php echo $this->uri->segment(2);?>">
								  <div class="row">
									<div class="col-lg-12">
									  <div class="card">
										<div class="card-header">
										  <h3 class="card-title">Product Hierarchy
										  </h3>
										</div>
										<div class=" card-body">
											<div class="form-group">
												<div class="row">
												  <div class="col-md-2">
													<label class="form-label">Choose Category
													</label>
												  </div>
												  <div class="col-md-10">
													<select name="category" id="select-countries" class="form-control custom-select" onchange="cat_id(this.value);">
														<option value="" selected="">Choose Category</option>
														<?php
														foreach($get_product_category as $fetch_product_category)
														{
														?>
															<option value="<?php echo $fetch_product_category->category_id;?>" <?php echo (($fetch_product_category->category_id == $fetch_product->product_category)?'selected':'');?>><?php echo $fetch_product_category->category_name;?></option>
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
												<label class="form-label">Choose Subcategory
												</label>
											  </div>
											  <div class="col-md-10">
											  	<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader_1" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
												<select name="sub_category" id="select-countries" class="form-control custom-select sub_categoryz" onchange="sub_id(this.value);">
												  <option value="" >Choose Subcategory</option>
												  <?php
												  foreach($get_sub_cat as $fetch_sub_cat)
												  {
												  ?>
													<option value="<?php echo $fetch_sub_cat->sub_category_id;?>" <?php echo (($fetch_sub_cat->sub_category_id == $fetch_product->product_subcategory)?'selected':'');?>><?php echo $fetch_sub_cat->sub_category_name;?></option>
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
												<label class="form-label">Choose Brand
												</label>
											  </div>
											  <div class="col-md-10"> 
											  	<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader_2" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
												<select name="brand" class="form-control custom-select brandz" onchange="brand_id(this.value);">
												  <option value="">Choose Brand</option>
												  <?php
												  foreach($get_brand as $fetch_brand)
												  {
												  ?>
													<option value="<?php echo $fetch_brand->brand_id;?>" <?php echo (($fetch_brand->brand_id == $fetch_product->product_brand)?'selected':'');?>><?php echo $fetch_brand->brand_name;?></option>
												  <?php
												  }
												  ?>
												</select>
											  </div>
											</div>
										  </div>

										  <div class="form-group modelz" style="display:<?php echo(($fetch_sub_cat->sub_category_id == '9')?'block':'none');?>;">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Choose Model Number
												</label>
											  </div>
											  <div class="col-md-10">
												<div class="form-group">
													<input class="devname form-control" type="text" value="<?php echo $fetch_product->product_model_no;?>" name="model" onkeyup="callapi();"></input> 
												</div>
											  </div>
											</div>
										  </div>


										</div>
									  </div>
									</div>
								  </div>
									
									

								  <div class="row">
									<div class="col-lg-12">
									  <div class="card">
										<div class="card-header">
										  <h3 class="card-title">Product Classification
										  </h3>
										</div>
										<div class="card-body">
								  
								   
							
										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Name
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="text" class="form-control" value="<?php echo $fetch_product->product_name;?>" name="product_name" placeholder="Product Name" >
											  </div>
											</div>
										  </div>
										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Title
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="text" class="form-control" value="<?php echo $fetch_product->product_title;?>" name="product_title" placeholder="Product Title">
											  </div>
											</div>
										  </div>

										   
										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Desc
												</label>
											  </div>
											  <div class="col-md-10">
												<textarea class="form-control" name="product_desc" placeholder="Enter Product Description"><?php echo $fetch_product->product_desc;?></textarea>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>

								  <div class="row">
									<div class="col-lg-12">
									  <div class="card">
										<div class="card-header">
										  <h3 class="card-title">Product Image
										  </h3>
										</div>
										<div class="card-body">
										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Upload Image
												</label>
											  </div>
											  <div class="col-md-10">
											  <?php
											  if($fetch_product->product_image !='')
											  {
											  ?>
												<img onclick="meta_image()" src="<?php echo base_url('uploads/product_images/');?><?php echo $fetch_product->product_image;?>" style="height:150px;" id="blah">
												<input type="file" name="image" id="my_file" style="display: none;" onchange="readURL(this);" />
											  <?php
											  }else{
											  ?>
											  	<span onclick="product_image()" id="hide_span" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
												<input type="file" name="p_image" id="p_image"  style="display:none;" class="form-control hide_p_file" placeholder="Add Product Image" onchange="show_image(this);">
											   <img src="" onclick="product_image()" style="height:150px;display:none;" id="p_blah">
											   <?php
											  }
											   ?>
											  </div>
											</div>
										  </div>
										</div>
									  </div>
									</div>
								  </div>



								  <div class="row">
									<div class="col-lg-12">
									  <div class="card">
										<div class="card-header">
										  <h3 class="card-title">Product Specification
										  </h3>
										</div>
										<div class="card-body">
										  
										  <div class="form-group materialz" style="display:<?php echo(($fetch_sub_cat->sub_category_id == '9')?'none':'block');?>;">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Material Type
												</label>
											  </div>
											  <div class="col-md-10"> 
												<select name="material_type" class="form-control custom-select materialzz">
												  <option value="">Choose Material Type</option>
												  <?php
												  foreach($get_material_type as $fetch_material_type)
												  {
												  ?>
													<option value="<?php echo $fetch_material_type->product_material_id;?>" <?php echo (($fetch_material_type->product_material_id == $fetch_product->product_material_type)?'selected':'');?>><?php echo $fetch_material_type->product_material_type;?></option>
												  <?php
												  }
												  ?>
												</select>
											  </div>
											</div>
										  </div>

										  <div class="form-group p_color" style="display:<?php echo(($fetch_sub_cat->sub_category_id == '9')?'none':'block');?>;">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Color
												</label>
											  </div>
											  <div class="col-md-10">
												<div class="row gutters-xs colorzz">
												<?php
												  if(sizeof($get_color) > 0){
												  foreach($get_color as $fetch_color){
												  ?>
													<div class="col-auto">
													  <label class="colorinput">
													    <input name="color" type="radio" value="<?php echo $fetch_color->product_color_code?>" class="colorinput-input" <?php echo (($fetch_color->product_color_code == $fetch_product->product_color)?'checked':'');?>>
													    <span class="colorinput-color" style="background-color:<?php echo $fetch_color->product_color_code;?>"></span>
													  </label>
												    </div>
												<?php
													}
												}else{
													echo "No Results Found";
												}
												?>
												</div>
											  </div>
											</div>
										  </div>

										  <div class="form-group p_size" style="display:<?php echo(($fetch_sub_cat->sub_category_id == '9')?'none':'block');?>;">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Size
												</label>
											  </div>
											  <div class="col-md-10">
												<div class="selectgroup selectgroup-pills sizezz">
												<?php
												  if(sizeof($get_size) > 0){
												  foreach($get_size as $fetch_size){
												  ?>
													<label class="selectgroup-item">
														<input type="radio" name="product_size" value="<?php echo $fetch_size->product_size_id;?>" class="selectgroup-input" <?php echo (($fetch_size->product_size_id == $fetch_product->product_size)?'checked':'');?>>
														<span class="selectgroup-button"><?php echo ucfirst($fetch_size->product_size_name);?></span>
													</label>
												<?php
													}
												}else{
													echo "No Results Found";
												}
												?>
												</div>
											  </div>
											</div>
										  </div>

										  <div class="form-group p_shape" style="display:<?php echo(($fetch_sub_cat->sub_category_id == '9')?'none':'block');?>;">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Shape
												</label>
											  </div>
											  <div class="col-md-10">
												<div class="selectgroup selectgroup-pills shapezz">
												 <?php
												  if(sizeof($get_shape) > 0){
												  foreach($get_shape as $fetch_shape){
												  ?>
													<label class="selectgroup-item">
													   <input type="radio" name="product_shape" value="<?php echo $fetch_shape->product_shape_id;?>" class="selectgroup-input" <?php echo (($fetch_shape->product_shape_id == $fetch_product->product_shapetype)?'checked':'');?>>
													   <span class="selectgroup-button"><?php echo ucfirst($fetch_shape->product_shapetype_name);?></span>
													</label>
												<?php
													}
												}else{
													echo "No Results Found";
												}
												?>
												</div>
											  </div>
											</div>
										  </div>

										  <div class="form-group p_weight">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Weight
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="text" name="product_weight" value="<?php echo $fetch_product->product_weight;?>" class="form-control" placeholder="Add Product Weight">
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Dimention (mm)
												</label>
											  </div>
											
											<div class="col-md-4">
												<input type="text" class="form-control pro_len" value="<?php echo $fetch_product->product_dimension_length;?>" name="dimension_len" placeholder="Product length">
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control pro_wid" value="<?php echo $fetch_product->product_dimension_width;?>" name="dimension_wid" placeholder="Product Width">
											</div>
											<div class="col-md-3">
												<input type="text" class="form-control pro_height" value="<?php echo $fetch_product->product_dimension_height;?>" name="dimension_height" placeholder="Product height">
											</div>
										
											  </div>
											</div>
										 

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Product Quantity
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="number" name="quantity" value="<?php echo $fetch_product->product_quantity;?>" class="form-control" placeholder="Add quantity">
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Minimum Order
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="number" name="min_order" value="<?php echo $fetch_product->min_order;?>" class="form-control" placeholder="Add Minimum Order">
											  </div>
											</div>
										  </div>
										</div>
								 
									  </div>
									</div>
								  </div>
									
								  <div class="row">
									<div class="col-lg-12">
									  <div class="card">
										<div class="card-header">
										  <h3 class="card-title">Price Specification
										  </h3>
										</div>
										<div class="card-body">

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Wholesale Price
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="number" name="wholesale_price" value="<?php echo $fetch_product->product_wholesale_price;?>" class="form-control" placeholder="Add Wholesale Price">
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Retail Price
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="number" name="retail_price" value="<?php echo $fetch_product->product_retail_price;?>" class="form-control" placeholder="Add Retail Price">
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Purchase Price
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="number" name="purchase_price" value="<?php echo $fetch_product->product_purchase_price;?>" class="form-control" placeholder="Add Purchase Price">
											  </div>
											</div>
										  </div>


										</div>
								   
									  </div>
									</div>
								  </div>

								  <div class="row">
									<div class="col-lg-12">
									  <div class="card">
										<div class="card-header">
										  <h3 class="card-title">SEO Optimization
										  </h3>
										</div>
										<div class="card-body">

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Meta Tags
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="text" name="meta_tags" data-role="tagsinput" value="<?php echo $fetch_product->tags;?>" class="form-control" placeholder="Add Tags">
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Meta Image
												</label>
											  </div>
											  <div class="col-md-10">
											  <?php
											  if($fetch_product->meta_img !='')
											  {
											  ?>
												<img onclick="meta_image()" src="<?php echo base_url('uploads/meta_images/');?><?php echo $fetch_product->meta_img;?>" style="height:150px;" id="blah">
												<input type="file" name="image" id="my_file" style="display: none;" onchange="readURL(this);" />
											  <?php
											  }else{
											  ?>
												<span onclick="meta_image()" id="hide_span_2" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
												<input type="file" name="image" id="my_file"  style="display:none;" class="form-control hide_file" placeholder="Add Meta Tags" onchange="readURL(this);">
												<img src="" onclick="meta_image()" style="height:150px;display:none;" id="blah">
											  <?php
											  }
											  ?>
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Meta Keywords
												</label>
											  </div>
											  <div class="col-md-10">
												<input type="text" name="meta_keyword" data-role="tagsinput" value="<?php echo $fetch_product->meta_keywords;?>" class="form-control" placeholder="Add Meta Keywords">
											  </div>
											</div>
										  </div>

										  <div class="form-group">
											<div class="row">
											  <div class="col-md-2">
												<label class="form-label">Meta Description
												</label>
											  </div>
											  <div class="col-md-10">
												<textarea class="form-control" name="meta_desc" placeholder="Enter Meta Description"><?php echo $fetch_product->meta_desc;?></textarea>
											  </div>
											</div>
										  </div>


										</div>
										<div class="card-footer text-right">
											<button type="submit" class="btn btn-primary">Submit
											</button>
											<button type="reset" class="btn btn-secondary">Cancel</button>
										</div>
									  </div>
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
		<script src="<?php echo base_url('js/');?>bootstrap-tagsinput.js"></script>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="https://fonoapi.freshpixl.com/assets/js/fonoapi.jquery.min.js"></script>
		<script src="<?php echo base_url('js/');?>jquery.timepicker.js"></script>
		<script src="<?php echo base_url('js/');?>toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url('js/');?>spectrum.js"></script>
		<script src="<?php echo base_url('js/');?>jquery-ui.js"></script>
		<script src="<?php echo base_url('js/');?>jquery.maskedinput.js"></script>


		<script type="text/javascript">
		$('#cp2').colorpicker();

		function cat_id(e){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_design/ajax_fetch_sub_category',
			data: {'category_id': e,},
			type: "post",
			beforeSend: function(){
				$('#AjaxLoader_1').show();
			},
			complete: function(){
				$('#AjaxLoader_1').hide();
			},
			success: function(response){
			  $('.sub_categoryz').html(response);
			}
		  });
		}

		function sub_id(sub_id){
			
			if(sub_id == '9')
			{
				$('.modelz').show();
			}else{
				$('.modelz').hide();
			}
			$.ajax({
				url: '<?php echo base_url();?>admin_add_product/ajax_fetch_brand',
				data: {'sub_id': sub_id,},
				type: "post",
				beforeSend: function(){
				$('#AjaxLoader_2').show();
				},
				complete: function(){
					$('#AjaxLoader_2').hide();
				},
				success: function(response){
				  $('.brandz').html(response);
				}
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_material_type',
				  type: 'post',
				  data: {'sub_id': sub_id,},
				  beforeSend: function(){
				$('#AjaxLoader_2').show();
				},
				complete: function(){
					$('#AjaxLoader_2').hide();
				},
				  success: function(response){
					$('.materialzz').html(response);
				  }
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_color',
				  type: 'post',
				  data: {'sub_id': sub_id,},
					beforeSend: function(){
					$('#AjaxLoader_2').show();
					},
					complete: function(){
						$('#AjaxLoader_2').hide();
					},
				  success: function(response){
					$('.colorzz').html(response);
				  }
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_size',
				  type: 'post',
				  data: {'sub_id': sub_id,},
			      beforeSend: function(){
				    $('#AjaxLoader_2').show();
				  },
				  complete: function(){
					$('#AjaxLoader_2').hide();
				  },
				  success: function(response){
					$('.sizezz').html(response);
				  }
			});
			$.ajax({
				  url: '<?php echo base_url();?>admin_add_product/ajax_fetch_shape',
				  type: 'post',
				  data: {'sub_id': sub_id,},
				  eforeSend: function(){
				    $('#AjaxLoader_2').show();
				  },
				  complete: function(){
					$('#AjaxLoader_2').hide();
				  },
				  success: function(response){
					$('.shapezz').html(response);
				  }
			});
		}

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
				$('#hide_span_2').hide();
			}
		}

		function product_image(){
			$("input[id='p_image']").click();
		}

		function show_image(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#p_blah').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
				$('#p_blah').show();
				$('#hide_span').hide();
			}
		}


		function callapi(){
			//alert("ok");
			// set token globally
			//$.fn.fonoApi.options.token = "xxx";
			$('.api').fonoApi({
				token : "86b89476caaf66eda3f21279b7711afc",
				device : $('.devname').val(),
				limit : 1,
				template : function() {

					// argument contains the data object // *returns html content
					return $.map(arguments, function(obj, i) {
						content  = obj.dimensions;
						contarr = content.split(" ");
						$('.pro_len').val(contarr[0]);
						$('.pro_wid').val(contarr[2]);
						$('.pro_height').val(contarr[4]);
					});

				}
			});

		}
    </script>
	</body>

</html>


