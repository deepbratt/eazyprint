
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
        background:#f5365c !important;
		border-radius: 25px;
      }
	  .mediaicon_active{
	    border: 1px solid #fff;
        background: #fff;
        color: #F5365C;
	  }
	  .mediafont:hover {
	   color: #F5365C !important;
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
						<div class="card store" style="min-height:250px;">
							<?php
								if(!empty($fetch_prod_data)){
							?>
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
									
										foreach($fetch_prod_data AS $key=>$each_cart_data){
									?>
									<tr>
										<td>
											<?php
												$prod_id = $each_cart_data->product_id;
												$fetch_prod_data = $this->cart_m->prod_data($prod_id);
												if($each_cart_data->product_type == 'readymade'){
											?>
												<img src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $fetch_prod_data->product_image_path;?>" alt="" class="h-8">
											<?php
												}else if($each_cart_data->product_type == 'customised'){
											?>
												<img src="<?php echo base_url('admin/uploads/custom_images/');?><?php echo $each_cart_data->design_image;?>" alt="" class="h-8">
											<?php
												}
											?>
										</td>
										<td><?php
											if($each_cart_data->product_type == 'readymade'){
												echo $fetch_prod_data->product_title;
											}else if($each_cart_data->product_type == 'customised'){
												echo "Customized ";
												$fetch_cat_name = $this->cart_m->cat_data($each_cart_data->raw_category);
								  				echo $fetch_cat_name->category_name;
											}
										?></td>
										<td><?php echo $total_each_mat_qty[$key];?></td>
										
										<td><strong><i class="fas fa-rupee-sign"></i>
											<?php echo $total_payable[$key];?></strong>
										</td>

										<td class="text-right text-muted d-none d-md-table-cell text-nowrap"><a href="<?php echo base_url('cart/remove_cart/');?><?php echo $each_cart_data->cart_id;?>"><i class="fas fa-trash fa-2x" ></i></a></td>

										<td class="text-right text-white d-none d-md-table-cell text-nowrap"><a class="btn btn-sm btn-primary" href="<?php echo base_url('checkout/delivery_address');?>"><i class="fas fa-shopping-cart"></i> Checkout</a></td>
									</tr>
									<?php
										}
									?>
									</tbody>
								</table>
							</div>
							<?php
								}else{
							?>
								<div class="table-responsive" style="text-align:center;">
									<img src="<?php echo base_url('images/empty-cart.jpg');?>" style="height:100%;">
								</div>
							<?php
								}
							?>
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