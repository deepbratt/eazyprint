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
		<title>Eazyprint | Listing Product</title>

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
							<h4 class="page-title">Listing Product</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
							</ol>
						</div>
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
									<div class="card-status bg-yellow br-tr-3 br-tl-3"></div>
									<div class="card-header">
										<div class="card-title">Listing Product</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example" class="table table-striped table-bordered" style="width:100%">
												<thead>
												  <tr>
													<th class="wd-15p">Sl No</th>
													<th class="wd-15p">Category</th>
													<th class="wd-15p">Sub-Category</th>
													<th class="wd-15p">Brand</th>
													<th class="wd-15p">Product</th>
													<th class="wd-15p">Quantity</th>
													<th class="wd-15p">Meta Image</th>
													<th class="wd-15p">Last Update</th>
													<th class="wd-15p">Action</th>
												  </tr>
												</thead>
												<tbody>
												<?php
												$i = 1;
												foreach($get_products as $fetch_products){
													$get_cat = $this->admin_listing_product_m->get_cat($fetch_products->product_category);
													$get_sub_cat = $this->admin_listing_product_m->get_sub_cat($fetch_products->product_subcategory);
													$get_brand = $this->admin_listing_product_m->get_brand($fetch_products->product_brand);
												?>
												  <tr>
												    <td><?php echo $i;?></td>
													<td><?php echo ucfirst($get_cat->category_name);?></td>
													<td><?php echo ucfirst($get_sub_cat->sub_category_name);?></td>
													<td><?php echo ucfirst($get_brand->brand_name);?></td>
													<td><?php echo ucfirst($fetch_products->product_name);?></td>
													<td><?php echo $fetch_products->product_quantity;?></td>
													<td>
													<?php
													if($fetch_products->meta_img != "")
													{
													?>
														<img src="<?php echo base_url('uploads/meta_images/');?><?php echo $fetch_products->meta_img;?>" style="height:60px;width:60px;">
													<?php
													}
													?>
													</td>
													<td><?php echo date('d/m/Y',$fetch_products->updated_date);?></td>
													<td>
														<a href="<?php echo base_url('admin_edit_product/');?><?php echo $fetch_products->product_id;?>"><img src="<?php echo base_url('images/Edit.png');?>" style="height:30px"></a>&nbsp;&nbsp;
														<a href="<?php echo base_url('admin_listing_product/delete_product/');?><?php echo $fetch_products->product_id;?>"><img src="<?php echo base_url('images/Delete.png');?>" style="height:30px"></a>
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
		<script>
			$(function(e) {
				$('#example').DataTable();
			} );
		</script>


	</body>
</html>