
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
		<title>Eazyprint | Listing Brand</title>
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
				zoom: 65%;
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
							<h4 class="page-title">Brand Listing</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Brand Listing</li>
							</ol>
						</div>
						<div class="alert alert-success success_div" style="display:none;">
							<strong>Status Changed!</strong>
						</div>
						<div id="AjaxLoader" class="alert success_div" style="display:none;"><strong style="margin-left:-24px;"><img src="<?php echo base_url();?>images/ajax-loader2.gif" style="padding:5px;">Please Wait...</strong></div>
						<?php
						  if($this->session->flashdata('failed')){
						?>
						  <div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
						<?php
						  }
						  if($this->session->flashdata('success')){
						?>
						  <div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
						<?php } ?>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Brand Id
													</th>
													<th class="wd-15p">Category Name
													</th>
													<th class="wd-15p">Subcategory Name
													</th>
													<th class="wd-15p">Brand Name
													</th>
													<th class="wd-15p">Brand Code
													</th>
													<th class="wd-15p">Status
													</th>
													<th class="wd-15p">Action
													</th>
												  </tr>
												</thead>
												<tbody>
												<?php
												$i = 1;
												foreach($brand_fetch AS $fetch_brand)
												{
												?>
												  <tr>
													<td><?php echo $i;?>
													</td>
													<td>
													<?php 
														$sub_category = $fetch_brand->sub_category;
														$get_sub_name = $this->admin_listing_brand_m->fetch_subcategory_name($sub_category);

														$get_cat_name = $this->admin_listing_brand_m->fetch_category_name($get_sub_name->parent_cat_id);
														echo ucfirst($get_cat_name->category_name);
													?>
													</td>
													<td>
													<?php 
														echo ucfirst($get_sub_name->sub_category_name);
													?>
													</td>
													<td><?php echo $fetch_brand->brand_name;?>
													</td>
													<td><?php echo $fetch_brand->brand_code;?>
													</td>
													<td class="switch_<?php echo $fetch_brand->brand_id;?>">
														<label class="custom-switch">
															<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($fetch_brand->brand_status == 1)?'checked':'');?> onchange="change_status('<?php echo $fetch_brand->brand_id;?>','<?php echo $fetch_brand->brand_status;?>');">
															<span class="custom-switch-indicator"></span>
														</label>
													</td>
													<td>
														<a href="<?php echo base_url('admin_edit_brand/');?><?php echo $fetch_brand->brand_id;?>"><img src="<?php echo base_url('images/Edit.png');?>" style="height:30px"></a>&nbsp;&nbsp;

														<a href="<?php echo base_url('admin_listing_brand/dlt_brand/');?><?php echo $fetch_brand->brand_id;?>"><img src="<?php echo base_url('images/Delete.png');?>" style="height:30px"></a>
													</td>
												  </tr>
												 <?php $i++; } ?>
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

			function change_status(brand_id,brand_status)
			{
				
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_listing_brand/change_status',
		        data: {'brand_id': brand_id,'brand_status':brand_status}, // change this to send js object
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
				 $('.switch_'+brand_id+'').html(response);
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