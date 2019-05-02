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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
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
			if($this->session->flashdata('internal_error')){
		?>
            <div class="alert alert-danger"> 
              <strong>
                <?php echo $this->session->flashdata('internal_error');?>
              </strong> 
            </div>
            <?php
}
if($this->session->flashdata('failed')){
?>
            <div class="alert alert-danger"> 
              <strong>
                <?php echo $this->session->flashdata('failed');?>
              </strong> 
            </div>
            <?php
}
?>
            
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
							
							  ?>
								<div class="form-group">
									<span>Seller: <span style="font-weight:bold;">Eazyprint</span>
									</span>
								</div>						
								<!-- <div class="form-group">
								<span>Seller: <span style="font-weight:bold;"><?php echo $get_seller_name;?></span>
								</span>
							  </div>
						 -->
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
                                  <td>Price(<span class="likes">1</span> Item)
                                  </td>
                                  <td style="float:right;font-size:21px;">
                                    <i class="fas fa-rupee-sign">
                                    </i> 
                                    <span class="bikes"><?php echo $fetch_order_product->raw_retail_price;?></span>
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
                                    <span class="hikes"><?php echo $fetch_order_product->raw_retail_price;?></span>
                                  </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
				 <form  method="post" name="form_name" id="form_id" class="form_class" >
                  <div class="row masima" style="margin-top:20px;">
					
                    <div class="col-md-6">
                      <div class="card" style="min-height:160px;">
                        <div class="card-header">
                          <h3 class="card-title">Upload Order Photo
                          </h3>
                        </div>
                        <div class="card-body">
                   		<div class="row" style="margin-top:15px;">
						  <div class="col-md-3">
							<label class="form-label">Upload Photo
							</label>
						  </div>
						  <div class="col-md-9">
							<span onclick="m_image(1)" id="hide_span_m_1" style="margin-top:-5px !important;" class="btn btn-icon btn-primary file_upload_icon"><i class="fas fa-cloud-upload-alt" style="font-size:31px;"></i><strong style="color:#000000;padding:10px;font-size:15px;">upload photo...</strong></span>
							<input type="file" name="meta_image[]" id="m_file_1" required  class="form-control hide_file" style="display:none;" placeholder="Add Meta Image" onchange="readURL_m(this,'1');">
						   <img src="" onclick="m_image(1)" style="height:150px;display:none;" id="m_blah_1">
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
                              <select class="form-control" name="order_quantity[]"  data-dropup-auto="false" required disabled>
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
							  <input type="hidden" name="raw_id" value="<?php echo $this->uri->segment(2);?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					
				
                  </div>
				  	<div class="col-md-12 text-right" >
						<div class="form-group">
							<a href="javascript:void(0);" id="kichu_ekta" class="add_morezz" style="font-weight: bold;font-size:13px;"><i class="fas fa-plus"></i> ADD NEW <?php echo $fetch_order_product->raw_name;?> ORDER</a>
						</div>
					</div>
                </div>
                <div class="card-footer text-center">
                  <button type="submit"  class="btn btn-primary" id="something" >Confirm Order
                  </button>
                  <button type="reset" onclick="show_this();" class="btn btn-secondary">Cancel
                  </button>
                </div>
				</form>
				
			  </div>
              </div>
          </div>
          
		  <div class="modal fade" id="getCodeModal" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
					  <!-- Modal content-->
					  <div class="modal-content">
						<div class="modal-header">
						 <h4 class="modal-title">Please Choose Payment Option</h4>
						  <!-- <button type="button" class="close" >&times;</button> -->
						 
						  
						</div>
						<form  action="<?php echo base_url('');?>add_order_summery/update_order" method="post">
						<div class="modal-body">
						
						 <div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="payment_option" id="inlineRadio1" value="cod" required>
						  <label class="form-check-label" for="inlineRadio1">Cash On Delivery</label>
						</div>
						<div class="form-check form-check-inline">
						  <input class="form-check-input" type="radio" name="payment_option" id="inlineRadio2" value="online" required>
						  <label class="form-check-label" for="inlineRadio2">Online Payment</label>
						</div>
					
						  <input type="hidden" id="getCode" name="order_id">
						  <input type="hidden" name="raw_id" value="<?php echo $this->uri->segment(2);?>">
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Place Order</button>
							<a href="<?php echo base_url('add_order_summery');?>"  class="btn btn-default" >Cancel Order</a>
						</div>
						</form>
					  </div>
					</div>
				  </div> 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



</script>

<script>
 $(document).ready(function() {




	var max_fields      = 5; 
	 var wrapper         = $(".masima"); 
	 var add_button      = $(".add_morezz");
	 
	  var x = 1; 
	  $(add_button).click(function(e){
		  var el = parseInt($('.likes').text());
		  $('.likes').text(el+1);
			
			var ml = el+1;
			var vl  = parseInt($('.bikes').text());
			
			var cl = parseInt($('.hikes').text());
			$('.hikes').text(ml*vl);
			
		e.preventDefault();
		if(x < max_fields){ 
		  x++; 
		  var htmlz = "<div class='col-md-12 asdad_"+x+"' style='padding:0 !important;'><div class='col-md-6' style='float:left;'><div class='card' style='min-height:160px;'><div class='card-header'><h3 class='card-title'>Upload Order Photo</h3></div><div class='card-body'><div class='row' style='margin-top:15px;'><div class='col-md-3'> <label class='form-label'>Upload Photo </label></div><div class='col-md-9'> <span onclick='m_image("+x+")' id='hide_span_m_"+x+"' style='margin-top:-5px !important;' class='btn btn-icon btn-primary file_upload_icon'><i class='fas fa-cloud-upload-alt' style='font-size:31px;'></i><strong style='color:#000000;padding:10px;font-size:15px;'>upload photo...</strong></span> <input type='file' name='meta_image[]' id='m_file_"+x+"' class='form-control hide_file' style='display:none;' placeholder='Add Meta Image' onchange='readURL_m(this,"+x+");'> <img src='' onclick='m_image("+x+")' style='height:150px;display:none;' id='m_blah_"+x+"'></div></div><div class='row' id='vpb-display-preview'></div></div></div></div><div class='col-md-6' style='float:left;'><div class='card'><div class='card-header'><h3 class='card-title col-md-10'>Add Order Quantity</h3><a href='javascript:void(0);' style='text-align:center;' class='col-md-2 text-right btn btn-danger row_removezz' onclick='row_remove("+x+");'>Remove</a></div><div class='card-body' style='height:100px;'><div class='row' style='margin-top:15px;'><div class='col-md-3'> <label class='form-label'>Add Quantity <br> <span style='font-size:12px;'> </span> </label></div><div class='col-md-9'> <select class='form-control' name='order_quantity' data-dropup-auto='false' required disabled><option value='' disabled>Choose Quantity</option><option value='1' selected >1</option><option value='2' >2</option><option value='3' >3</option><option value='4' >4</option><option value='5' >5</option><option value='6' >6</option><option value='7' >7</option><option value='8' >8</option><option value='9' >9</option><option value='10' >10</option> </select></div></div></div></div></div></div>"; //add input box
		}

		$(".masima").append(htmlz);
      });

		
      });

	  function row_remove(e){
		  var el = parseInt($('.likes').text());
		 
		  $('.likes').text(el-1);
			var ml = el-1;
			var vl  = parseInt($('.bikes').text());
			var cl = parseInt($('.hikes').text());
			$('.hikes').text(ml*vl);
			
			$(".asdad_"+e+"").remove();
		}

        $("#form_id").submit(function(e) {
			
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>add_order_summery/add_order',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(response){
						
						$("#getCode").val(response);
						 $('<button type="button" id="btnThankYou" class="hidden" data-toggle="modal" data-target="#getCodeModal" data-backdrop="static" data-keyboard="false">ThankYouButton</button>').appendTo('body');

							//This will click the button and open the modal
								$("#btnThankYou" ).trigger("click");

                   }
				  
                 });
            });

	
</script>
<script type="text/javascript">
  //meta image starts
  function m_image(x){
	
    $("input[id='m_file_"+x+"']").click();
  }
  function readURL_m(input,x) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#m_blah_'+x+'').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
      $('#m_blah_'+x+'').show();
      $('#hide_span_m_'+x+'').hide();
    }
  }
  //meta image ends

  /* MULTIPLE PRODUCT IMAGE STARTS */

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



</html>
