
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Eazyprint | View Models</title>

	<?php include("metalinks.php");?>
    <!--dynamic table-->
    <link href="<?php echo base_url('css/demo_page.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('css/demo_table.css');?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('css/DT_bootstrap.css');?>" />
    
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
                <div class="col-sm-12">
              <section class="panel">
              <header class="panel-heading">
    					<div class="row">
    						<div class="col-sm-10" style="margin-top: 9px;">
    							Model Listing
    						</div>
    						<div class="col-sm-2 ">
    							<a href="<?php echo base_url();?>add_model" class="btn btn-danger pull-right">Add Model</a>
    						</div>
    					</div>
              </header>
              <div class="panel-body">
                 <?php
                if($this->session->flashdata('delete_model_successfull')){
                ?>
                  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('delete_model_successfull');?></strong> </div>
                <?php
                  }else if($this->session->flashdata('delete_model_failed')){
                ?>
                  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('delete_model_failed');?></strong> </div>
                <?php
                  }
                ?>
                <div class="adv-table">
                  <table  class="display table table-bordered table-striped" id="dynamic-table">
                    <thead>
                      <tr>
                           <th>Brand Name</th>
                           <th>Model Number</th>
                           <th>Dimension(H x W)</th>
                				   <th>Cost Price</th>
                				   <th>Quantity</th>
                				   <th>Cover Type</th>
                				   <th>Color</th>
                				   <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                          $i = 1;
                          foreach($fetch_all_models AS $all_models){
                      ?>
                      <tr class="gradeX">
                          <td>
                            <?php 
                              $brand_id = $all_models->brand_id;
                              $this->load->model('listing_model_m');
                              $get_brand_name = $this->listing_model_m->get_brand_name($brand_id);
                              echo $get_brand_name->brand_name;
                            ?>
                          </td>
                          <td><?php echo $all_models->model_number;?></td>
                				  <td><?php echo $all_models->frame_height;?> x <?php echo $all_models->frame_width;?></td>
                				  <td><?php echo $all_models->cost_price;?></td>
                				  <td><?php echo $all_models->no_pieces;?></td>
                				  <td><?php echo $all_models->cover_type;?></td>
                          <td><?php echo $all_models->colour;?></td>
                          <td>
                            <div class="form-group" style="padding-right:15px;"><a href="<?php echo base_url('edit_model/');?><?php echo $all_models->model_id;?>" class="btn btn-success" style="padding:6px 19px;">Edit</a></div>
                            <div class="form-group"><a href="<?php echo base_url('listing_model/delete_model/');?><?php echo $all_models->model_id;?>" class="btn btn-danger" style="padding:6px 19px;">Delete</a></div>
                          </td>
                      </tr>
                      <?php
                          }
                      ?>
      			       </tbody>
                  </table>
                </div>
              </div>
         </section>
      </section>
      <!--main content end-->
     
	<?php include("footer.php");?>
	</section>
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
    <script type="text/javascript" language="javascript" src="<?php echo base_url('js/jquery.dataTables.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/DT_bootstrap.js');?>"></script>
    <script src="<?php echo base_url('js/respond.min.js');?>" ></script>
    <script src="<?php echo base_url('js/jquery-migrate-1.2.1.min.js');?>"></script>
    <!--dynamic table initialization -->
    <script src="<?php echo base_url('js/dynamic_table_init.js');?>"></script>

  </body>
</html>
