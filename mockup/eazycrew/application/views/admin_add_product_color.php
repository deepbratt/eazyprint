
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
		<title>Eazyprint | Add Product Color</title>

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
							<h4 class="page-title">Add Product Color</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Product Color</li>
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
								<form  method="post" class="card" action="<?php echo base_url('admin_add_product_color');?>/add_product_color">
									<div class="card-header">
										<h3 class="card-title">Add Product Color</h3>
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
												<select name="sub_category" class="form-control select2-show-search sub_categoryz">
													<option value="">No Results Found</option>
												</select>
											</div>
										  </div>
										</div>
									  
										<div class="form-group">
											<div class="main_div">
											 <div class="row" style="margin-bottom:10px;">
												<div class="col-md-2">
													<label class="form-label">Product Color</label>
												</div>
												<div class="col-md-4">
												 <input type="text" class="form-control" name="product_color[]" placeholder="New Product Color Name" value="">
												</div>
												<div class="col-md-2">
												 <input type="color" class="form-control" name="color_code[]" placeholder="New Product Color Code"  style="height:42px;" value="">
												</div>
											  </div>
											</div>
											<div class="row" style="">
												<div class="col-md-3 offset-md-2">
													<a href="javascript:void(0);" onclick="add_another();" class="btn btn-primary">Add More</a>
												</div>
											</div>
										</div>

									  </div>
									<div class="card-footer text-right">
										<button type="submit" class="btn btn-primary">Submit
										</button>
										<!-- <button type="reset" class="btn btn-secondary">Cancel</button> -->
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



<script>
		function add_another() 
{
	
	var max_fields      = 5; 
    var wrapper         = $(".main_div");
	var htmlcontent = '<div class="row atrri_add_cont" style="margin-bottom:10px;"><div class="col-md-2"><label class="form-label">&nbsp;</label></div><div class="col-md-4"><input type="text" class="form-control" name="product_color[]" placeholder="New Product Color Name" value=""></div><div class="col-md-2"><input type="color" class="form-control" name="color_code[]" placeholder="New Product Color Code"  style="height:42px;" value=""></div><div class="row" style=""><div class="col-md-3"><a href="javascript:void(0);" onclick="" class="remove btn btn-danger" >Remove</a></div></div></div>';
	
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
		        url: '<?php echo base_url();?>admin_add_product_color/ajax_fetch_sub_category',
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


