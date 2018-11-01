
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico" />

		<!-- Title -->
		<title>Eazyprint | Listing Product Shape</title>

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
							<h4 class="page-title">Product Shape Listing</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Product Shape Listing</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<div class="card-title">Listing Product Shape</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Product Shape Id
													</th>
													<th class="wd-15p">Product Shape
													</th>
													<th class="wd-20p">Added Date
													</th>
													<th class="wd-15p">Action
													</th>
												  </tr>
												</thead>
												<tbody>
												  <tr>
													<td>0001
													</td>
													<td>Electronics
													</td>
													<td>26/10/2018
													</td>
													<td>
													<a href="<?php echo base_url();?>admin_edit_product_shape" class="btn btn-primary">Edit</a>
													<a href="javascript:void(0);" class="btn btn-primary">Delete</a>
													</td>
												  </tr>
												  <tr>
													<td>0002
													</td>
													<td>Fashion
													</td>
													<td>26/10/2018
													</td>
													<td>
													<a href="<?php echo base_url();?>admin_edit_product_shape" class="btn btn-primary">Edit</a>
													<a href="javascript:void(0);" class="btn btn-primary">Delete</a>
													</td>
												  </tr>
												  <tr>
													<td>0003
													</td>
													<td>Gift Items
													</td>
													<td>26/10/2018
													</td>
													<td>
													<a href="<?php echo base_url();?>admin_edit_product_shape" class="btn btn-primary">Edit</a>
													<a href="javascript:void(0);" class="btn btn-primary">Delete</a>
													</td>
												  </tr>
													
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