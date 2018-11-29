
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Cart</title>
<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app">
<?php
$this->load->view("common/header");
?>
		<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>

						<div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">My Cart</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
		<div class="page">
			<div class="page-main">
				
				<div class="container">
					<div class="side-app">
						<div class="row row-cards shop-search">
							<div class="col-lg-12">
								<div class="card mt-5 store">
									<div class="card-status bg-success"></div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter">
											<tr>
												<td><img src="<?php echo base_url();?>images/14.png" alt="" class="h-8"></td>
												<td>Name</td>
												<td>Size</td>
												<td>Quantity</td>
												<td><strong>INR Price</strong></td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><i class="fas fa-trash fa-2x" ></i></td>
												<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
											</tr>
											<tr>
												<td><img src="<?php echo base_url();?>images/14.png" alt="" class="h-8"></td>
												<td>Name</td>
												<td>Size</td>
												<td>Quantity</td>
												<td><strong>INR Price</strong></td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><i class="fas fa-trash fa-2x" ></i></td>
												<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
											</tr>
											<tr>
												<td><img src="<?php echo base_url();?>images/14.png" alt="" class="h-8"></td>
												<td>Name</td>
												<td>Size</td>
												<td>Quantity</td>
												<td><strong>INR Price</strong></td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><i class="fas fa-trash fa-2x" ></i></td>
												<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
											</tr>
											<tr>
												<td><img src="<?php echo base_url();?>images/14.png" alt="" class="h-8"></td>
												<td>Name</td>
												<td>Size</td>
												<td>Quantity</td>
												<td><strong>INR Price</strong></td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><i class="fas fa-trash fa-2x" ></i></td>
												<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
											</tr>
											<tr>
												<td><img src="<?php echo base_url();?>images/14.png" alt="" class="h-8"></td>
												<td>Name</td>
												<td>Size</td>
												<td>Quantity</td>
												<td><strong>INR Price</strong></td>
												<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><i class="fas fa-trash fa-2x" ></i></td>
												<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
$this->load->view("common/footer");
?>
	<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
	</body>
</html>