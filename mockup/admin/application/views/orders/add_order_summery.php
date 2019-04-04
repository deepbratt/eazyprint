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
    <title>Eazyprint | Add Product
    </title>
    <link rel="stylesheet" href="<?php echo base_url('css/');?>bootstrap-tagsinput.css">
    <!-- Quantity Plugin -->
    <script src="<?php echo base_url();?>js/jquery-3.2.1.min.js">
    </script>
    <link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
    <script src="<?php echo base_url();?>js/quantity_style.js">
    </script>
    <script src="<?php echo base_url();?>js/multiupload.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js">
    </script>
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
              <h4 class="page-title">Confirm Your Order &nbsp;&nbsp; 
                <a href="<?php echo base_url("order_summery");?>" class="btn btn-primary">View Product List
                </a>
              </h4>
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
            <div class="alert alert-danger"> 
              <strong>
                <?php echo $this->session->flashdata('failed');?>
              </strong> 
            </div>
            <?php
}
if($this->session->flashdata('success')){
?>
            <div class="alert alert-success"> 
              <strong>
                <?php echo $this->session->flashdata('success');?>
              </strong> 
            </div>
            <?php
}
?>
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url('add_product/add_pro');?>">
              <div class="row">
                <div class="col-lg-12">
                  <div id="show_all_info" >
                    <div class="row" >
					<?php
						//print_r($fetch_order_product);
						
					?>
                      <div class="col-md-7 col-sm-12 col-xs-12">
                        <!--LOGIN STARTS-->
                        <!-- ORDER SUMMARY STARTS-->
                        <div class="" style="opacity:1;max-height:800px;padding:23px;background:white;box-shadow: 0 0 0 1px rgba(61,119,180,.12), 0 8px 16px 0 rgba(91,139,199,.24);">
                          <div class="row p-3">
                            <div class="col-md-3">
                              <div class="form-group">
                                <img src="<?php echo base_url('uploads/product_images/mobile_case');?>/<?php echo $fetch_order_product->raw_image;?>" style="height:150px;">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <h4>
                                  <?php echo $fetch_order_product->raw_name;?>
                                </h4>
                              </div>
                              <div class="form-group">
                                <span>Brand: <span style="font-weight:bold;"><?php echo $fetch_order_product->raw_brand;?></span>
                                </span>
                              </div>

							   <!-- <div class="form-group">
                                <span>Size: 
                                </span>
                              </div> -->
							  <?php
							  	$seller_id = $fetch_order_product->raw_added_by;
								$this->load->model('add_order_summery_m');
								$get_seller = $this->add_order_summery_m->get_seller_it($seller_id);
								$get_seller_name = $get_seller->crew_fname;
							  ?>
                              <div class="form-group">
                                <span>Seller: <span style="font-weight:bold;"><?php echo $get_seller_name;?></span>
                                </span>
                              </div>
                              <div class="form-group">
                                <span style="font-size:21px;">
                                  <i class="fas fa-rupee-sign">
                                  </i> 
                                  <?php echo $fetch_order_product->raw_retail_price;?>
                                </span>
                                <strong style="padding-left:10px;color:green;">1 Offer Available
                                </strong>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <span>Delivery in 2Days, Thursday | Free
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- ORDER SUMMARY ENDS-->
                      <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="card">
                          <div class="card-header" style="background-color:#ffe4ca;">
                            <strong class="card-title" style="color:#000;">Price Details
                            </strong>
                          </div>
                          <div class="card-body" style="padding:4px !important;">
                            <div class="table-responsive">
                              <table class="table card-table table-vcenter text-nowrap">
                                <tr>
                                  <td>Price(1 Item)
                                  </td>
                                  <td style="float:right;font-size:21px;">
                                    <i class="fas fa-rupee-sign">
                                    </i> 
                                    <?php echo $fetch_order_product->raw_retail_price;?>
                                  </td>
                                </tr>
                                <tr>
                                  <td>Delivery Charges
                                  </td>
                                  <td style="float:right;color:green;font-size:21px;;">FREE
                                  </td>
                                </tr>
                                <tr>
                                  <td>Amount Payable
                                  </td>
                                  <td style="float:right;font-size:21px;">
                                    <i class="fas fa-rupee-sign">
                                    </i> 
                                    <?php echo $fetch_order_product->raw_retail_price;?>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                  <div class="row" style="margin-top:20px;">
                    <div class="col-md-6">
                      <div class="card" style="height:160px;">
                        <div class="card-header">
                          <h3 class="card-title">Upload Order Photo
                          </h3>
                        </div>
                        <div class="card-body">
                          <div class="row" id="ml_image" style="margin-top:15px;">
                         
                            <div class="col-md-6">
                              <span onclick="product_image();" id="hide_span" class="btn btn-icon btn-primary file_upload_icon" style="margin-top:6px;">
                                <i class="fas fa-cloud-upload-alt" style="font-size:31px;">
                                </i>
                                <strong style="color:#000000;padding:10px;font-size:15px;">Upload Photo...
                                </strong>
                              </span>
                              <input style="display:none;" type="file" name="o_image" id="vpb-data-file" multiple />
                            </div>
                          </div>
                          <div class="row" id="vpb-display-preview">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Add Order Quantity
                          </h3>
                        </div>
                        <div class="card-body" style="height:100px;">
                          <div class="row" style="margin-top:15px;">
                            <div class="col-md-3">
                              <label class="form-label">Add Quantity
                                <br>
                                <span style="font-size:12px;">
                                </span>
                              </label>
                            </div>
                            <div class="col-md-9">
                              <select class="form-control" name="order_quantity"  data-dropup-auto="false" required disabled>
                                <option value=""  disabled>Choose Quantity
                                </option>
                                <option value="1"  selected >1
                                </option>
                                <option value="2" >2
                                </option>
                                <option value="3" >3
                                </option>
                                <option value="4" >4
                                </option>
                                <option value="5" >5
                                </option>
                                <option value="6" >6
                                </option>
                                <option value="7" >7
                                </option>
                                <option value="8" >8
                                </option>
                                <option value="9" >9
                                </option>
                                <option value="10" >10
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					<div class="col-md-12 text-right" >
						<div class="form-group">
							<a href="javascript:voide(0);" id="add_address_show" class="add_more" style="font-weight: bold;font-size:13px;"><i class="fas fa-plus"></i> ADD NEW <?php echo $fetch_order_product->raw_name;?> ORDER</a>
						</div>
					</div>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit" name="submit" class="btn btn-primary">Confirm Order
                  </button>
                  <button type="reset" class="btn btn-secondary">Cancel
                  </button>
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
<script src="<?php echo base_url('js/');?>bootstrap-tagsinput.js">
</script>
<script type="text/javascript">
  /* FETCH CATEGORY DATA STARTS */
  function fetch_cat_id(e){
    $.ajax({
      url: '<?php echo base_url();?>add_product/ajax_fetch_brand_data',
      data: {
        'cat_id': e,}
      ,
      type: "post",
      beforeSend: function(){
        $('#AjaxLoader_3').show();
      }
      ,
      complete: function(){
        $('#AjaxLoader_3').hide();
      }
      ,
      success: function(response){
        $('.brandz_name').html(response);
        //alert(response);
      }
    }
          );
  }
  /* FETCH CATEGORY DATA ENDS */
  /* FETCH BRAND DATA STARTS */
  function fetch_brand_data(e){
    $.ajax({
      url: '<?php echo base_url();?>add_product/ajax_fetch_raw_data',
      data: {
        'brand_id': e,}
      ,
      type: "post",
      beforeSend: function(){
        $('#AjaxLoader_4').show();
        $('#AjaxLoader_5').show();
        $('#show_raw_material').hide();
        $('#show_all_info').hide();
      }
      ,
      complete: function(){
        $('#AjaxLoader_4').hide();
        $('#AjaxLoader_5').hide();
        $('#show_raw_material').show();
      }
      ,
      success: function(response){
        $('.raw_data_info').html(response);
        //alert(response);
      }
    }
          );
  }
  /* FETCH BRAND DATA ENDS */
  /* FETCH RAW MATERIAL DATA STARTS */
  function fetch_raw_mat_data(e){
    $.ajax({
      url: '<?php echo base_url();?>add_product/fetch_raw_material_data',
      data: {
        'raw_id': e,}
      ,
      type: "post",
      dataType: 'json',
      beforeSend: function(){
        $('#AjaxLoader_6').show();
        $('#show_all_info').hide();
      }
      ,
      complete: function(){
        $('#AjaxLoader_6').hide();
        $('#show_all_info').show();
      }
      ,
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
          data: {
            'design_id': designed_by}
          ,
          type: "post",
          beforeSend: function(){
            $('#AjaxLoader_7').show();
          }
          ,
          complete: function(){
            $('#AjaxLoader_7').hide();
          }
          ,
          success: function(response){
            $('#product_designed').val(response);
            //alert(response);
          }
        }
              );
      }
    }
          );
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
          }
                              );
          fileReader.readAsDataURL(f);
        }
      }
                            );
    }
    else {
      alert("Your browser doesn't support to File API")
    }
  }
                   );
</script>

<script>
	$(document).ready(function() {

			  var max_fields      = 30; //maximum input boxes allowed
			  var wrapper         = $(".clone_row"); //Fields wrapper
			  var add_button      = $(".add_more"); //Add button ID
			  
			  var fetch_products = <?php echo json_encode($fetch_products);?>;
			  /*var get_categories = <?php echo json_encode($get_categories)?>;*/

			  var x = 1; //initlal text box count
			  $(add_button).click(function(e){ //on add input button click
					
				e.preventDefault();
				if(x < max_fields){ //max input box allowed
				  x++; //text box increment
				  var htmlz = "<td><select class='form-control select2-show-search pro_data' name='product_name' onchange='prod_datazz(this.value,"+x+");'><option value='' selected='' disabled=''>Choose Product</option></select></td><td class='text-center'><div class='quantity buttons_added'><input type='button' value='-' class='minus'><input type='number' step='1' min='1' max='' name='quantity' value='1' title='Qty' class='input-text qty text' size='4' pattern='' inputmode='' onchange='quantity_amtzz(this.value,"+x+")'><input type='button' value='+' class='plus'></div></td><td class='text-right' id='amountzz'><i class='fas fa-rupee-sign'></i><span class='pro_price_"+x+"'>0</span>x<span class='quantzz_"+x+"'>1</span></td><td class='text-center state_same gst_rate_"+x+"'>0%</td><td class='text-center state_same gst_rate_"+x+"'>0%</td><td class='text-center state_not_same gst_rate_"+x+"'>0%</td><td class='text-right' id='total_amount_"+x+"'><i class='fas fa-rupee-sign'></i><span class='card-title'>0</span></td><td class='text-center' style='border:none;'><a href='javascript:void(0);' onclick='remove_rowzz(this);'><i class='fas fa-minus-circle' style='font-size:20px;color:red;'></i></a></td>"; //add input box
				}
});
</script>
</html>
