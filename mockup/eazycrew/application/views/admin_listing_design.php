
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
													<td><?php echo $each_designs->designed_by;?>
													</td>
													<td><a href="<?php echo base_url();?>admin_view_design/<?php echo $each_designs->design_id;?>" class="btn btn-primary">View Design</a>
														<!--<img src="<?php echo base_url();?>/uploads/designs/<?php echo $each_designs->designed_image;?>" style="height:50px;">-->
													</td>
													<td>
													<a href="<?php echo base_url();?>admin_edit_design/<?php echo $each_designs->design_id;?>" class="btn btn-primary">Edit</a>
													<a href="javascript:void(0);" class="btn btn-primary">Delete</a>
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
		</script>


	</body>
</html>