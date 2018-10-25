<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="images/favicon.png" type="image/png"/>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <!-- Title -->
    <title>Eazyprint | My Design
    </title>
    <?php include("metalinks.php");?>
	<style>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 250px;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 15px;
  padding:18px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 90px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.img-fluid{
	height:250px !important;
}
	</style>
  </head>
  <body class="app">
    <?php include("header.php");?>
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
        <div class="col-md-12 col-sm-12 col-xs-12" style="padding:0px;margin:0px;">
          <div class="card">
            <div class="card-status bg-success br-tr-3 br-tl-3">
            </div>
            <div class="card-body">
              <h1 class="text-center">My Design
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="side-app">
        <p>&nbsp;
        </p>
        <div class="row">
          <?php include('creators_sidebar.php');?> 
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="card">
              <div class="card-status bg-success br-tr-3 br-tl-3">
              </div>
              <div class="panel panel-primary">
                <div class="tab-menu-heading">
                  <div class="tabs-menu ">
                    <!-- Tabs -->
                    <ul class="nav panel-tabs">
                      <li class="">
                        <a href="#all" class="active" data-toggle="tab">All
                        </a>
                      </li>
                      <li class="">
                        <a href="#mobile" data-toggle="tab">Mobile
                        </a>
                      </li>
                      <li>
                        <a href="#tshirt" data-toggle="tab">T-Shirt
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="panel-body tabs-menu-body">
                  <div class="tab-content">
                    <div class="tab-pane active " id="all">
                      <div class="row">
					  <div class="demo-gallery">
						<ul id="lightgallery" class="list-unstyled row" lg-uid="lg0">
					  <?php
						for($i=0;$i<4;$i++){
					  ?>
							<li class="col-xs-12 col-sm-6 col-md-4" data-responsive="images/thumb4.jpg" data-src="images/thumb4.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" lg-event-uid="&amp;1">.
							<div class="hovereffect">
								<a href="" class="">
									<img class="img-fluid" src="images/thumb4.jpg" alt="Thumb-1">
								</a>
							
							 <div class="overlay">
								<h2>
									Hover effect 2
									<div class="rating" style="font-size:10px !important;padding:9px;">
										<label for="stars-rating-5"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-4"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-3"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-2"><i class="fa fa-star"></i></label>
										<label for="stars-rating-1"><i class="fa fa-star"></i></label>
									</div>
								</h2>
								<a class="info" style="float:none !important;">View More</a>
							</div>
							</div>
						</li>
						
						<?php
							}			
						?>
						</ul>
						</div>
					  
					  </div>
                    </div>
                    <div class="tab-pane" id="mobile">
					 <div class="row">
					 <div class="demo-gallery">
						<ul id="lightgallery" class="list-unstyled row" lg-uid="lg0">
					  <?php
						for($i=0;$i<5;$i++){
					  ?>
							<li class="col-xs-12 col-sm-6 col-md-4" data-responsive="images/thumb4.jpg" data-src="images/thumb4.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" lg-event-uid="&amp;1">.
							<div class="hovereffect">
								<a href="" class="">
									<img class="img-fluid" src="images/thumb4.jpg" alt="Thumb-1">
								</a>
							
							 <div class="overlay">
								<h2>
									Hover effect 2
									<div class="rating" style="font-size:10px !important;padding:9px;">
										<label for="stars-rating-5"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-4"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-3"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-2"><i class="fa fa-star"></i></label>
										<label for="stars-rating-1"><i class="fa fa-star"></i></label>
									</div>
								</h2>
								<a class="info" style="float:none !important;">View More</a>
							</div>
							</div>
						</li>
						
						<?php
							}			
						?>
						</ul>
						</div>

                      
					</div>
                    </div>
                    <div class="tab-pane  " id="tshirt">
					 <div class="row">
					 <div class="demo-gallery">
						<ul id="lightgallery" class="list-unstyled row" lg-uid="lg0">
					  <?php
						for($i=0;$i<9;$i++){
					  ?>
							<li class="col-xs-12 col-sm-6 col-md-4" data-responsive="images/thumb4.jpg" data-src="images/thumb4.jpg" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" lg-event-uid="&amp;1">.
							<div class="hovereffect">
								<a href="" class="">
									<img class="img-fluid" src="images/thumb4.jpg" alt="Thumb-1">
								</a>
							
							 <div class="overlay">
								<h2>
									Hover effect 2
									<div class="rating" style="font-size:10px !important;padding:9px;">
										<label for="stars-rating-5"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-4"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-3"><i class="fa fa-star text-warning"></i></label>
										<label for="stars-rating-2"><i class="fa fa-star"></i></label>
										<label for="stars-rating-1"><i class="fa fa-star"></i></label>
									</div>
								</h2>
								<a class="info" style="float:none !important;">View More</a>
							</div>
							</div>
						</li>
						
						<?php
							}			
						?>
						</ul>
						</div>
					</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("footer.php");?>
  </body>
</html>
