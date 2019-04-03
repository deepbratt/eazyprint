<!-- RIGHT SIDE PRODUCT DETAILS STARTS-->
	<div class="col-md-5 col-sm-12 col-xs-12">
		<div class="card">
			<div class="card-header" style="background-color:#ffe4ca;">
				<strong class="card-title" style="color:#000;">Price Details</strong>
			</div>
			<div class="card-body" style="padding:4px !important;">
			  	<div class="table-responsive">
					<table class="table card-table table-vcenter text-nowrap">
						<tr>
							<td>Price(1 Item)</td>
							<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_data->product_retail_price;?></td>
						</tr>
						<tr>
							<td>Apply Coupon</td>
							<td style="float:right;"><input type="text" placeholder="coupon" class="form-control" style="width:150px;"></td>
						</tr>
						<tr>
							<td>Delivery Charges</td>
							<td style="float:right;color:green;font-size:21px;;">FREE</td>
						</tr>
						<tr>
							<td>Amount Payable</td>
							<td style="float:right;font-size:21px;"><i class="fas fa-rupee-sign"></i> <?php echo $fetch_prod_data->product_retail_price;?></td>
						</tr>
					</table>
				</div>
			</div>
		</div> 
		<div class="row" style="color:#878787;">
			<div class="col-md-2">
				<img src="<?php echo base_url();?>images/shield_a7ea6b.png" style="height:45px;"> 
			</div>
			<div class="col-md-10" style="margin-left:-21px;font-weight:500;">
				Safe and Secure Payments. Easy Returns. 100% Authentic products.
			</div>
		</div>
	</div>
	<!-- RIGHT SIDE PRODUCT DETAILS ENDS-->