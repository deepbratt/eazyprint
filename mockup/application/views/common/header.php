 <!-- <div id="global-loader" ><div class="showbox"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div></div> -->
		<div class="page">
			<div class="page-main">
				<!-- Navbar-->	
					<header class="app-header header shadow-none fixed-header relative big_head" style="background:#f3f4f8;border-bottom:1px solid #d5def0;">
						<div class="container">
						
						<!-- Navbar Right Menu-->
						<div class="container-fluid">
							<div class="d-flex" style="height: 17px;">
								<div class="d-flex order-lg-3 mr-auto">
									<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Delights </b> </span>
										</span>
									</a>
									<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Fanbook </b> </span>
										</span>
									</a>
									<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Download App </b> </span>
										</span>
									</a>
								</div>
								<div class="d-flex order-lg-3 ml-auto">
									<a class="nav-link d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Contact Us </b> </span>
										</span>
									</a>
									<a class="nav-link  d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Track Order </b> </span>
										</span>
									</a>
									<a class="nav-link  d-flex" href="javascript:void(0);">
										<span class="d-none d-lg-block" style="font-size: 11px;">
											<span class="text-dark"> <b> Pay online & get free shipping. </b> </span>
										</span>
									</a>
								</div>
								<a href="javascript:void(0);" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse" style="margin-top:12px;">
									<span class="header-toggler-icon" style="color:#000;"></span>
								</a>
							</div>
						</div>
					</div>
				</header>
				
				<!-- Horizantal menu-->
				<div id="myHeader">
					<div class="ren-navbar fixed-header" id="headerMenuCollapse" >
						<div class="container">
							<div class="row" style="height: 75px;margin-top: -3px;">
								<a class="nav-link header-brand" href="<?php echo base_url('home');?>">
									<img alt="ren logo" class="header-brand-img" src="<?php echo base_url();?>images/logo_header.png" style="height:40px;">
								</a>
							
								<div class="nav">
									<?php
									$ci =&get_instance();
									$ci->load->model('home_m');
									$get_cat = $ci->home_m->get_cat();
									foreach($get_cat as $fetch_cat){
									?>
									<li class="nav-item with-sub  mega-dropdown">
									  <a class="nav-link" href="javascript:void(0);">
										<span class="d-none d-lg-block">
											<span class="text-dark"><?php echo strtoupper($fetch_cat->category_name);?></span>
										</span>
									  </a>
									  <div class="sub-item" style="border:1px solid #CCCCCC;border-top:none;box-shadow: 0px 1px 1px 1px #CCCCCC;">
										<div class="row">
											<?php
											$get_sub = $ci->home_m->get_sub($fetch_cat->category_id);
											foreach($get_sub as $fetch_sub){
												if($fetch_cat->category_id == '3'){
												?>
												<div class="col-md-2" style="text-align:left;">
													<span style="color:#009fdc;"><?php echo strtoupper($fetch_sub->sub_category_name);?></span>
													<ul style="padding-top:10px;">
													<?php
													$get_product = $ci->home_m->get_product($fetch_sub->sub_category_id);
													foreach($get_product as $fetch_product){
													?>
														<li class="text-dark"><?php echo ucfirst($fetch_product->product_name);?></li>
													<?php
													}
													?>
													</ul>
												</div>
												<?php
												}else{
												?>
												<div class="col-md-3">
													<a class="nav-link" href="#">
														<img  src="<?php echo base_url();?>images/bewkoof/mobile-covers-desktop-box-1542286246.jpg" style="height:200px;">
													</a>
													<span class="text-dark"><?php echo strtoupper($fetch_sub->sub_category_name);?></span>
												</div>
												<?php
												}
											}
											?>
										 </div>
									   </div>
									</li>
									<?php
									}
									?>
									

									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);">
											<span class="d-none d-lg-block">
												<span class="text-dark">OFFERS</span>
											</span>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);">
											<span class="d-none d-lg-block">
												<span class="text-dark">BULK ORDERS</span>
											</span>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);">
											<span class="d-none d-lg-block">
												<span class="text-dark">LOGIN</span>
											</span>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0);">
											<span class="d-none d-lg-block">
												<span class="text-dark">SIGNUP</span>
											</span>
										</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" data-toggle="dropdown" href="javascript:void(0);">
											<span class="avatar avatar-md brround" style="background-image: url(images/25.jpg)"></span>
										</a>
										<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="margin-top: -6px !important;">
											<a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon mdi mdi-account-outline"></i> Profile</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon mdi mdi-settings"></i> Settings</a>
											<a class="dropdown-item" href="javascript:void(0);"><span class="float-right"><span class="badge badge-primary">6</span></span> <i class="dropdown-icon mdi mdi-message-outline"></i> Inbox</a>
											<a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?</a>
											<a class="dropdown-item" href="login.html"><i class="dropdown-icon mdi mdi-logout-variant"></i> Sign out</a>
										</div>
									</li>
								</div>

							</div>
						</div>
					</div>


					<!-- Mobile Menu Starts -->

					<div class="ren-navbar fixed-header mobile_menu" id="headerMenuCollapse">
						<div class="container">
							<div class="row" style="height: 75px;margin-top: -3px;">
								<div class="col-md-10">
									<a  href="<?php echo base_url('home');?>" style="padding-left:54%;">
										<img src="<?php echo base_url();?>images/logo_header.png" style="height:40px;margin-top:18px;">
									</a>
								</div>
								<div class="col-md-2">
									<a href="javascript:void(0);" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse" style="margin-top:12px;">
										<span class="header-toggler-icon" style="color:#000;"></span>
									</a>
								</div>
								
								
								
							</div>
						</div>
					</div>
					<!-- Mobile Menu Ends -->


				</div>
				<!-- Horizantal menu-->