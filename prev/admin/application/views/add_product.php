
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Eazyprint | Add Product</title>

	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
	<!--select 2-->
    <link rel="stylesheet" type="text/css" href="css/select2.min.css"/>

  </head>

  <body>

  <section id="container" class="">
     <?php include("header.php");?>
      <?php include("sidebar.php");?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start--> 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                           <header class="panel-heading">
								<div class="row">
									<div class="col-sm-10" style="margin-top: 9px;">
										 Add Product
									</div>
									<div class="col-sm-2 ">
										<a href="<?php echo base_url();?>listing_product" class="btn btn-default pull-right">Back</a>
									</div>
								</div>
						  </header>
              <div class="panel-body">
                 <?php
                if($this->session->flashdata('add_product_successfull')){
                ?>
                  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('add_product_successfull');?></strong> </div>
                <?php
                  }else if($this->session->flashdata('add_product_failed')){
                ?>
                  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('add_product_failed');?></strong> </div>
                <?php
                  }
                ?>
                  <form class="form-horizontal tasi-form" method="post" action="<?php echo base_url('add_product/add_new_product');?>" enctype="multipart/form-data">
                      <div class="form-group">
                          <label class="col-sm-2 control-label">Brand Name</label>
                          <div class="col-sm-10">
                              <select class="js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="brand_name">
        											  <option value="" selected="" disabled="">Choose Brand Name</option>
                                <?php
                                  foreach($get_all_brands AS $fetch_brands){
                                ?>
        											  <option value="<?php echo $fetch_brands->brand_id;?>"><?php echo $fetch_brands->brand_name;?></option>
        											  <?php
                                    }
                                ?>
        										  </select>
                          </div>
                      </div>
								  <div class="form-group">
                  <label class="col-sm-2 control-label">Model Number</label>
                  <div class="col-sm-10">
                      <select class="js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="model_number">
											  <option value="" selected="" disabled="">Choose Model Number</option>
											  <?php
                          foreach($get_all_models AS $fetch_models){
                        ?>
                        <option value="<?php echo $fetch_models->model_id;?>"><?php echo $fetch_models->model_number;?></option>
                        <?php
                            }
                        ?>
										  </select>
                      </div>
                  </div>
								  
								  <div class="form-group last">
									  <label class="control-label col-sm-2">Image Upload</label>
									  <div class="col-sm-8">
										  <div class="fileupload fileupload-new" data-provides="fileupload">
											  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
												  <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
											  </div>
											  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
											  <div>
											   <span class="btn btn-white btn-file">
													<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
													<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
													<input type="file" class="default" name="image">
											   </span>
												  <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
											  </div>
										  </div>
									  </div>
								  </div>
								  <div class="form-group pull-right">
								  	<div class="col-sm-12 ">
										<button type="reset" class="btn btn-info">Reset</button>
										<button type="submit" class="btn btn-info">Submit</button>
									</div>
								  </div>
                              </form>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
    
     <?php include("footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
	<script src="js/slidebars.min.js"></script>
    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
	<script type="text/javascript" src="js/bootstrap-fileupload.js"></script>
	<!--select2-->
	<script type="text/javascript" src="js/select2.min.js"></script>
	<!--this page  script only-->
	<script src="js/advanced-form-components.js"></script>

	<script type="text/javascript">

      $(document).ready(function () {
          $(".js-example-basic-single").select2();

          $(".js-example-basic-multiple").select2();
      });
  </script>
  </body>
</html>
