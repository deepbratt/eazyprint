<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<!-- <div class="app-sidebar__user">
						<div class="dropdown">
							<a class="nav-link p-0 leading-none d-flex" data-toggle="dropdown" href="#">
							<?php
							if($this->session->userdata['logged_in']['crew_image'] == '')
							{
							?>
								<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url('images');?>/favicon.png)"></span>
							<?php
							}else{
							?>
								<span class="avatar avatar-md brround" style="background-image: url(uploads/crew_images/<?php echo $this->session->userdata['logged_in']['crew_image'];?>)"></span>
							<?php
							}
							?>
								<span class="ml-2 "><span class="text-white app-sidebar__user-name font-weight-semibold"><?php echo $this->session->userdata['logged_in']['name'];?></span><br>
									<i class="fas fa-user-graduate" style="padding-right:5px;"></i><span class="text-muted app-sidebar__user-name text-sm"><?php echo $this->session->userdata['logged_in']['crew_role'];?></span>
								</span>
							</a>
							
						</div>
					</div> -->
					
					<ul class="side-menu">
					<!-- Dashboard STARTS -->
						<li class="sidebar_header">
							<a class="sidebar_header_uppercase <?php echo(($this->uri->segment(1) == 'admin_dashboard')?'active':'');?>" href="<?php echo base_url('admin_dashboard');?>">Dashboard</a>
						</li>
					<!-- Dashboard Ends -->
					
						<!-- Product Information Starts-->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'admin_add_product' || $this->uri->segment(1) == 'admin_listing_product' ||$this->uri->segment(1) == 'admin_edit_product' || $this->uri->segment(1) == 'admin_add_final_product' || $this->uri->segment(1) == 'admin_listing_final_product' ||$this->uri->segment(1) == 'admin_edit_final_product')?'header-active':'');?>" data-target="#information">Product</a>
                        </li>
						<div id="information" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_product' || $this->uri->segment(1) == 'admin_listing_product' ||$this->uri->segment(1) == 'admin_edit_product' || $this->uri->segment(1) == 'admin_add_final_product' || $this->uri->segment(1) == 'admin_listing_final_product' ||$this->uri->segment(1) == 'admin_edit_final_product')?'show':'');?>">
							<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_product' || $this->uri->segment(1) == 'admin_listing_product' ||$this->uri->segment(1) == 'admin_edit_product')?'is-expanded':'');?>">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_product' || $this->uri->segment(1) == 'admin_listing_product' ||$this->uri->segment(1) == 'admin_edit_product')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-tshirt" style="padding-right:5px;"></i><span class="side-menu__label">Raw Material</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="<?php echo base_url('admin_add_product');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_product')?'active_sidebar_submenu':'');?>">Add Raw Material</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin_listing_product');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_product' ||$this->uri->segment(1) == 'admin_edit_product')?'active_sidebar_submenu':'');?>">View Raw Material</a>
									</li>
								</ul>
							</li>

							<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_final_product' || $this->uri->segment(1) == 'admin_listing_final_product' ||$this->uri->segment(1) == 'admin_edit_final_product')?'is-expanded':'');?>">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_final_product' || $this->uri->segment(1) == 'admin_listing_final_product' ||$this->uri->segment(1) == 'admin_edit_final_product')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-palette" style="padding-right:5px;"></i><span class="side-menu__label">Final Product</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="<?php echo base_url('admin_add_final_product');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_final_product')?'active_sidebar_submenu':'');?>">Add Product</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin_listing_final_product');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_final_product' ||$this->uri->segment(1) == 'admin_edit_final_product')?'active_sidebar_submenu':'');?>">View Product</a>
									</li>
								</ul>
							</li>
						</div>
						<!-- Product Information Ends -->

						

						<!-- Orders Starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible" data-target="#orderz">Orders</a>
                        </li>
						<div id="orderz" class="collapse">

							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> Transaction</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="#" class="slide-item">Add Transaction</a>
									</li>
									<li>
										<a href="#" class="slide-item">View Transaction</a>
									</li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> Credit</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="#" class="slide-item">Add Credit</a>
									</li>
									<li>
										<a href="#" class="slide-item">View Credit</a>
									</li>
								</ul>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> Debit</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="#" class="slide-item">Add Debit</a>
									</li>
									<li>
										<a href="#" class="slide-item">View Debit</a>
									</li>
								</ul>
							</li>
						</div>
						<!-- Orders Ends -->

						<!-- Dealers Starts -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible" data-target="#dealers">Dealers</a>
                        </li>
						<div id="dealers" class="collapse">
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> View Orders</span></a>
							</li>
							<li class="slide">
								<a class="side-menu__item" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> View Commission</span></a>
							</li>
						</div>
						<!-- Dealers Ends -->
						<!-- PERSONAL STARTS -->
						<li class="sidebar_header">
                           <a href="javascript:void(0);" data-toggle="collapse" class="sidebar_header_uppercase collapsible <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'header-active':'');?>" data-target="#personalz">Personal</a>
                        </li>
						<div id="personalz" class="collapse <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'show':'');?>">
							<li class="slide">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_setting')?'active':'');?>"" href="<?php echo base_url('admin_setting');?>"><i class="fas fa-cog" style="padding-right:5px;"></i><span class="side-menu__label">Setting</span></a>
							</li>
							
							<li class="slide <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'is-expanded':'');?>">
								<a class="side-menu__item <?php echo(($this->uri->segment(1) == 'admin_add_crew' || $this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'active':'');?>" data-toggle="slide" href="#"><i class="fas fa-user-tie" style="padding-right:5px;"></i><span class="side-menu__label"> Crew Member</span><i class="angle fas fa-angle-right"></i></a>
								<ul class="slide-menu">
									<li>
										<a href="<?php echo base_url('admin_add_crew');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_add_crew')?'active_sidebar_submenu':'');?>">Add Crew Member</a>
									</li>
									<li>
										<a href="<?php echo base_url('admin_listing_crew');?>" class="slide-item <?php echo(($this->uri->segment(1) == 'admin_listing_crew' ||$this->uri->segment(1) == 'admin_edit_crew')?'active_sidebar_submenu':'');?>">View Crew Members</a>
									</li>
								</ul>
							</li>
						</div>
						<!-- PERSONAL STARTS -->
					</ul>
				</aside>