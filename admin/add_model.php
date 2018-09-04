
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Eazyprint | Add Brand</title>

	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
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
										 Add Model
									</div>
									<div class="col-sm-2 ">
										<a href="listing_model.php" class="btn btn-default pull-right">Back</a>
									</div>
								</div>
						  </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="get">
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Model Number</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the model number here" name="brand_name"> 
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Cost Price</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the cost price here" name="brand_name"> 
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Number of pieces</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the number of pieces here" name="brand_name"> 
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Type of covers</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the type of cover here" name="brand_name"> 
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Colour</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the colour here" name="brand_name"> 
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
	<!-- script for this page-->
	<script src="js/form-component.js"></script>

  </body>
</html>
