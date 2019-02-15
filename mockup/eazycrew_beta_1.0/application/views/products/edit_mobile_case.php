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
    <!-- Title -->
    <title>Eazyprint | Edit Mobile Case</title>
	  <link rel="stylesheet" href="<?php echo base_url('css/');?>bootstrap-tagsinput.css">
	<!-- Quantity Plugin -->
	<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
	<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>js/quantity_style.js"></script>
	<style>
	.card-body{
		padding: 0.5rem 1.5rem !important;
	}
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
    <?php $this->load->view('common/metalinks');?>
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
              <h4 class="page-title">Edit Mobile Case &nbsp;&nbsp;<a href="<?php echo base_url("listing_mobile_case");?>" class="btn btn-primary">View All</a></h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Eazycrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit Mobile Case </li>
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
			?>
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('edit_mobile_case/update_mobile_case/');?><?php echo $this->uri->segment(2);?>">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Classification</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Category</label>
									<input type="text" class="form-control" name="category" value="<?php echo $fetch_mobile->raw_category;?>" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Brand</label>
									<input type="text" class="form-control" name="brand" value="<?php echo $fetch_mobile->raw_brand;?>" placeholder="Type a brand">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Model No</label>
									<input type="text" class="form-control" name="p_model" value="<?php echo $fetch_mobile->raw_model_no;?>" placeholder="Type a Model No">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Information</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Name</label>
									<input type="text" class="form-control" name="product_name" value="<?php echo $fetch_mobile->raw_name;?>" placeholder="Product Name">
							  </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Title</label>
									<input type="text" class="form-control" name="product_title" value="<?php echo $fetch_mobile->raw_title;?>" placeholder="Product Title">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Product Description</label>
									<textarea class="form-control" name="product_desc" placeholder="Enter Product Description"><?php echo $fetch_mobile->raw_desc;?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Image</h3>
					</div>
					<div class="card-body">
						<div class="row" style="margin-top:15px;">
							<div class="col-md-2">
								<label class="form-label">Upload Image
								</label>
							  </div>
							  <div class="col-md-10">
							  	<?php
								if($fetch_mobile->raw_image == ''){
								?>
								<span onclick="product_image()" id="hide_span" class="btn btn-icon btn-primary file_upload_icon">
									<i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i>
									<strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong>
								</span>
								<input type="file" name="p_image" id="p_image" class="form-control hide_p_file" style="display:none;" placeholder="Add Product Image" onchange="show_image(this);" multiple="multiple" >
								<img src="" onclick="product_image()" style="height:150px;display:none;" id="p_blah">
								<?php
								}else{
								?>
									<input type="file" name="p_image" id="p_image" class="form-control hide_p_file" style="display:none;" placeholder="Add Product Image" onchange="show_image(this);" multiple="multiple" value="">
									<img src="<?php echo base_url('uploads/product_images/mobile_case/');?><?php echo $fetch_mobile->raw_image;?>" onclick="product_image()" style="height:150px;" id="p_blah">
								<?php
								}
								?>
								
							  </div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Specification</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Material Type</label>
									<input type="text" class="form-control" name="product_material_type" value="<?php echo $fetch_mobile->raw_material_type;?>" placeholder="Product Metarial Type">
							  </div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label class="form-label">Product length</label>
									<input type="text" class="form-control" name="dimension_len" value="<?php echo $fetch_mobile->raw_dimension_length;?>" placeholder="Product length">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="form-label">Product Height</label>
									<input type="text" class="form-control" name="dimension_height" value="<?php echo $fetch_mobile->raw_dimension_height;?>" placeholder="Product Height">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="form-label">Product width</label>
									<input type="text" class="form-control" name="dimension_width" value="<?php echo $fetch_mobile->raw_dimension_width;?>" placeholder="Product Width">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label class="form-label">Dimension Unit</label>
									<select name="product_dimension_unit" value="<?php echo $fetch_mobile->raw_dimension_unit;?>" class="form-control select2-show-search">
										<option value="mm">mm</option>
										<option value="cm">cm</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Product Weight</label>
									<input type="text" name="product_weight" class="form-control" value="<?php echo $fetch_mobile->raw_weight;?>" placeholder="Add Product Weight">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Weighing Unit</label>
									<select name="product_weight_unit" value="<?php echo $fetch_mobile->raw_weight_unit;?>" class="form-control select2-show-search">
										<option value="kg">kg</option>
										<option value="gm">gm</option>
									 </select>
								</div>
							</div>

	                         <div class="col-md-12 pro_colorzz">
	                         	<div class="row">
								
		                          <div class="col-md-6">
		                          	<div class="form-group">
			                           <label class="form-label">Product Color</label>
									   <?php
										$explode_color = explode(',',$fetch_mobile->raw_color);
										foreach($explode_color AS $each_color)
										{
										?>
											<div class="form-group">
			                           <input type="text" class="form-control" name="product_color[]" value="<?php echo $each_color;?>" placeholder="New Product Color Name" value="">
									   </div>
									   <?php
										}
										?>
			                          </div>
		                          </div>
								 
		                          <div class="col-md-2" style="margin-top:1.5rem;">
		                          	
										<?php
										$explode_color_code = explode(',',$fetch_mobile->raw_color_code);
										foreach($explode_color_code AS $each_color_code)
										{
										?>
											<div class="form-group">
		                           		<input type="color" class="form-control" name="color_code[]" value="<?php echo $each_color_code;?>" placeholder="New Product Color Code"  style="height:42px;" value="">
										</div>
										<?php
										}
											?>
		                           	
		                          </div>
		                          <div class="col-md-4"  style="margin-top:1.5rem;">
		                          	<div class="form-group">
		                            	<a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary">Add More</a>
		                            </div>
		                          </div>
		                        </div>
	                        </div>
	                      

							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Quantity</label>
									<input type="number" name="product_quantity" class="form-control" value="<?php echo $fetch_mobile->raw_quantity;?>" placeholder="Add quantity">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Minimum Order</label>
									<input type="number" name="min_order" class="form-control" value="<?php echo $fetch_mobile->min_order;?>" placeholder="Add Minimum Order">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Price Specification</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Wholesale Price</label>
									<input type="number" name="wholesale_price" class="form-control" value="<?php echo $fetch_mobile->raw_wholesale_price;?>" placeholder="Add Wholesale Price">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Retail Price</label>
									<input type="number" name="retail_price" class="form-control" value="<?php echo $fetch_mobile->raw_retail_price;?>" placeholder="Add Retail Price">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="form-label">Purchase Price</label>
									<input type="number" name="purchase_price" class="form-control" value="<?php echo $fetch_mobile->raw_purchase_price;?>" placeholder="Add Purchase Price">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header"  style="border-top: 1px solid #e7effc;">
						<h3 class="card-title">SEO Optimization</h3>
					</div>
					<div class="card-body">
						<div class="row" style="margin-top:15px;">
						  <div class="col-md-2">
							<label class="form-label">Meta Image
							</label>
						  </div>
						  <div class="col-md-10">
						  <?php
						  if($fetch_mobile->raw_meta_img == ''){
						  ?>
							<span onclick="meta_img()" id="hide_span_2" style="margin-top:-5px !important;" class="btn btn-icon btn-primary file_upload_icon">
								<i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i>
								<strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong>
							</span>
							<input type="file" name="meta_image" id="my_file"  class="form-control hide_file" style="display:none;"  placeholder="Add Meta Image" onchange="readURL(this);">
						    <img src="" onclick="meta_img()" style="height:150px;display:none;" id="blah">
						  <?php
						  }else{
						  ?>
							<input type="file" name="meta_image" id="my_file"  class="form-control hide_file" style="display:none;"  placeholder="Add Meta Image" onchange="readURL(this);">
						    <img src="<?php echo base_url('uploads/meta_images/');?><?php echo $fetch_mobile->raw_meta_img;?>" onclick="meta_img()" style="height:150px;" id="blah">
						  <?php
						  }
						  ?>
						  </div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Tags</label>
									<input type="text" name="meta_tags[]" data-role="tagsinput" value="<?php echo $fetch_mobile->raw_tags;?>" class="form-control" placeholder="Add Tags">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Meta Keywords</label>
									<input type="text" name="meta_keyword[]" data-role="tagsinput" value="<?php echo $fetch_mobile->raw_meta_keywords;?>" class="form-control" placeholder="Add Meta Keywords">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Meta Description</label>
									<textarea class="form-control" name="meta_desc" placeholder="Enter Meta Description"><?php echo $fetch_mobile->raw_meta_desc;?></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header"  style="border-top: 1px solid #e7effc;">
						<h3 class="card-title">GST Information</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">HSN Code</label>
									<input type="text" name="hsn_code" class="form-control" value="<?php echo $fetch_mobile->raw_hsn_code;?>" placeholder="Add HS Code">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">GST Rate(%)</label>
									<input type="text" name="gst_rate" class="form-control" value="<?php echo $fetch_mobile->raw_gst_rate;?>" placeholder="Add GST Rate">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<button type="submit" name="submit" class="btn btn-primary">Submit
					</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
				
			</div>
		  </div>
		</form>

	  </div>
          <!--footer-->
          <?php $this->load->view('common/footer');?>
          <!-- End Footer-->
        </div>
      </div>
    </div>
    <!-- Back to top -->
    <a href="#top" id="back-to-top" style="display: inline;">
      <i class="fas fa-angle-up">
      </i>
    </a>
	</body>
	<script src="<?php echo base_url('js/');?>bootstrap-tagsinput.js"></script>
    <script type="text/javascript">
		$('#cp2').colorpicker();

		

		function cat_id(e){
      if(e == '3')
      {
        $('.modelz').show();
        $('.brand_div').hide();
        $('.pro_sizez').hide();
        $('.pro_dimensionz').show();
        $('.p_shape').hide();
        
      }else{
        $('.modelz').hide();
        $('.brand_div').show();
        $('.pro_sizez').show();
        $('.pro_dimensionz').hide();
        $('.p_shape').show();
      }
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
				  beforeSend: function(){
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


		function meta_img(){
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

    function brandz_id(e){
      $.ajax({
      url: '<?php echo base_url();?>admin_add_product/ajax_fetch_brand_name',
      data: {'brand_id': e,},
      type: "post",
      beforeSend: function(){
      $('#AjaxLoader_3').show();
      },
      complete: function(){
        $('#AjaxLoader_3').hide();
      },
      success: function(response){
        $('.brandz_name').val(response);
      }
      }); 
    }

		function callapi(){
      var brand_name = $('.brandz_name').val();
      var model_number = $('.devname').val();
      var model_name = brand_name+""+model_number;
      
			// set token globally
			//$.fn.fonoApi.options.token = "xxx";
			$('.api').fonoApi({
				token : "86b89476caaf66eda3f21279b7711afc",
				device : model_name,
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
    function add_another(){
      
      var max_fields      = 5; 
      var wrapper         = $(".pro_colorzz");
      var htmlcontent = '<div class=" atrri_add_cont"><div class="row"><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" name="product_color[]" placeholder="New Product Color Name" value=""></div></div><div class="col-md-2"><div class="form-group"><input type="color" class="form-control" name="color_code[]" placeholder="New Product Color Code"  style="height:42px;" value=""></div></div><div class="col-md-4"><div class="form-group"><a href="javascript:void(0);" onclick="" class="remove btn btn-danger" >Remove</a></div></div></div></div>';
      
      var x = 1;

            if(x < max_fields){ 
              x++; 
              $(wrapper).append(htmlcontent); 
            }
      $("body").on("click",".remove",function(){ 
        $(this).parents(".atrri_add_cont").remove();
      });
    }
  </script>
		<!---Tabs JS-->
		
</html>
