<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Eazyprint | You are the brand</title>

    <link rel="shortcut icon" href="img/core-img/favicon.ico">

    <script src="js/jquery-2.2.4.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/settings.css">
    <link rel="stylesheet" type="text/css" href="css/layers.css">
    <link rel="stylesheet" type="text/css" href="css/navigation.css">


    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">


    <link href="css/responsive.css" rel="stylesheet">

    <link href="css/opensans.css" rel="stylesheet">
	<link href="css/ourstory.css" rel="stylesheet">


    <script type="text/javascript" src="js/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/revolution.extension.navigation.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<style>
		body{
			background:#f5f5f5;
		}
		.pad0{
			padding:0px;
			margin:0px;
		}
		.shp_cart{
			height:40px;background:rgb(42, 43, 46);width:40px;border-radius:50%;
			margin-left:2px;text-align:center;
		}
		.shp_cart:hover{
			cursor:pointer;
			background:#dd0017;
		}
	</style>
</head>

<body>
	<div class="container-fluid bg-dark">

	</div>

    <?php 
		include("header.php");
	?>
	<!-- 3rd row of products -->

<section id="company_history">
        <div class="container">
          <h2 class="text-center">How It Works</h2>
          <section id="history_timeline" class="history_container">
            <div class="history_timeline_point" style=""></div>
            <div class=" history_timeline-block" style="background:transparent">
              <div class=" history_timeline_content" style="float:left;">
                <h2 style="color:#ec8c0e;font-weight:bold;">Beginning (2016)
                </h2>
                <p style="font-size:18px;">Our founder, a 3rd time entrepreneur, left her UK government (Cabinet Office/Foreign &amp; Commonwealth Office) role to 'put her money where her mouth is' to disrupt the 'unacceptable security gap' for small and medium businesses globally - despite having no background in coding.
                </p>    
              </div>
              <div class=" history_timeline_content" style="float:right">
                <h2 style="color:#ec8c0e;font-weight:bold;">Mission (Jan 2017)
                </h2>
                <p style="font-size:18px;">'Go-to' cyber marketplace for small, medium businesses &amp; suppliers globally. Security a right all deserve, we make it a reality by automating empowerment. Using an independent plug and play marketplace, global strategic alliances, regulation focus &amp; novel sales analytics.  
                </p>
              </div>
            </div>

            <div class=" history_timeline-block">
              <div class=" history_timeline_point"></div>
              <div class=" history_timeline_content" style="float:left;">
                <h2 style="color:#ec8c0e;font-weight:bold;">Purpose (Mar 2017)
                </h2>
                <p style="font-size:18px;">Driving collaboration (empowerment, bridging skills' gap). We're challenging norms of who can work in cyber by hiring ex-forces, graduates, returners etc. 
                </p>
              </div>
              <div class=" history_timeline_content" style="float:right">
                <h2 style="color:#ec8c0e;font-weight:bold;">Process (Jun 2017)
                </h2>
                <p style="font-size:18px;">Automates the buying of cyber security (technology, people, processes) to be quick, affordable and simple. 
                  In hours, business owners can go from filling out our online form to filtering our comparisons to downloading the bundle of cyber solutions they've just bought.
                  Find right fit at the right price, rating and regulation in clicks.
                  Without paying the thousands of pounds it takes to find them right now. Businesses pay nothing for our comparisons.
                </p>
              </div>
            </div>

            <div class=" history_timeline-block">
              <div class=" history_timeline_point"></div>
              <div class=" history_timeline_content" style="float:left;">
                <h2 style="color:#ec8c0e;font-weight:bold;">Partnerships (Sep 2017)
                </h2>
                <p style="font-size:18px;">'Trusted' accountants, telcos, banks, insurers etc refer us to businesses (we're sold as a cyber add-on in same way as insurance add-ons are sold with banking products). Existing marketplaces (our competitiors) partnering to refer suppliers to us. 4 government &amp; corporate partners signed, 10+ in the pipeline.
                </p>
              </div>

			  <div class=" history_timeline_content" style="float:right">
                <h2 style="color:#ec8c0e;font-weight:bold;">Product (launch 2018)
                </h2>
              </div>
            </div>

          </section>
        </div>
      </section>
    
<?php include("footer.php");?>

		<script>
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
		</script>

	<script src="js/jquery-2.2.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/include-all-plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	<script src="js/slick.js"></script>


</body>
</html>