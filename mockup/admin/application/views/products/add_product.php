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
    <title>Eazyprint | Add Product</title>
	  <link rel="stylesheet" href="<?php echo base_url('css/');?>bootstrap-tagsinput.css">
	<!-- Quantity Plugin -->
	<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
	<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>js/quantity_style.js"></script>
	<script src="<?php echo base_url();?>js/multiupload.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
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
	/* NEW INSERTED */
	input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 100px;
  border: 2px solid #009fdc;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #FF0000;
  border-radius: 3px;
  color: white;
  text-align: center;
  cursor: pointer;
  font-size: 12px;
  padding: 2px;
  margin-top: 5px;
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
			  <h4 class="page-title">Add Product &nbsp;&nbsp; <a href="<?php echo base_url("listing_product");?>" class="btn btn-primary">View List</a></h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Eazycrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Product
                </li>
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
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('add_product/add_pro');?>">
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
									<label class="form-label">Choose Category</label>
									<select class="form-control" name="category" onchange="fetch_cat_id(this.value);">
										<option value="" selected disabled>Category</option>
										<?php
											foreach($get_all_category As $all_category){
										?>
											<option value="<?php echo $all_category->cat_id;?>"><?php echo ucfirst($all_category->category_name);?></option>
										<?php 
											}
										?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Choose Brand</label>
									<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader_3" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
									<select class="form-control brandz_name" name="raw_brand" onchange="fetch_brand_data(this.value);">
										<option vlaue="" selected disabled>Brand</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="AjaxLoader_4" style="text-align:center;z-index: 2;display:none;">
					<h4>Please Wait...</h4>
				</div>

				<div class="card"  id="show_raw_material">
					<div class="card-header">
						<h3 class="card-title">Raw Material</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Choose Raw Metarial</label>
									<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader_5" style="float:left;margin-top:10px;margin-left:9px;position: absolute;z-index: 2;display: none;">
									<select class="form-control raw_data_info" name="raw_name" onchange="fetch_raw_mat_data(this.value);">
										<option vlaue="" selected disabled>Raw Material</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="AjaxLoader_6" style="text-align:center;z-index: 2;display:none;">
					<h4>Please Wait...</h4>
				</div>

			 	<div id="show_all_info" >
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Product Information</h3>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Name</label>
									<input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" >
							  </div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Title</label>
									<input type="text" class="form-control" id="product_title" name="product_title" placeholder="Product Title" >
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Product Desc</label>
									<textarea class="form-control" name="product_desc" id="product_desc" placeholder="Enter Product Description" ></textarea>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Product Image</h3>
							</div>
							<div class="card-body">
								<div class="row" id="ml_image" style="margin-top:15px;">
									<div class="col-md-3">
										<label class="form-label">Upload Image<br><span style="font-size:12px;">(For multiple images press ctrl.)</span></label>
									</div>
									<div class="col-md-6">
										<span onclick="product_image();" id="hide_span" class="btn btn-icon btn-primary file_upload_icon" style="margin-top:6px;"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
										<input style="display:none;" type="file" name="p_image[]" id="vpb-data-file" multiple />
									  </div>

								</div>
								<div class="row" id="vpb-display-preview"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Design Image</h3>
							</div>
							<div class="card-body">
								<div class="row" style="margin-top:15px;">
									<div class="col-md-3">
										<label class="form-label">Upload Design Image<br><span style="font-size:12px;"></span></label>
									</div>
									<div class="col-md-6">
										<!-- <span onclick="design_image();" id="hide_span" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
										<input type="file" style="display:none;" name="design_image" id="vpb-data-file-design" onchange="vpb_design_image_preview(this)"  /> -->
										<span onclick="designed_image()" id="hide_span_3" style="margin-top:-5px !important;" class="btn btn-icon btn-primary file_upload_icon">
											<i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i>
											<strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong>
										</span>
										<input type="file" name="designed" id="designed_file"  class="form-control hide_file" style="display:none;" placeholder="Add Meta Image" onchange="readURL(this);" multiple>
										<img src="" onclick="designed_image()" style="height:150px;display:none;" id="designed_blah">
									</div>
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
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Wholesale Price(in INR)</label>
									<input type="number" name="wholesale_price" id="product_wholesale" class="form-control" placeholder="Add Wholesale Price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Retail Price(in INR)</label>
									<input type="number" name="retail_price" id="product_retail" class="form-control" placeholder="Add Retail Price">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product Designed By</label>
									<img src="<?php echo base_url();?>images/ajax-loader2.gif" id="AjaxLoader_7" style="float:left;margin-top:11px;margin-left:9px;position: absolute;z-index: 2;display: none;">
									<input type="text" name="designed_by" id="product_designed" class="form-control" placeholder="Designed By" readonly>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Product SKU</label>
									<input type="text" name="p_sku" id="product_sku" class="form-control" placeholder="Add Product SKU" readonly>
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
							<span onclick="m_image()" id="hide_span_m" style="margin-top:-5px !important;" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
							<input type="file" name="meta_image" id="m_file"  class="form-control hide_file" style="display:none;" placeholder="Add Meta Image" onchange="readURL_m(this);">
						   <img src="" onclick="m_image()" style="height:150px;display:none;" id="m_blah">
						  </div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Tags</label>
									<input type="text" name="meta_tags" data-role="tagsinput" class="form-control " placeholder="Add Tags">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Meta Keywords</label>
									<input type="text" name="meta_keyword" data-role="tagsinput" class="form-control" placeholder="Add Meta Keywords">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Meta Description</label>
									<textarea class="form-control" name="meta_desc" id="product_meta_description" placeholder="Enter Meta Description"></textarea>
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
		
	/* FETCH CATEGORY DATA STARTS */
		function fetch_cat_id(e){
		  $.ajax({
		  url: '<?php echo base_url();?>add_product/ajax_fetch_brand_data',
		  data: {'cat_id': e,},
		  type: "post",
		  beforeSend: function(){
		  $('#AjaxLoader_3').show();
		  },
		  complete: function(){
			$('#AjaxLoader_3').hide();
		  },
		  success: function(response){
			$('.brandz_name').html(response);
			//alert(response);
		  }
		  }); 
		}
	/* FETCH CATEGORY DATA ENDS */
	/* FETCH BRAND DATA STARTS */
		function fetch_brand_data(e){
		  $.ajax({
		  url: '<?php echo base_url();?>add_product/ajax_fetch_raw_data',
		  data: {'brand_id': e,},
		  type: "post",
		  beforeSend: function(){
		  $('#AjaxLoader_4').show();
		  $('#AjaxLoader_5').show();
		  $('#show_raw_material').hide();
		  $('#show_all_info').hide();
		  },
		  complete: function(){
		  	$('#AjaxLoader_4').hide();
			$('#AjaxLoader_5').hide();
			$('#show_raw_material').show();
		  },
		  success: function(response){
			$('.raw_data_info').html(response);
			//alert(response);
		  }
		  }); 
		}
	/* FETCH BRAND DATA ENDS */
	/* FETCH RAW MATERIAL DATA STARTS */
		function fetch_raw_mat_data(e){
		  $.ajax({
		  url: '<?php echo base_url();?>add_product/fetch_raw_material_data',
		  data: {'raw_id': e,},
		  type: "post",
		  dataType: 'json',
		  beforeSend: function(){ 
		  $('#AjaxLoader_6').show();
		  $('#show_all_info').hide();
		  },
		  complete: function(){
		  	$('#AjaxLoader_6').hide();
		  	$('#show_all_info').show();
		  },
		  success: function(response){
			//$('.raw_data_info').html(response);
			//var result = $.parseJSON(response);
			$('#product_name').val(response.raw_name);
			$('#product_title').val(response.raw_title);
			$('#product_desc').val(response.raw_desc);
			$('#product_wholesale').val(response.raw_wholesale_price);
			$('#product_retail').val(response.raw_retail_price);
			//$('#product_designed').val(response.raw_added_by);
			$('#product_sku').val(response.raw_sku);
			$("input[name=meta_tags]").tagsinput('add', response.raw_tags);
			$("input[name=meta_keyword]").tagsinput('add', response.raw_meta_keywords);
			$('#product_meta_description').val(response.raw_meta_desc);

			var designed_by = response.raw_added_by;
			 $.ajax({
			  url: '<?php echo base_url();?>add_product/ajax_fetch_designed_id',
			  data: {'design_id': designed_by},
			  type: "post",
			  beforeSend: function(){ 
			  $('#AjaxLoader_7').show();
			  },
			  complete: function(){
			  	$('#AjaxLoader_7').hide();
			  },
			  success: function(response){
				$('#product_designed').val(response);
				//alert(response);
			  }
			  }); 
		  	}
		  }); 
		}
	/* FETCH RAW MATERIAL DATA ENDS */
	
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
	//meta image starts
	function m_image(){
		$("input[id='m_file']").click();
	}

	function readURL_m(input) {
		
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#m_blah').attr('src', e.target.result);
				
			}

			reader.readAsDataURL(input.files[0]);
			$('#m_blah').show();
			$('#hide_span_m').hide();
		}
	}
	//meta image ends

	//designed image starts
	function designed_image(){
			$("input[id='designed_file']").click();
		}

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#designed_blah').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
				$('#designed_blah').show();
				$('#hide_span_3').hide();
			}
		}
	//designed image ends

	/* MULTIPLE PRODUCT IMAGE STARTS */
		function product_image(){
			$("input[id='vpb-data-file']").click();

		}
		function design_image(){
			$("input[id='vpb-data-file-design']").click();
		}
		/*function show_image(input) {
			
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#p_blah').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
				$('#p_blah').show();
				$('#hide_span').hide();
			}
		}*/
	/* MULTIPLE PRODUCT IMAGE ENDS */
		
		/*function callapi(){
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
		}*/

  </script>
		<!---Tabs JS-->

  <script>
  $(document).ready(function() {
	  if (window.File && window.FileList && window.FileReader) {
		$("#vpb-data-file").on("change", function(e) {
		  var files = e.target.files,
			filesLength = files.length;
		  for (var i = 0; i < filesLength; i++) {
			var f = files[i]
			var fileReader = new FileReader();
			fileReader.onload = (function(e) {
			  var file = e.target;
			  $("<span class=\"pip\">" +
				"<img class=\"imageThumb\" height=\"100\" width=\"100\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
				"<br/>" +
				"</span>").insertAfter("#ml_image");
				/*$(this).parent(".pip").remove();
			    $(".remove").click(function(){
				$(this).parent(".pip").remove();
				alert(file);
			    });*/
			  
			  // Old code here
			  /*$("<img></img>", {
				class: "imageThumb",
				src: e.target.result,
				title: file.name + " | Click to remove"
			  }).insertAfter("#files").click(function(){$(this).remove();});*/
			  
			});
			fileReader.readAsDataURL(f);
		  }
		});
	  } else {
		alert("Your browser doesn't support to File API")
	  }
	});
  </script>
		
</html>
