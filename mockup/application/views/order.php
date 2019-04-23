
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
		<title>Eazyprint | My Order</title>
<?php
$this->load->view("common/metalinks");
?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>	
				<div>
					<img src="<?php echo base_url();?>images/order_banner1.png">
				</div>
				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">My Order</h1>
								</div>
							</div>
						</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="card p-5 ">
									<div class="card-status bg-orange br-tr-3 br-tl-3"></div>
									<div class="card-title">
										My Dashboard
									</div>
									<div class="media-list">
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-box"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">My Order's</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->

										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-heart"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">My Wishlist</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-cart-plus" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">Cart</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-briefcase"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">Rewards/Giftcards</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-phone"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">Support</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
										<!-- media -->
										<div class="media mt-1 pb-2">
											<div class="mediaicon">
												<i class="fas fa-user" aria-hidden="true"></i>
											</div>
											<div class="media-body ml-5 mt-1">
												<h6 class="mediafont text-dark">My Account</h6>
											</div>
											<!-- media-body -->
										</div>
										<!-- media -->
									</div>
									<!-- media-list -->
								</div>
							</div>
						<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="card store">
								<div class="card-status bg-success"></div>
							 	<?php
								  		foreach($fetch_prod_data AS $fetch_prod_yoo){
								  	?>
								<div class="row" style="border:1px solid #cccccc;margin-top:10px;padding:20px;">
								  	<div class="col-md-1 p-1">
								  		<div class="form-group">
								  			<?php
								  				$prod_id = $fetch_prod_yoo->product_id;
								  				$fetch_prod_image = $this->order_m->prod_image_info($prod_id);
								  			?>
								  			<img src="<?php echo base_url('admin/uploads/product_images/');?><?php echo $fetch_prod_image->product_image_path;?>" style="height:140px;">
								  		</div>
								  	</div>
								  	<div class="col-md-7">
								  		<div class="form-group">
								  			<h4><?php echo $fetch_prod_yoo->product_name;?></h4>
								  		</div>
								  		
								  	
							  		
							  			<?php
											$seller_id = $fetch_prod_yoo->supplier_name;
											
							  				$fetch_supplier_name = $this->order_m->user_detailzz($seller_id);
											$count_user = count($fetch_supplier_name);
								  			if($count_user > 0){
								  		?>
								  		<div class="form-group">
								  			<span><b>Seller:</b> <?php echo $fetch_supplier_name->user_fname;?></span>
								  		</div>
								  		<?php
								  			}else{
								  		?>
								  		<div class="form-group">
								  			<span><b>Seller:</b> Eazyprint</span>
								  		</div>
								  		<?php
								  			}
								  		?>

										<div class="form-group">
								  			<span><b>Qty:</b> <?php echo $fetch_prod_yoo->order_qty;?></span>
								  		</div>
										  	
								  		<div class="form-group">
								  			<span style="font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_yoo->order_amount;?></span>
								  			<strong style="padding-left:10px;color:green;">1 Offer Available</strong>
								  		</div>
								  	</div>
								  	<div class="col-md-3">
								  		<div class="form-group">
											<a href="<?php echo base_url('my_orders/refund_process/');?><?php echo $fetch_prod_yoo->order_id;?>">Refund</a>
										</div>
										<div class="form-group">
								  			<span>Order Place on <span style="font-weight:bold;color:#e40046;"><?php echo  gmdate("d-m-Y", $fetch_prod_yoo->order_date);?></span></span>
								  		</div>

										<?php
											if($fetch_prod_yoo->delivery_date != '')
											{
										?>
								  		<div class="form-group">
								  			<span>Delivery on <span style="font-weight:bold;color:#e40046;"><?php echo  gmdate("d-m-Y", $fetch_prod_yoo->delivery_date);?></span></span>
								  		</div>
										<?php
											}
										?>
										<div class="form-group">
								  			<span>Delivery Status | <span style="font-weight:bold;color:#e40046;"><?php echo $fetch_prod_yoo->delivery_status;?></span></span>
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
				

<?php
$this->load->view("common/footer");
?>
				<script src="<?php echo base_url();?>js/timeline.min.js"></script>
				<script>
					timeline(document.querySelectorAll('.timeline'), {
						forceVerticalMode: 700,
						mode: 'vertical',
						verticalStartPosition: 'left',
						visibleItems: 4
					});
				</script>
	</body>
</html>