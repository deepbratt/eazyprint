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
			  <h4 class="page-title">Confirm Your Order &nbsp;&nbsp; <a href="<?php echo base_url("order_summery");?>" class="btn btn-primary">View Product List</a></h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Eazycrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Confirm Order
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

    


			 	<div id="show_all_info" >
	
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Upload Order Photo</h3>
							</div>
							<div class="card-body">
								<div class="row" id="ml_image" style="margin-top:15px;">
									<div class="col-md-3">
										<label class="form-label">Upload Image<br><span style="font-size:12px;">(For multiple images press ctrl.)</span></label>
									</div>
									<div class="col-md-6">
										<span onclick="product_image();" id="hide_span" class="btn btn-icon btn-primary file_upload_icon" style="margin-top:6px;"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">Choose File...</strong></span>
										<input style="display:none;" type="file" name="o_image[]" id="vpb-data-file" multiple />
									  </div>

								</div>
								<div class="row" id="vpb-display-preview"></div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<h3 class="card-title">Add Order Quantity</h3>
							</div>
							<div class="card-body" style="height:100px;">
								<div class="row" style="margin-top:15px;">
									<div class="col-md-3">
										<label class="form-label">Add Quantity<br><span style="font-size:12px;"></span></label>
									</div>
									<div class="col-md-9">
										<select class="form-control" name="order_quantity"  data-dropup-auto="false" required>
											<option vlaue="" selected disabled>Choose Quantity</option>
											<option vlaue="1" >1</option>
											<option vlaue="2" >2</option>
											<option vlaue="3" >3</option>
											<option vlaue="4" >4</option>
											<option vlaue="5" >5</option>
											<option vlaue="6" >6</option>
											<option vlaue="7" >7</option>
											<option vlaue="8" >8</option>
											<option vlaue="9" >9</option>
											<option vlaue="10" >10</option>
													
										</select>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

	
				<div class="card-footer text-center">
					<button type="submit" name="submit" class="btn btn-primary">Confirm Order
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
