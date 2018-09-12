
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Eazyprint | Add Super User</title>

	<?php include("metalinks.php");?>
    <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-fileupload.css" />
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
										 Add Super User
									</div>
									<div class="col-sm-2 ">
										<a href="<?php echo base_url();?>listing_super_user" class="btn btn-default pull-right">Back</a>
									</div>
								</div>
						  </header>
                          <div class="panel-body">
                              <form class="form-horizontal tasi-form" method="get">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the name here" name="brand_name"> 
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Phone</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" placeholder="Enter the phone number here" name="brand_name"> 
                                      </div>
                                  </div>

								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Email Id</label>
                                      <div class="col-sm-10">
                                          <input type="email" class="form-control" placeholder="Enter the email id here" name="brand_name"> 
                                      </div>
                                  </div>

								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Shipping Address</label>
                                      <div class="col-sm-10">
                                          <textarea name="shipping_address" class="form-control" placeholder="Enter the shipping address here"></textarea>
                                      </div>
                                  </div>

								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Billing Address</label>
                                      <div class="col-sm-10">
                                          <textarea name="shipping_address" class="form-control" placeholder="Enter the billing address here"></textarea>
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
	<!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

  </body>
</html>
