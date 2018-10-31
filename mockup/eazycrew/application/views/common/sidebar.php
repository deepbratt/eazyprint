<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown">
							<a class="nav-link p-0 leading-none d-flex" data-toggle="dropdown" href="#">
								<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url('images');?>/favicon.png)"></span>
								<span class="ml-2 "><span class="text-white app-sidebar__user-name font-weight-semibold"><?php echo $this->session->userdata['logged_in']['name'];?></span><br>
									<span class="text-muted app-sidebar__user-name text-sm"><?php echo $this->session->userdata['logged_in']['crew_role'];?></span>
								</span>
							</a>
							
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" href="<?php echo base_url('admin_dashboard');?>"><i class="side-menu__icon fas fa-window-restore"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-chart-bar"></i><span class="side-menu__label">Category</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="admin_listing_category.php" class="slide-item">Listing Category</a>
								</li>
								<li>
									<a href="admin_add_category" class="slide-item">Add Category</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-chart-bar"></i><span class="side-menu__label">Brand</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="admin_listing_brand.php" class="slide-item">Listing Brand</a>
								</li>
								<li>
									<a href="admin_add_brand" class="slide-item">Add Brand</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-chart-bar"></i><span class="side-menu__label">Model</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="admin_listing_model.php" class="slide-item">Listing Model</a>
								</li>
								<li>
									<a href="admin_add_model" class="slide-item">Add Model</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-chart-bar"></i><span class="side-menu__label">Product</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="admin_listing_product.php" class="slide-item">Listing Product</a>
								</li>
								<li>
									<a href="admin_add_product" class="slide-item">Add Product</a>
								</li>
							</ul>
						</li>
						
					</ul>
				</aside>