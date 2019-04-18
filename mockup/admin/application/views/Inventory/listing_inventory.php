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
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<link href="<?php echo base_url();?>css/quantity_style.css" rel="stylesheet" />
		<script src="<?php echo base_url();?>js/quantity_style.js"></script>

		<!-- Title -->
		<title>Eazyprint | Listing Inventory</title>
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
				zoom: 70%;
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
							<h4 class="page-title">View Inventory &nbsp;&nbsp; <a href="<?php echo base_url("add_inventory");?>" class="btn btn-primary">Add New</a></h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listing Inventory</li>
							</ol>
						</div>
						<div class="alert alert-success success_div" style="display:none;">
							<strong>Quantity Updated!</strong>
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
									
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Sl&nbsp;No</th>
													<th class="wd-15p">Category</th>
													<th class="wd-15p">Brand</th>
													<th class="wd-15p">Model</th>
													<th class="wd-15p">Quantity</th>
													<th class="wd-15p">Updated&nbsp;Date</th>
													<th class="wd-15p">Action</th>
												  </tr>
												</thead>
												<tbody>

												<?php
													$i = 1;											
													foreach($fetch_stock as $stock_fetch){
												?>
												  <tr>
												    <td><?php echo $i; ?></td>
													<td><?php echo ucfirst($stock_fetch->category);?></td>
													<td><?php echo ucfirst($stock_fetch->brand);?></td>
													<td><?php echo $stock_fetch->model;?></td>
													<td>
														<div class="quantity buttons_added">
								                            <input type="button" value="-" class="minus" onclick="update_quant(this.value,<?php echo $stock_fetch->inventory_id;?>);">
								                            <input type="number" step="1" min="1" max="" name="quantity" value="<?php echo $stock_fetch->qty;?>" class="input-text qty text" size="4" pattern="" id="quant_value_<?php echo $stock_fetch->inventory_id;?>" onkeyup="update_quant(this.value,<?php echo $stock_fetch->inventory_id;?>);">
								                            <input type="button" value="+" class="plus" onclick="update_quant(this.value,<?php echo $stock_fetch->inventory_id;?>);">
								                        </div>
													</td>
													<td><?php echo date('d F y H:m:s',$stock_fetch->update_date);?></td>
													<td>
														<a href="<?php echo base_url('edit_inventory/');?><?php echo $stock_fetch->inventory_id;?>"><img src="<?php echo base_url('images/Edit.png');?>" style="height:30px"></a>
													</td>
												  </tr>
												  <?php 
													$i++;
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
		<!-- Export button for tables Starts-->
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>-->
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
		<!-- Export button for tables ends-->
		<script>
			
			  $(document).ready(function() {
				$('#example').DataTable( {
					dom: 'Bfrtip',
					buttons: [
						'copy', 'csv', 'excel', 'print'
					]
				});

			});
		   

			function update_quant(quant_value,inventory_id)
			{

				var quantity = parseInt($('#quant_value_'+inventory_id+'').val());
				var value = parseInt(1);
				if(quant_value == '+'){
					var quantity_value = parseInt(quantity + value);
				}else if(quant_value == '-'){
					var quantity_value = parseInt(quantity - value);
				}
	    		 $.ajax({
			        url: '<?php echo base_url();?>listing_inventory/update_quantity',
			        data: {'inventory_id': inventory_id,'quantity':quantity_value}, // change this to send js object
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
					 $('.switch_'+inventory_id+'').html(response);
					 $('.success_div').show();
					 $('#AjaxLoader').hide();
					 $('html, body').animate({scrollTop:$('.page-header').position().top}, 'slow');
			        }
			      });
    		 /* ajax code ends*/
			}

			function change_status(product_id,product_status)
			{
    		 $.ajax({
		        url: '<?php echo base_url();?>listing_inventory/change_status',
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