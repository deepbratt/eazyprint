
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/png"/>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>js/quantity_style.js"></script>
		<!-- Title -->
		<title>Eazyprint | Cart</title>
		<?php $this->load->view("common/metalinks"); ?>
		<style>
			body{
				color:black !important;
			}
			.table-vcenter td, .table-vcenter th{
				vertical-align: top !important;
				border-top:none !important; 
			}
			.custom-control-label:before{
				border:2px solid #7490bd !important;
			}
			.fa, .fas{
				font-size:20px !important;
			}
		</style>
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>
			<div class="container">
				<div class="side-app">
					<div class="col-md-12">
						<div class="page-header">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">My Cart</li>
								</ol>
							</div>
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="card store">
									<div class="card-body">
										<div class="row">
											<div class="col-md-9 col-sm-12 col-xs-12">
												<h4 class="">MY CART (2)</h4>
											</div>
											<div class="col-md-3 col-sm-12 col-xs-12">
												<input type="text" class="form-control" placeholder="Pincode">
											</div>
										</div>
									</div>
									<div class="row p-3">
										<div class="col-md-2">
											<div class="form-group">
												<img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="product_image" style="height:135px;">
											</div>
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<h3>Moto G5 Plus backcover</h3>
											</div>
											<div class="form-group">
												<span>Size: L</span>
											</div>
											<div class="form-group">
												<span>Seller: Eazyprint</span>
											</div>
											<div class="form-group">
												<span style="font-size:18px;"><i class="fas fa-rupee-sign"></i>499</span>
												<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
											</div>
											<div class="form-group">
												<a href="javascript:void(0);" style="color:#000;text-transform:uppercase;font-weight:bold;">Save for later</a>
												<a href="javascript:void(0);" style="padding-left:10px;color:green;text-transform:uppercase;font-weight:bold;">Remove</a>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<span>Delivery in 2Days, Thursday | Free</span>
											</div>
										</div>
									</div>
									<div class="row p-3">
										<div class="col-md-2">
											<div class="form-group">
												<img src="http://localhost/pbeazyprint/mockup/images/6598a941-fc31-4291-baef-4a984763492b.jpg" alt="product_image" style="height:135px;">
											</div>
											<div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="4" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											</div>
										</div>
										<div class="col-md-7">
											<div class="form-group">
												<h3>Moto G5 Plus backcover</h3>
											</div>
											<div class="form-group">
												<span>Size: L</span>
											</div>
											<div class="form-group">
												<span>Seller: Eazyprint</span>
											</div>
											<div class="form-group">
												<span style="font-size:18px;"><i class="fas fa-rupee-sign"></i>499</span>
												<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
											</div>
											<div class="form-group">
												<a href="javascript:void(0);" style="color:#000;text-transform:uppercase;font-weight:bold;">Save for later</a>
												<a href="javascript:void(0);" style="padding-left:10px;color:green;text-transform:uppercase;font-weight:bold;">Remove</a>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<span>Delivery in 2Days, Thursday | Free</span>
											</div>
										</div>
									</div>
									<div class="row p-3">
										<div class="col-md-12 text-right">
											<a href="javascript:void(0);" class="btn btn-white btn-lg">Continue Shopping</a>
											<a href="javascript:void(0);" class="btn btn-orange btn-lg">Place Order</a>
										</div>
									</div>
								</div>
							</div>
							<!-- RIGHT SIDE PRODUCT DETAILS STARTS-->
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-header" style="background-color:#f5f5f5">
										<strong class="card-title">Price Details</strong>
									</div>
									<div class="card-body" style="padding:4px !important;">
									  	<div class="table-responsive">
											<table class="table card-table table-vcenter text-nowrap">
												<tr>
													<td>Price(1 Item)</td>
													<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> 449</td>
												</tr>
												<tr>
													<td>Apply Coupon</td>
													<td style="float:right;"><input type="text" placeholder="coupon" class="form-control" style="width:150px;"></td>
												</tr>
												<tr>
													<td>Delivery Charges</td>
													<td style="float:right;color:green;font-size:21px;;">FREE</td>
												</tr>
												<tr>
													<td>Amount Payable</td>
													<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> 499</td>
												</tr>
											</table>
										</div>
									</div>
								</div> 
								<div class="row" style="color:#878787;">
									<div class="col-md-2">
										<img src="<?php echo base_url();?>images/shield_a7ea6b.png" style="height:45px;"> 
									</div>
									<div class="col-md-10" style="margin-left:-21px;font-weight:500;">
										Safe and Secure Payments. Easy Returns. 100% Authentic products.
									</div>
								</div>
							</div>
							<!-- RIGHT SIDE PRODUCT DETAILS ENDS-->
						</div>
					</div>
				</div>
			</div>
			<?php
			$this->load->view("common/footer");
			?>
	</body>
</html>