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
    <link href="css/timeline.min.css" rel="stylesheet" />
	<style>
		.img-fluid{
		height:100px !important;
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
					  <?php
						for($i=0;$i<3;$i++){
					  ?>
					  	<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="card item-card">
								<div class="card-body pb-0">
									<div class="text-center">
										<img src="images/14.png" alt="img" class="img-fluid">
									</div>
									<div class="card-body cardbody ">
										<div class="cardtitle">
											<span>Accessories</span>
											<a>Sports Watch</a>
										</div>
										<div class="cardprice">
											<span class="type--strikethrough">$999</span>
											<span>$799</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}			
						?>
					  <?php
						for($i=0;$i<5;$i++){
					  ?>
					  	<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="card item-card">
								<div class="card-body pb-0">
									<div class="text-center">
										<img src="images/men-bestsellers-desktop-2-1536929043.jpg" alt="img" class="img-fluid">
									</div>
									<div class="card-body cardbody ">
										<div class="cardtitle">
											<span>Accessories</span>
											<a>Sports Watch</a>
										</div>
										<div class="cardprice">
											<span class="type--strikethrough">$999</span>
											<span>$799</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}			
						?>
					  </div>
                    </div>
                    <div class="tab-pane" id="mobile">
					 <div class="row">
                      <?php
						for($i=0;$i<3;$i++){
					  ?>
					  	<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="card item-card">
								<div class="card-body pb-0">
									<div class="text-center">
										<img src="images/mobile-cover-banner-facebook.jpg" alt="img" class="img-fluid">
									</div>
									<div class="card-body cardbody ">
										<div class="cardtitle">
											<span>Accessories</span>
											<a>Sports Watch</a>
										</div>
										<div class="cardprice">
											<span class="type--strikethrough">$999</span>
											<span>$799</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}			
						?>
					</div>
                    </div>
                    <div class="tab-pane  " id="tshirt">
					 <div class="row">
                      <?php
						for($i=0;$i<5;$i++){
					  ?>
					  	<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="card item-card">
								<div class="card-body pb-0">
									<div class="text-center">
										<img src="images/men-bestsellers-desktop-2-1536929043.jpg" alt="img" class="img-fluid">
									</div>
									<div class="card-body cardbody ">
										<div class="cardtitle">
											<span>Accessories</span>
											<a>Sports Watch</a>
										</div>
										<div class="cardprice">
											<span class="type--strikethrough">$999</span>
											<span>$799</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
							}			
						?>
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
