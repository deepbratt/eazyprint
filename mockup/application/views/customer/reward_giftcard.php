
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
		<title>Eazyprint | Rewards & Giftcards</title>
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
										<div class="card">
									<div class="panel panel-primary" style="height:455px;">
										<div class="tab-menu-heading">
											<div class="tabs-menu ">
												<!-- Tabs -->
												<ul class="nav panel-tabs">
													<li class=""><a href="#rewards" class="active" data-toggle="tab">Rewards</a></li>
													<li class=""><a href="#giftcards" data-toggle="tab">Giftcards</a></li>
												</ul>
											</div>
										</div>
										<div class="panel-body tabs-menu-body">
											<div class="tab-content">
												<div class="tab-pane active " id="rewards">
												 <div class="row">
													<div class="col-md-4">
													<div class="dash-box dash-box-color-1">
														<div class="dash-box-icon">
															<i class="fas fa-piggy-bank fa-2x"></i>
														</div>
														<div class="dash-box-body">
															<div class="h3 m-0 text-white">
																<b>INR 200</b>
															</div><span class="dash-box-title">Reward</span>
														</div>
														<div class="dash-box-action">
															<a class="btn btn-d" data-toggle="tooltip" data-placement="bottom" title="Apply This Reward">Apply</a>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="dash-box dash-box-color-1">
														<div class="dash-box-icon">
															<i class="fas fa-piggy-bank fa-2x"></i>
														</div>
														<div class="dash-box-body">
															<div class="h3 m-0 text-white">
																<b>INR 200</b>
															</div><span class="dash-box-title">Reward</span>
														</div>
														<div class="dash-box-action">
															<a class="btn btn-d" data-toggle="tooltip" data-placement="bottom" title="Apply This Reward">Apply</a>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="dash-box dash-box-color-1">
														<div class="dash-box-icon">
															<i class="fas fa-piggy-bank fa-2x"></i>
														</div>
														<div class="dash-box-body">
															<div class="h3 m-0 text-white">
																<b>INR 200</b>
															</div><span class="dash-box-title">Reward</span>
														</div>
														<div class="dash-box-action">
															<a class="btn btn-d" data-toggle="tooltip" data-placement="bottom" title="Apply This Reward">Apply</a>
														</div>
													</div>
												</div>
												</div>
												</div>
												<div class="tab-pane" id="giftcards">
												 <div class="row">
												 		<div class="col-md-4">
														<div class="dash-box dash-box-color-2">
															<div class="dash-box-icon">
																<i class="fas fa-chess-queen fa-2x"></i>
															</div>
															<div class="dash-box-body">
																<div class="h3 m-0 text-white">
																	<b>INR 100</b>
																</div><span class="dash-box-title">Giftcard</span>
															</div>
															<div class="dash-box-action">
																<a class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Redeem Your Giftcard" >Redeem</a>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="dash-box dash-box-color-2">
															<div class="dash-box-icon">
																<i class="fas fa-chess-queen fa-2x"></i>
															</div>
															<div class="dash-box-body">
																<div class="h3 m-0 text-white">
																	<b>INR 100</b>
																</div><span class="dash-box-title">Giftcard</span>
															</div>
															<div class="dash-box-action">
																<a class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Redeem Your Giftcard">Redeem</a>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="dash-box dash-box-color-2">
															<div class="dash-box-icon">
																<i class="fas fa-chess-queen fa-2x"></i>
															</div>
															<div class="dash-box-body">
																<div class="h3 m-0 text-white">
																	<b>INR 100</b>
																</div><span class="dash-box-title">Giftcard</span>
															</div>
															<div class="dash-box-action">
																<a class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Redeem Your Giftcard">Redeem</a>
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
				</div>
			</div>
		</div>

		<?php
		$this->load->view("common/footer");
		?>
	</body>
</html>