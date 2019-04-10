<div class="col-md-4 col-sm-12 col-xs-12">
	<div class="card p-5 ">
		<div class="media-list">
			<!-- orders -->
			<div class="media mt-1 p-2 <?php echo(($this->uri->segment(1) == 'orders')?'sidebar_active':'');?>">
				<div class="mediaicon <?php echo(($this->uri->segment(1) == 'orders')?'mediaicon_active':'');?>">
					<i class="fas fa-box"></i>
				</div>
				<div class="media-body ml-5 mt-1">
					<a href="<?php echo base_url('orders');?>"><h6 class="mediafont text-dark">Orders</h6></a>
				</div>
			</div>
			<!-- orders -->
			<!-- wishlist -->
			<!-- <div class="media mt-1 p-2 <?php echo(($this->uri->segment(1) == 'wishlist')?'sidebar_active':'');?>">
				<div class="mediaicon">
					<i class="fas fa-heart"></i>
				</div>
				<div class="media-body ml-5 mt-1">
					<a href="<?php echo base_url('wishlist');?>"><h6 class="mediafont text-dark">Wishlist</h6></a>
				</div>
			</div> -->
			<!-- wishlist -->
			<!-- cart -->
			<div class="media mt-1 p-2 <?php echo(($this->uri->segment(1) == 'cart')?'sidebar_active':'');?>">
				<div class="mediaicon <?php echo(($this->uri->segment(1) == 'cart')?'mediaicon_active':'');?>">
					<i class="fas fa-cart-plus" aria-hidden="true"></i>
				</div>
				<div class="media-body ml-5 mt-1">
					<a href="<?php echo base_url('cart');?>"><h6 class="mediafont text-dark">Cart</h6></a>
				</div>
			</div>
			<!-- cart -->
			<!-- rewards -->
			<!-- <div class="media mt-1 p-2 <?php echo(($this->uri->segment(1) == 'rewards')?'sidebar_active':'');?>">
				<div class="mediaicon">
					<i class="fas fa-briefcase"></i>
				</div>
				<div class="media-body ml-5 mt-1">
					<a href="<?php echo base_url('rewards');?>"><h6 class="mediafont text-dark">Rewards/Giftcards</h6></a>
				</div>
			</div> -->
			<!-- rewards -->
			<!-- support -->
			<!--<div class="media mt-1 pb-2 <?php echo(($this->uri->segment(1) == 'support')?'sidebar_active':'');?>">
				<div class="mediaicon">
					<i class="fas fa-phone"></i>
				</div>
				<div class="media-body ml-5 mt-1">
					<a href="<?php echo base_url('support');?>"><h6 class="mediafont text-dark">Support</h6></a>
				</div>
			</div>-->
			<!-- support -->
			<!-- account -->
			<div class="media mt-1 p-2 <?php echo(($this->uri->segment(1) == 'account')?'sidebar_active':'');?>">
				<div class="mediaicon <?php echo(($this->uri->segment(1) == 'account')?'mediaicon_active':'');?>">
					<i class="fas fa-user" aria-hidden="true"></i>
				</div>
				<div class="media-body ml-5 mt-1">
					<a href="<?php echo base_url('account');?>"><h6 class="mediafont text-dark">Account</h6></a>
				</div>
			</div>
			<!-- account -->
		</div>
	</div>
</div>