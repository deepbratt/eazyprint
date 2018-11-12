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
              <h4 class="page-title">Add Product
              </h4>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Eazycrew
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Product
                </li>
              </ol>
            </div>
			<div class="alert alert-success result_div"></div>
            <form  method="post" >
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
								<select name="country" id="select-countries" class="form-control custom-select" onchange="cat_id(this.value);">
									<option value="" selected="">Choose Category</option>
								<?php
								foreach($get_product_category as $fetch_product_category)
								{
								?>
									<option value="<?php echo $fetch_product_category->category_id;?>"><?php echo $fetch_product_category->category_name;?></option>
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
                            <select name="country" id="select-countries" class="form-control custom-select sub_categoryz" onchange="sub_id(this.value);">
                              <option value="" selected="">Choose Subcategory</option>
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
                            <select class="form-control custom-select brandz" onchange="brand_id(this.value);">
                              <option value="" selected>Choose Brand</option>
                            </select>
                          </div>
                        </div>
                      </div>

					  <div class="form-group modelz" style="display:none;">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Choose Model Number
                            </label>
                          </div>
                          <div class="col-md-10">
                            <select class="form-control custom-select modelzz" onchange="model_id(this.value);">
                              <option value="" selected>Choose model</option>
                            </select>
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
                            <input type="text" class="form-control" placeholder="Product Name" >
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
                            <input type="text" class="form-control" placeholder="Product Title">
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
                            <input type="text" class="form-control" placeholder="Product Title">
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
                            <textarea class="form-control" name="product_desc" placeholder="Enter Product Description">
                            </textarea>
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
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Color
                            </label>
                          </div>
                          <div class="col-md-10">
                            <div class="row gutters-xs">
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input name="color" type="checkbox" value="azure" class="colorinput-input" checked="">
                                  <span class="colorinput-color bg-azure">
                                  </span>
                                </label>
                              </div>
                              <div class="col-auto">
                                <label class="colorinput">
                                  <input name="color" type="checkbox" value="azure" class="colorinput-input" checked="">
                                  <span class="colorinput-color bg-azure">
                                  </span>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Size
                            </label>
                          </div>
                          <div class="col-md-10">
								<div class="selectgroup selectgroup-pills">
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
										<span class="selectgroup-button">HTML</span>
									</label>
								</div>
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Shape
                            </label>
                          </div>
                          <div class="col-md-10">
								<div class="selectgroup selectgroup-pills">
									<label class="selectgroup-item">
										<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
										<span class="selectgroup-button">HTML</span>
									</label>
								</div>
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Weight
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="number" class="form-control" placeholder="Add Product Weight">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Product Dimention
                            </label>
                          </div>
						
						<div class="col-md-4">
							<input type="text" class="form-control" name="dimension_start" placeholder="Product Height">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="dimension_end" placeholder="Product Width">
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="dimension_end" placeholder="Product Length">
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
                            <input type="number" class="form-control" placeholder="Add quantity">
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
                            <input type="number" class="form-control" placeholder="Add Wholesale Price">
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
                            <input type="number" class="form-control" placeholder="Add Retail Price">
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
                            <input type="number" class="form-control" placeholder="Add Purchase Price">
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
                            <label class="form-label">Tags
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Add Tags">
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Meta Tags
                            </label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="Add Meta Tags">
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
                            <input type="text" class="form-control" placeholder="Add Meta Keywords">
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
                            <textarea class="form-control" name="meta_desc" placeholder="Enter Meta Description">
                            </textarea>
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
    <script type="text/javascript">
		$('#cp2').colorpicker();

		function cat_id(e){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_design/ajax_fetch_sub_category',
			data: {'category_id': e,},
			type: "post",
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
			success: function(response){
			  $('.brandz').html(response);
			}
		  });
		}

		function brand_id(brand_id){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_product/ajax_fetch_model',
			data: {'brand_id': brand_id,},
			type: "post",
			success: function(response){
			  $('.modelzz').html(response);
			}
		  });
		}

		function model_id(model_id){
			$.ajax({
			url: '<?php echo base_url();?>admin_add_product/ajax_fetch_model_desc',
			data: {'model_id': model_id,},
			type: "post",
			success: function(response){
			  $('.result_div').html(response);
			}
		  });
		}
    </script>
    <!-- Timepicker js -->
    <script src="../js/jquery.timepicker.js">
    </script>
    <script src="../js/toggles.min.js">
    </script>
    <!-- Datepicker js -->
    <script src="../js/spectrum.js">
    </script>
    <script src="../js/jquery-ui.js">
    </script>
    <script src="../js/jquery.maskedinput.js">
    </script>
  </body>
</html>
