
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
		<!-- Title -->
		<title>Eazyprint | Cart</title>
		<?php
		$this->load->view("common/metalinks");
		?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
		<style>
		.sidebar_active{
			background:#009fdc !important;
		}
		.sidebar_active .text-dark{
			color:#fff !important;
			margin-top:8px !important;
		}
		</style>

	</head>
	<body class="app">
		<?php
		$this->load->view("common/header");
		?>
		<div class="container">
			<div class="side-app">
				<p>&nbsp;</p>
				<div class="row">
				<?php $this->load->view("customer/customer_sidebar");?>
					<div class="col-lg-8">
						
						<div class="card store">
									<div class="table-responsive">
										<table class="table card-table table-vcenter">
											<thead>
												<td>Product</td>
												<td>Name</td>
												<td>Quantity</td>
												<td>Price</td>
												<td colspan="2" style="text-align:center;">Action</td>
											</thead>
											<tbody>
											<?php
												foreach($fetch_prod_data AS $each_cart_data){
											?>
											<tr>
												<td>
													<?php
														$prod_id = $each_cart_data->product_id;
														$fetch_image = $this->cart_m->prod_image_info($prod_id);
													?>
													<img src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $fetch_image->product_image_path;?>" alt="" class="h-8"></td>
												<td><?php echo $each_cart_data->product_title;?></td>
												<td><?php echo $each_cart_data->qty;?></td>
												
												<td><strong><i class="fas fa-rupee-sign"></i>
													<?php 
														$price = $each_cart_data->price;
														$qty = $each_cart_data->qty;
														$total_price = $price * $qty;
														echo $total_price;
													?></strong>
												</td>

												<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><i class="fas fa-trash fa-2x" ></i></td>
												<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
											</tr>
											<?php
												}	
											?>
											</tbody>
										</table>
									</div>
								</div>
						
					</div>
				</div>
			</div>
		</div>

		<?php
		$this->load->view("common/footer");
		?>
	</body>
</html>