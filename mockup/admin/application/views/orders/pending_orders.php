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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.png" />

		<!-- Title -->
		<title>Eazyprint | Pending Orders</title>
		<style>
			b{
				color:black;
				font-weight:1000;
				font-size:20px;
				font-family:arial;
			}
			th{
				color:black;
				font-weight:bold !important;
				font-size:20px;
				font-family:arial;
				background:#ECEEF9;
			}
			.card-body{
				zoom : 64% !important;
			}
			td{
				color:black;
				font-family:arial;
				font-size:18px;
			}
		</style>
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
							<h4 class="page-title">Pending Orders</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Pending Orders</li>
							</ol>
						</div>
						<div class="alert alert-success success_div" style="display:none;">
							<strong>Status Changed!</strong>
						</div>
						<div id="AjaxLoader" class="alert success_div" style="display:none;"><strong style="margin-left:-24px;"><img src="<?php echo base_url();?>images/ajax-loader2.gif" style="padding:5px;">Please Wait...</strong></div>
						<?php
						  if($this->session->flashdata('success')){
						?>
						  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
						<?php 
							} 
						?>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									
									<div class="card-body" style="zoom : 64% !important;">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Order&nbsp;No</th>
													<th class="wd-15p">Product&nbsp;Name</th>
													<th class="wd-15p">Product&nbsp;Image</th>
													<th class="wd-15p">Quantity</th>
													<th class="wd-15p">Payable&nbsp;Amount</th>
													<th class="wd-15p">Supplier Name</th>
											
													<th class="wd-15p">Payment Status</th>
													<th class="wd-15p">Delivery Status</th>
													<th class="wd-15p">Order Status</th>
													<th class="wd-15p">Action</th>
												  </tr>
												</thead>
												<tbody>
												<?php
													$count_pending_order = count($get_pending_orders);
													
													if($count_pending_order > 0)
													{
														foreach($get_pending_orders As $all_orders)
														{
												?>
												  <tr>
												    <td>#<?php echo $all_orders->order_id;?></td>
													<td><?php echo $all_orders->product_name;?></td>
													<td><img src="<?php echo base_url('uploads/order_images/');?><?php echo $all_orders->product_image;?>" style="height:80px;width:80px;"></td>
													<td><?php echo $all_orders->order_qty;?></td>
													<td><?php echo $all_orders->order_amount;?></td>
													<td><?php echo $all_orders->supplier_name;?></td>
													<td>
														<?php
														if($all_orders->payment_status == 'completed')
															{
																$color= "color:green";
															}
															else
															{
																$color = "color:red;";
															}


														?>
														
															<span style="<?php echo $color;?>"><?php echo $all_orders->payment_status;?></span>
													
													</td>
													<td><?php echo $all_orders->delivery_status ;?></td>
												
												
												
													<td class="switch_1">
														<label class="custom-switch">
															<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"  onchange="change_status('');">
															<span class="custom-switch-indicator"></span>
														</label>
													</td>
													<td>
														<a href="#"><img src="<?php echo base_url('images/Edit.png');?>" style="height:30px"></a>
														<a href="#"><img src="<?php echo base_url('images/Delete.png');?>" style="height:30px"></a>
													</td>
												  </tr>
												<?php
														}
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

			function change_status(product_id,product_status)
			{
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_listing_product/change_status',
		        data: {'product_id': product_id,'product_status':product_status}, // change this to send js object
		        type: "post",
		         beforeSend: function(){
		        	$('.success_div').hide();
			        $('#AjaxLoader').show();
			    },
			    complete: function(){
			    	$('.success_div').show();
			        $('#AjaxLoader').hide();
			    },
		        success: function(response){
				 $('.switch_'+product_id+'').html(response);
				 $('.success_div').show();
				 $('#AjaxLoader').hide();
				 $('html, body').animate({scrollTop:$('.page-header').position().top}, 'slow');
		        }
		      });
    		 /* ajax code ends*/
			}
		</script>


	</body>
</html>