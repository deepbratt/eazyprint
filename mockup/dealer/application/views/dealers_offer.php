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
		<title>Eazyprint | Offers</title>
		<?php $this->load->view("common/metalinks");?>
	</head>
	<body class="app">

				<?php $this->load->view("common/header");?>
				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">Coupon/Offer</h1>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row">
							<?php $this->load->view("common/dealers_sidebar");?>
							<div class="col-lg-8">
								<div class="card">
									<div class="card-body p-6">
										<div class="panel panel-primary">
											<div class="tab-menu-heading">
												<div class="tabs-menu ">
													<!-- Tabs -->
													<ul class="nav panel-tabs">
														<li class=""><a href="#tab1" class="active" data-toggle="tab">Coupon</a></li>
														<li><a href="#tab2" data-toggle="tab">Offers</a></li>
													</ul>
												</div>
											</div>
											<div class="panel-body tabs-menu-body">
												<div class="tab-content">
													<div class="tab-pane active " id="tab1">
														<div class="col-lg-12">
															<div class="table-responsive">
																<table class="table card-table table-vcenter">
																	<tbody>
																	<tr>
																		<th class="w-1"></th>
																		<th>Name</th>
																		<th class="d-none d-sm-table-cell">Product Purchased</th>
																		<th class="d-none d-md-table-cell">Amount</th>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-cash-multiple text-red" style="font-size:30px;"></i></td>
																		<td>Jane Pearson</td>
																		<td class="d-none d-sm-table-cell">February 10, 2018</td>
																		<td class="d-none d-md-table-cell">$1616.70</td>
																	</tr>
																	</tbody>
																</table>
															</div>
															<ul class="pagination ">
																<li class="page-item page-prev disabled">
																	<a class="page-link" href="#" tabindex="-1">Prev</a>
																</li>
																<li class="page-item active"><a class="page-link" href="#">1</a></li>
																<li class="page-item"><a class="page-link" href="#">2</a></li>
																<li class="page-item"><a class="page-link" href="#">3</a></li>
																<li class="page-item"><a class="page-link" href="#">4</a></li>
																<li class="page-item"><a class="page-link" href="#">5</a></li>
																<li class="page-item page-next">
																	<a class="page-link" href="#">Next</a>
																</li>
															</ul>
														</div>
													</div>
													<div class="tab-pane  " id="tab2">
														<div class="col-lg-12">
															<div class="row">
																<?php
																for($i = 1;$i <=6 ;$i++){
																?>
																<div class="col-md-4">
																	<div class="dash-box dash-box-color-2">
																		<div class="dash-box-icon">
																			<i class="fas fa-chess-queen fa-2x"></i>
																		</div>
																		<div class="dash-box-body">
																			<div class="h3 m-0 text-white">
																				<b>1263</b>
																			</div><span class="dash-box-title">Total Winners</span>
																		</div>
																		<div class="dash-box-action">
																			<a class="btn btn-warning" data-toggle="modal" data-target="#largeModal">More Info</a>
																		</div>
																	</div>
																</div>
																<?php
																}
																?>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="largeModal" class="modal fade">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content ">
						<div class="modal-header pd-x-20">
							<h6 class="modal-title">Message Preview</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body pd-20">
							<h5 class=" lh-3 mg-b-20"><a href="" class="font-weight-bold">Why We Use Electoral College, Not Popular Vote</a></h5>
							<p class="">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
						</div><!-- modal-body -->
						<div class="modal-footer">
							<button type="button" class="btn btn-primary">Save changes</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->
			<?php $this->load->view("common/footer");?>
				
	</body>
</html>