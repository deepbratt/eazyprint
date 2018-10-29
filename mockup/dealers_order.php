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
		<link rel="icon" href="images/favicon.png" type="image/png"/>
		<link rel="shortcut icon" type="image/png" href="images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Dealers Orders</title>
		<?php include("metalinks.php");?>
		<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	</head>
	<body class="app">

				<?php include("header.php");?>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">My Orders</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row">
							<?php
							include("dealers_sidebar.php");
							?>
							<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
									<!-- <div class="card-header">
										<div class="card-title">Data Tables</div>
									</div> -->
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th class="wd-15p">First name</th>
														<th class="wd-15p">Last name</th>
														<th class="wd-20p">Position</th>
														<th class="wd-15p">Start date</th>
														<th class="wd-10p">Salary</th>
														<th class="wd-25p">E-mail</th>
														<th class="wd-25p">Action</th>
													</tr>
												</thead>
												<tbody>
												<?php
												for($i = 1;$i <=6 ;$i++){
												?>
													<tr>
														<td>Bella</td>
														<td>Chloe</td>
														<td>System Developer</td>
														<td>2018/03/12</td>
														<td>$654,765</td>
														<td>b.Chloe@datatables.net</td>
														<td><a href="dealers_view_order.php" class="btn btn-primary">View Order</a></td>
													</tr>
												<?php
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
						</div>
					</div>
				</div>

				<?php include("footer.php");?>
				<script src="js/jquery.dataTables.min.js"></script>
				<script src="js/dataTables.bootstrap4.min.js"></script>
				<script>
					$(function(e) {
						$('#example').DataTable();
					} );
				</script>
				
	</body>
</html>