		
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->
				<header class="app-header header">

					<!-- Header Background Animation-->
					<div id="particles-js"  class=""></div>

					<!-- Navbar Right Menu-->
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="<?php echo base_url('admin_dashboard');?>">
								<img alt="ren logo" class="header-brand-img" src="<?php echo base_url();?>images/logo_w.png" style="height: 53px;padding-left: 40px;">
							</a>
							<!-- Sidebar toggle button-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto">
								
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" style="margin-top:3px !important;" data-toggle="dropdown" href="#">
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
										<span class="ml-2 d-none d-lg-block">
											<span class="text-white"><?php echo $this->session->userdata['logged_in']['name'];?></span>
										</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item" href="<?php echo base_url('admin_setting');?>"><i class="dropdown-icon mdi mdi-settings"></i> Settings</a>
										<a class="dropdown-item" href="<?php echo base_url('logout');?>"><i class="dropdown-icon mdi mdi-logout-variant"></i> Sign out</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				
				