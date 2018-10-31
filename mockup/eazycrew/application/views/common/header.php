 <div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div>
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
								<img alt="ren logo" class="header-brand-img" src="<?php echo base_url();?>images/logo_w.png">
							</a>
							<!-- Sidebar toggle button-->
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="">
									<form class="input-icon  mr-2">
										<input class="form-control header-search" placeholder="Search&hellip;" tabindex="1" type="search">
										<div class="input-icon-addon">
											<i class="fe fe-search"></i>
										</div>
									</form>
								</div>
								<div class="dropdown">
									<a class="nav-link pr-0 leading-none d-flex" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url('images');?>/favicon.png)"></span>
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
				
				