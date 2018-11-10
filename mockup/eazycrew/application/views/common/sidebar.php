<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown">
							<a class="nav-link p-0 leading-none d-flex" data-toggle="dropdown" href="#">
								<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url('images');?>/favicon.png)"></span>
								<span class="ml-2 "><span class="text-white app-sidebar__user-name font-weight-semibold"><?php echo $this->session->userdata['logged_in']['name'];?></span><br>
									<i class="fas fa-user-graduate" style="padding-right:5px;"></i><span class="text-muted app-sidebar__user-name text-sm"><?php echo $this->session->userdata['logged_in']['crew_role'];?></span>
								</span>
							</a>
							
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_dashboard')?'active':'');?>" href="<?php echo base_url('admin_dashboard');?>"><i class="far fa-address-card" style="padding-right:5px;"></i><span class="side-menu__label">Dashboard</span></a>
						</li>
						<?php
						if($this->session->userdata['logged_in']['crew_role'] == 'admin')
						{
						?>
						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> Crew Member</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_crew');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_crew')?'active_sidebar_submenu':'');?>">Add Crew Member</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_crew');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_crew')?'active_sidebar_submenu':'');?>">View Crew Members</a>
								</li>
							</ul>
						</li>
						<?php
						}
						?>
						<li class="sidebar_header">
                            <h5 class="sidebar_header_uppercase">Category</h5>
                        </li>
						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_category' || $this->uri->segment(1) == 'admin_listing_category' ||$this->uri->segment(1) == 'admin_edit_category')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_category' || $this->uri->segment(1) == 'admin_listing_category' ||$this->uri->segment(1) == 'admin_edit_category')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-newspaper" style="padding-right:5px;"></i><span class="side-menu__label">Category</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_category');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_category')?'active_sidebar_submenu':'');?>">Add Category</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_category');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_category')?'active_sidebar_submenu':'');?>">View Category</a>
								</li>
							</ul>
						</li>

						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_sub_category' || $this->uri->segment(1) == 'admin_listing_sub_category' ||$this->uri->segment(1) == 'admin_edit_sub_category')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_sub_category' || $this->uri->segment(1) == 'admin_listing_sub_category' ||$this->uri->segment(1) == 'admin_edit_sub_category')?'active':'');?>" data-toggle="slide" href="#"><i class="fab fa-buromobelexperte" style="padding-right:5px;"></i><span class="side-menu__label">Sub Category</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_sub_category');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_sub_category')?'active_sidebar_submenu':'');?>">Add Sub Category</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_sub_category');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_sub_category')?'active_sidebar_submenu':'');?>">View Sub Category</a>
								</li>
							</ul>
						</li>

						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_brand' || $this->uri->segment(1) == 'admin_listing_brand' ||$this->uri->segment(1) == 'admin_edit_brand')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_brand' || $this->uri->segment(1) == 'admin_listing_brand' ||$this->uri->segment(1) == 'admin_edit_brand')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-street-view" style="padding-right:5px;"></i><span class="side-menu__label">Brand</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_brand');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_brand')?'active_sidebar_submenu':'');?>">Add Brand</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_brand');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_brand')?'active_sidebar_submenu':'');?>">View Brand</a>
								</li>
							</ul>
						</li>
						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_design' || $this->uri->segment(1) == 'admin_listing_design' ||$this->uri->segment(1) == 'admin_edit_design')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_design' || $this->uri->segment(1) == 'admin_listing_design' ||$this->uri->segment(1) == 'admin_edit_design')?'active':'');?>" data-toggle="slide" href="#"><i class="far fa-object-ungroup" style="padding-right:5px;"></i><span class="side-menu__label">Design</span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_design');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_design')?'active_sidebar_submenu':'');?>">Add Design</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_design');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_design')?'active_sidebar_submenu':'');?>">View Design</a>
								</li>
							</ul>
						</li>

						<li class="sidebar_header">
                            <h5 class="sidebar_header_uppercase">Product</h5>
                        </li>
						
						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_product_material_type' || $this->uri->segment(1) == 'admin_listing_product_material_type' ||$this->uri->segment(1) == 'admin_edit_product_material_type')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_product_material_type' || $this->uri->segment(1) == 'admin_listing_product_material_type' ||$this->uri->segment(1) == 'admin_edit_product_material_type')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-newspaper" style="padding-right:5px;"></i><span class="side-menu__label">Product Material </span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_product_material_type');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_product_material_type')?'active_sidebar_submenu':'');?>">Add Product Material</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_product_material_type');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_product_material_type')?'active_sidebar_submenu':'');?>">View Product Material</a>
								</li>
							</ul>
						</li>

						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_product_shape' || $this->uri->segment(1) == 'admin_listing_product_shape' ||$this->uri->segment(1) == 'admin_edit_product_shape')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_product_shape' || $this->uri->segment(1) == 'admin_listing_product_shape' ||$this->uri->segment(1) == 'admin_edit_product_shape')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-shapes" style="padding-right:5px;"></i><span class="side-menu__label">Product Shape </span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_product_shape');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_product_shape')?'active_sidebar_submenu':'');?>">Add Product Shape</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_product_shape');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_product_shape')?'active_sidebar_submenu':'');?>">View Product Shape</a>
								</li>
							</ul>
						</li>

						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_product_size' || $this->uri->segment(1) == 'admin_listing_product_size' ||$this->uri->segment(1) == 'admin_edit_product_size')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_product_size' || $this->uri->segment(1) == 'admin_listing_product_size' ||$this->uri->segment(1) == 'admin_edit_product_size')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-sitemap" style="padding-right:5px;"></i><span class="side-menu__label">Product Size </span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_product_size');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_product_size')?'active_sidebar_submenu':'');?>">Add Product Size</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_product_size');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_product_size')?'active_sidebar_submenu':'');?>">View Product Size</a>
								</li>
							</ul>
						</li>

						<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_product_color' || $this->uri->segment(1) == 'admin_listing_product_color' ||$this->uri->segment(1) == 'admin_edit_product_color')?'is-expanded':'');?>">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_product_color' || $this->uri->segment(1) == 'admin_listing_product_color' ||$this->uri->segment(1) == 'admin_edit_product_color')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-palette" style="padding-right:5px;"></i><span class="side-menu__label">Product Color </span><i class="angle fas fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo base_url('admin_add_product_color');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_product_color')?'active_sidebar_submenu':'');?>">Add Product Color</a>
								</li>
								<li>
									<a href="<?php echo base_url('admin_listing_product_color');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_product_color')?'active_sidebar_submenu':'');?>">View Product Color</a>
								</li>
							</ul>
						</li>
						<li class="sidebar_header">
                            <h5 class="sidebar_header_uppercase">Personal</h5>
                        </li>

						<li class="slide">
							<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_setting')?'active':'');?>"" href="<?php echo base_url('admin_setting');?>"><i class="fas fa-cog" style="padding-right:5px;"></i><span class="side-menu__label">Setting</span></a>
						</li>
					</ul>
				</aside>