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
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
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
                  <a href="#">Elements
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Breadcrumbs
                </li>
              </ol>
            </div>
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
								<select name="country" id="select-countries" class="form-control custom-select">
								  <option value="" selected="">Choose Category
								  </option>
								  <option value="Electronics">Electronics
								  </option>
								  <option value="Fashion">Fashion
								  </option>
								  <option value="Gift Items" >Gift Items
								  </option>
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
                            <select name="country" id="select-countries" class="form-control custom-select">
                              <option value="" selected="">Choose Subcategory
                              </option>
                              <option value="Phone Case">Phone Case
                              </option>
                              <option value="Mugs">Mugs
                              </option>
                              <option value="T-Shirt" >T-Shirt
                              </option>
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
                            <select class="form-control custom-select">
                              <option value="" selected>Choose Brand
                              </option>
                              <option value="Nokia">Nokia
                              </option>
                              <option value="Samsung">Samsung
                              </option>
                            </select>
                          </div>
                        </div>
                      </div>

					  <div class="form-group">
                        <div class="row">
                          <div class="col-md-2">
                            <label class="form-label">Choose Model Number
                            </label>
                          </div>
                          <div class="col-md-10">
                            <select class="form-control custom-select">
                              <option value="" selected>Choose model
                              </option>
                              <option value="3110">3110
                              </option>
                              <option value="C6">C6
                              </option>
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
                      <div class="d-flex">
                        <a href="javascript:void(0)" class="btn btn-link">Cancel
                        </a>
                        <button type="submit" class="btn btn-primary ml-auto">Submit
                        </button>
                      </div>
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
