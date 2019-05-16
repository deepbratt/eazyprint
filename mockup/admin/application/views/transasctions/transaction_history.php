
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
		<link rel="icon" href="<?php echo base_url('images')?>/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('images')?>/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Dashboard</title>

<?php
$this->load->view("common/metalinks");
?>
	</head>
	<body class="app sidebar-mini rtl">
		<!--<div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>-->
		<div class="page">
			<div class="page-main">
<?php
$this->load->view("common/header");
?>

<?php
$this->load->view("common/sidebar");
?>

				<div class="my-3 my-md-5 app-content">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">Transaction History</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazyprint</a></li>
								<li class="breadcrumb-item active" aria-current="page">Transaction History</li>
							</ol>
						</div>
						<div class="row row-cards">

							

							<div class="col-12">
								<div class="card">
									<div class="card-status bg-pink br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<h2 class="card-title">Transaction Details</h2>
									</div>
									<div class="table-responsive">
										<table class="table table-hover table-outline table-vcenter text-nowrap card-table">
											<thead>
												<tr>
													
													<th>Transaction</th>
													<th>Summery</th>
												
													<th>Date</th>
													<th class="text-center">Amount</th>
													<th class="text-center">status</th>
													<!-- <th class="text-center"><i class="icon-settings"></i></th> -->
												</tr>
											</thead>
											<tbody>
												<?php
													$this->load->model('transaction_history_m');
													$count_order = count($get_transaction_list);
													if($count_order > 0)
													{
														$i = 1;
														foreach($get_transaction_list As $get_order_list)
														{
															if($get_order_list->order_type == 'raw' )
															{
																$raw_id = $get_order_list->product_id;
																$get_category = $this->transaction_history_m->get_category_list($raw_id);
																 $transaction_summery = $get_category->category_name;

																
															}
															else
															{
																$product_id = $get_order_list->product_id;
																$get_category_product = $this->transaction_history_m->get_product_list($product_id);
																echo $raw_id = $get_category_product->raw_id;
																$get_category_it = $this->transaction_history_m->get_category_list($raw_id);
																$transaction_summery = $get_category_it->category_name;

															}
												?>
												<tr>
													<td>
														<div>Transaction #<?php echo $i;?></div>
													</td>
													<td>
														<div> Purchase <?php echo ucfirst($transaction_summery);?></div>
													</td>
													<td>
														<div class="clearfix">
															<div class=" "><?php echo date('d/m/Y',$get_order_list->order_date);?></div>
														</div>
													
													</td>
													<td class="text-center">
														<h4>&#8377;<?php echo $get_order_list->product_price;?></h4>
													</td>

													<td class="text-center" >
														<?php
															if($get_order_list->payment_status == 'pending')
															{
														?>
														<span class="badge badge-warning" Style="padding:8px;">Pending</span>
														<?php
															}
														if($get_order_list->payment_status == 'paid')
															{
														?>
														<span class="badge badge-success" style="padding:8px;">Finished</span>
														<?php
															}
														if($get_order_list->payment_status == 'cancelled')
															{
														?>
														<span class="badge badge-danger" style="padding:8px;">Cancelled</span>
														<?php
															}
														?>
													</td>
											
													<!-- <td class="text-center">
														<div class="item-action dropdown">
															<a href="javascript:void(0)" data-toggle="dropdown" class="icon"><i class="fe fe-more-vertical"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
															<?php
																if($get_order_list->payment_status == 'pending')
																{
																	$style = "javascript:void";
																}
																else
																	{
																		$style = "";
																	}
															?>
																<a href="<?php echo base_url();?>"  class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Delete Recored! </a>
																
															</div>
														</div>
													</td> -->
												</tr>
												<?php
														$i++;
														}
													}
													?>
										
											</tbody>
										</table>
									</div>
								</div>
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

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fas fa-angle-up"></i></a>
		<!-- Timepicker js -->
		<script src="<?php echo base_url();?>js/jquery.timepicker.js"></script>
		<script src="<?php echo base_url();?>js/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url();?>js/spectrum.js"></script>
		<script src="<?php echo base_url();?>js/jquery-ui.js"></script>
		<script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>
	</body>

</html>


