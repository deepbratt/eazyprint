
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Eazyprint | Add Model</title>

	<?php $this->load->view("metalinks");?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datepicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/colorpicker.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/daterangepicker.css');?>" />
	<!--select 2-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/select2.min.css');?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-fileupload.css');?>" />
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
										 Add Model
									</div>
									<div class="col-sm-2 ">
										<a href="<?php echo base_url();?>listing_model" class="btn btn-default pull-right">Back</a>
									</div>
								</div>
						  </header>
              <div class="panel-body">
                <?php
                if($this->session->flashdata('update_model_successfull')){
                ?>
                  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('update_model_successfull');?></strong> </div>
                <?php
                  }else if($this->session->flashdata('update_model_failed')){
                ?>
                  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('update_model_failed');?></strong> </div>
                <?php
                  }
                ?>
                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url('edit_model/edit_new_model/');?><?php echo $this->uri->segment(2);?>" enctype="multipart/form-data">
						  	  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Brand Name</label>
                        <div class="col-sm-10">
                            <select class="js-example-basic-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="brand_name">
        										  <option value="" selected="" disabled="">Choose Brand Name</option>
                              <?php 
                                foreach($get_all_brands AS $all_brands){
                              ?>
                                   <option value="<?php echo $all_brands->brand_id;?>"<?php echo ((isset($fetch_all_models->brand_id) && $fetch_all_models->brand_id == $all_brands->brand_id)?'selected':'')?>><?php echo $all_brands->brand_name;?></option>
                              <?php
                                }
                              ?>
                            </select>
                        </div>
                  </div>
                  <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Model Number</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" placeholder="Enter the model number here" name="model_number" value="<?php echo $fetch_all_models->model_number;?>"> 
                      </div>
                  </div>
							  <div class="form-group last">
								  <label class="control-label col-sm-2">Frame Image</label>
								  <div class="col-sm-8">
									  <div class="fileupload fileupload-new" data-provides="fileupload">
									    <div class="col-sm-4">
										  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                       <?php
                        if(isset($fetch_all_models->frame_image) && $fetch_all_models->frame_image != ''){
                       ?>
											     <img src="<?php echo base_url();?>uploads/<?php echo $fetch_all_models->frame_image;?>" alt="">
                        <?php
                          }else{
                        ?>
                           <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                        <?php
                          }
                        ?>
										  </div>
										  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
										</div>
										  <div class="col-sm-8">
										   <span class="btn btn-white btn-file">
												<span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
												<span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
												<input type="file" class="default" name="image">
										   </span>
											  <!--<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>-->
										  </div>
									  </div>
								  </div>
							  </div>
                
							  <div class="form-group">
                    <label class="col-sm-2 control-label">Dimension</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Enter the height here" name="height" value="<?php echo $fetch_all_models->frame_height;?>">
                    </div>
								  <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="Enter the width here" name="width" value="<?php echo $fetch_all_models->frame_width;?>"> 
                    </div>
                </div>
							  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Cost Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter the cost price here" name="cost_price" value="<?php echo $fetch_all_models->cost_price;?>"> 
                    </div>
                </div>
							  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Number of pieces</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter the number of pieces here" name="number_of_pieces" value="<?php echo $fetch_all_models->no_pieces;?>"> 
                    </div>
                </div>
							  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Type of covers</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter the type of cover here" name="cover_type" value="<?php echo $fetch_all_models->cover_type;?>"> 
                    </div>
                </div>
							  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Colour</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter the colour here" name="color" value="<?php echo $fetch_all_models->colour;?>"> 
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
    <script src="<?php echo base_url('js/advanced-form-components.js');?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-fileupload.js');?>"></script>
  	<script type="text/javascript" src="<?php echo base_url('js/select2.min.js');?>"></script>
  	<!--this page  script only-->
  	<script type="text/javascript">
        $(document).ready(function () {
            $(".js-example-basic-single").select2();

            $(".js-example-basic-multiple").select2();
        });
    </script>
  </body>
</html>
