
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
		<link rel="icon" href="<?php echo base_url();?>images/favicon.png" type="image/png"/>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>images/favicon.png" />
		<script src="<?php echo base_url();?>js/jquery-3.2.1.min.js"></script>
		<!-- Title -->
		<title>Eazyprint | Orders</title>
		<?php
		$this->load->view("common/metalinks");
		?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
		<style>
		.sidebar_active{
        background:#f5365c !important;
		border-radius: 25px;
      }
	  .mediaicon_active{
	    border: 1px solid #fff;
        background: #fff;
        color: #F5365C;
	  }
	  .mediafont:hover {
	   color: #F5365C !important;
	  }
		.sidebar_active .text-dark{
			color:#fff !important;
			margin-top:8px !important;
		}
		</style>

	</head>
	<body class="app">
		<?php
		$this->load->view("common/header");
		?>
		<div class="container">
			<div class="side-app">
				<p>&nbsp;</p>
				<div class="row">
				<?php $this->load->view("customer/customer_sidebar");?>
					<div class="col-lg-8">
						<div class="card store">
								
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		$this->load->view("common/footer");
		?>
	</body>
</html>