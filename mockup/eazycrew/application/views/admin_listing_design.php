
<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-TileColor" content="#0670f0">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Listing Design</title>

		<?php
		$this->load->view("common/metalinks");
		?>
		<!-- Data table css -->
		<link href="<?php echo base_url();?>css/dataTables.bootstrap4.min.css" rel="stylesheet" />
		<!-- Gallery Plugin -->
		<link href="<?php echo base_url();?>css/gallery.css" rel="stylesheet">
	</head>
	<body class="app sidebar-mini rtl">
		<div class="page">
			<div class="page-main">
			<?php
			$this->load->view("common/header");
			?>

			<?php
			$this->load->view("common/sidebar");
			?>

				<div class="app-content my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Design Listing</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Design Listing</li>
							</ol>
						</div>
						<div class="alert alert-success success_div" style="display:none;">
							<strong>Status Changed!</strong>
						</div>
						<?php
						  if($this->session->flashdata('success')){
						?>
						  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
						<?php 
							} 
						?>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<div class="card-title">Listing Design</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Design Id
													</th>
													<th class="wd-15p">Subcategory Name
													</th>
													<th class="wd-15p">Designed By
													</th>
													<th class="wd-20p">Design Image
													</th>
													<th class="wd-20p">Design Status
													</th>
													<th class="wd-15p">Action
													</th>
												  </tr>
												</thead>
												<tbody>
												<?php
													$i = 1;
													foreach($fetch_design_info AS $each_designs){
												?>
												  <tr>
													<td><?php echo $i;?>
													</td>
													<td>
														<?php
															$sub_cat_id = $each_designs->sub_category_id;
															$this->load->model('admin_listing_design_m');
															$fetch_sub_cat_name = $this->admin_listing_design_m->fetch_subcat($sub_cat_id);
															echo $fetch_sub_cat_name->sub_category_name;
														?>
													</td>
													<td><?php 
														$designed_id = $each_designs->designed_by;
														$fetch_name = $this->admin_listing_design_m->fetch_design_name($designed_id);
														echo $fetch_name->creator_fname.' '.$fetch_name->creator_lname;
													?>
													</td>
													<td>
														<div class="demo-gallery">
															<ul id="lightgallery_<?php echo $i;?>" class="list-unstyled row">
																<li class="col-md-12" data-responsive="<?php echo base_url();?>/uploads/designs/<?php echo $each_designs->designed_image;?>" data-src="<?php echo base_url();?>/uploads/designs/<?php echo $each_designs->designed_image;?>" data-sub-html="<h4>Designed By: <?php echo $fetch_name->creator_fname.' '.$fetch_name->creator_lname;?></h4><p>Material Color: </p>" >
																	<a href="javascript:void(0);">
																		<img src="<?php echo base_url();?>/uploads/designs/<?php echo $each_designs->designed_image;?>" style="height:150px;" class="img-responsive">
																	</a>
																</li>
															</ul>
														</div>

														<!--<img src="<?php echo base_url();?>/uploads/designs/<?php echo $each_designs->designed_image;?>" style="height:50px;">-->
													</td>
													<td class="switch_<?php echo $each_designs->design_id;?>">
														<label class="custom-switch">
															<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($each_designs->status == 1)?'checked':'');?> onchange="change_status('<?php echo $each_designs->design_id;?>','<?php echo $each_designs->status;?>');">
															<span class="custom-switch-indicator"></span>
														</label>
													</td>
													<td>
														<a href="<?php echo base_url('admin_edit_design/');?><?php echo $each_designs->design_id;?>"><img src="<?php echo base_url('images/Edit.png');?>" style="height:30px"></a>
														<a href="<?php echo base_url('admin_listing_design/delete_design/');?><?php echo  $each_designs->design_id;?>"><img src="<?php echo base_url('images/Delete.png');?>" style="height:30px"></a>
													</td>
												  </tr>
												  <?php
												  		$i++;
													}
												  ?>
												</tbody>
											  </table>
										</div>
									</div>
									<!-- table-wrapper -->
								</div>
								<!-- section-wrapper -->

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

		<!--Back to top-->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>

		<!-- Data tables -->
		<script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>js/dataTables.bootstrap4.min.js"></script>
		<!-- Data table js -->
		<script>
			$(function(e) {
				$('#example').DataTable();
			} );

			function change_status(design_id,design_status)
			{
				
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_listing_design/change_status',
		        data: {'design_id': design_id,'design_status':design_status}, // change this to send js object
		        type: "post",
		        success: function(response){
				 $('.switch_'+design_id+'').html(response);
				 $('.success_div').show();
				 $('html, body').animate({scrollTop:$('.page-header').position().top}, 'slow');
		        }
		      });
    		 /* ajax code ends*/
			}
		</script>
		<!-- Gallery js -->
		<script src="<?php echo base_url();?>js/picturefill.js"></script>
        <script src="<?php echo base_url();?>js/lightgallery.js"></script>
        <script src="<?php echo base_url();?>js/lg-pager.js"></script>
        <script src="<?php echo base_url();?>js/lg-autoplay.js"></script>
        <script src="<?php echo base_url();?>js/lg-fullscreen.js"></script>
        <script src="<?php echo base_url();?>js/lg-zoom.js"></script>
        <script src="<?php echo base_url();?>js/lg-hash.js"></script>
        <script src="<?php echo base_url();?>js/lg-share.js"></script>
        <!-- Gallery js -->
        <?php
        	$count_images = count($fetch_design_info);
        	for($i=1; $i<=$count_images;$i++){
        ?>
		<script>
            lightGallery(document.getElementById('lightgallery_<?php echo $i;?>'));
        </script>
        <?php
    		}
        ?>
	</body>
</html>