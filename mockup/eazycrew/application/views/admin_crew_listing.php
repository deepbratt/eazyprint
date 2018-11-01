
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico" />

		<!-- Title -->
		<title>Eazyprint | Crew Listing</title>

<?php
$this->load->view("common/metalinks");
?>
		<!-- Data table css -->
		<link href="<?php echo base_url('css');?>/dataTables.bootstrap4.min.css" rel="stylesheet" />

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
							<h4 class="page-title">Crew Listing</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Eazycrew</a></li>
								<li class="breadcrumb-item active" aria-current="page">Crew Listing</li>
							</ol>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Listing Crew</div>
									</div>
									<div class="card-body">
										<div class="alert alert-success success_div" style="display:none;">
											<strong>Status Changed!</strong>
										</div>
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Crew Name</th>
													<th class="wd-15p">Crew Email</th>
													<th class="wd-20p">Crew Role</th>
													<th class="wd-20p">Crew Joining Date</th>
													<th class="wd-20p">Crew Status</th>
													<th class="wd-15p">Action</th>
												  </tr>
												</thead>
												<tbody>
												<?php
												foreach($fetch_crew as $get_details){
												?>
												  <tr>
													<td><?php echo $get_details->crew_fname;?>&nbsp<?php echo $get_details->crew_lname;?></td>
													<td><?php echo $get_details->crew_email;?></td>
													<td><?php echo $get_details->crew_role;?></td>
													<td><?php echo date('d/m/Y',$get_details->crew_date);?></td>
													<td class="switch_<?php echo $get_details->crew_id;?>">
														<label class="custom-switch">
															<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" <?php echo (($get_details->crew_status == 1)?'checked':'');?> onchange="change_status('<?php echo $get_details->crew_id;?>','<?php echo $get_details->crew_status;?>');">
															<span class="custom-switch-indicator"></span>
														</label>
													</td>
													<td>
														<a href="<?php echo base_url('admin_edit_crew');?>/<?php echo  $get_details->crew_id;?>" class="btn btn-primary">Edit</a>
													</td>
												  </tr>
												<?php
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
		<script src="<?php echo base_url('js');?>/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url('js');?>/dataTables.bootstrap4.min.js"></script>
		<!-- Data table js -->
		<script>
			$(function(e) {
				$('#example').DataTable();
			} );

			function change_status(crew_id,crew_status)
			{
				
				
    		 $.ajax({
		        url: '<?php echo base_url();?>admin_crew_listing/change_status',
		        data: {'crew_id': crew_id,'crew_status':crew_status}, // change this to send js object
		        type: "post",
		        success: function(response){
				 $('.switch_'+crew_id+'').html(response);
				 $('.success_div').show();
		        }
		      });
    		 /* ajax code ends*/
			}
		</script>


	</body>
</html>