
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

	<?php $this->load->view("metalinks");?>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datepicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/colorpicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/daterangepicker.css');?>" />
  </head>

  <body>

  <section id="container" class="">
  <?php $this->load->view("header");?>
  <?php $this->load->view("sidebar");?>
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
										 Add Brand
									</div>
									<div class="col-sm-2 ">
										<a href="<?php echo base_url();?>listing_brand" class="btn btn-default pull-right">Back</a>
									</div>
								</div>
						  </header>
              <div class="panel-body">
						  		<?php
								if($this->session->flashdata('add_brand_successfull')){
								?>
									<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('add_brand_successfull');?></strong> </div>
								<?php
									}else if($this->session->flashdata('add_brand_failed')){
								?>
									<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('add_brand_failed');?></strong> </div>
								<?php
									}
								?>
              <form class="form-horizontal tasi-form" method="post" action="<?php echo base_url('add_brand/new_brand');?>">
                  <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Brand Name</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter the brand name here" name="brand_name"> 
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
    <?php $this->load->view("footer");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('js/jquery.js');?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('js/jquery.scrollTo.min.js');?>"></script>
    <script src="<?php echo base_url('js/jquery.nicescroll.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/jquery-ui-1.9.2.custom.min.js');?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('js/jquery.dcjqaccordion.2.7.js');?>"></script>
	  <script src="<?php echo base_url('js/slidebars.min.js');?>"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url('js/common-scripts.js');?>"></script>
	  <!-- script for this page-->
	  <script src="<?php echo base_url('js/form-component.js');?>"></script>

  </body>
</html>
