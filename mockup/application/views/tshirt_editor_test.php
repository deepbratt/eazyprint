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
    <title>Eazyprint | TShirt Editor
    </title>
       <?php $this->load->view("common/metalinks");?>

	<script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
	<style>
		#draggable_image{
		    margin: 0px;
			resize: both;
			position: absolute;
			display: block;
			height: 30%;
			width: 30%
		}
		.ui-wrapper{
			top:300px !important;
			left:250px !important;
		}
		.bg-black{
			background-color: #000000;
		}
		.bg-white{
			background-color: #ffffff;
		}
		.bg-army_green{
			background-color: #4b5320;
		}
		.bg-bold_red{
			background-color: #ba3f38;
		}
		.bg-mustard_yellow{
			background-color: #ffdb58;
		}
		.bg-ocean_blue{
			background-color: #0077be;
		}
	</style>
  </head>
  <body class="app">
    <?php $this->load->view("common/header");?>
   
    <div class="container">
      <div class="side-app">
        <div class="col-md-12">
			<div class="page-header">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item" aria-current="page">Clothing & fashion</li>
					<li class="breadcrumb-item" aria-current="page">Tshirts</li>
					<li class="breadcrumb-item active" aria-current="page">Editor</li>
				</ol>
			</div>
			<div class="row">
            <div class="card">
              <div class="panel panel-primary">
                <div class="card-header">
					<h4>T-Shirt Editor</h4>
				</div>

				<div class="card-body">
					<div class="row" style="height:700px;">
						<div class="col-md-4" style="border:1px solid black;">
							<div class="form-group p-2">
								<h4>UPLOAD YOUR IMAGE</h4>
							</div>
							<div class="form-group p-2">
								<input type="file"  onchange="readURL(this);"">
							</div>
							<div class="form-group p-2">
								<!-- SELECT COLOR STARTS -->
								
										<label class="form-label">Select Color</label>
										<div class="row gutters-xs">
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="black" class="colorinput-input" checked="" id="make_it_black">
													<span class="colorinput-color bg-black"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="white" class="colorinput-input" id="make_it_white">
													<span class="colorinput-color bg-white"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="army_green" class="colorinput-input" id="make_it_army_green">
													<span class="colorinput-color bg-army_green"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="bold_red" class="colorinput-input" id="make_it_bold_red">
													<span class="colorinput-color bg-bold_red"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="mustard_yellow" class="colorinput-input" id="make_it_mustard_yellow">
													<span class="colorinput-color bg-mustard_yellow"></span>
												</label>
											</div>
											<div class="col-auto">
												<label class="colorinput">
													<input name="color" type="radio" value="ocean_blue" class="colorinput-input" id="make_it_ocean_blue">
													<span class="colorinput-color bg-ocean_blue"></span>
												</label>
											</div>
										</div>
									
								<!-- SELECT COLOR ENDS -->
							</div>
						</div>
						<div class="col-md-8" style="border:1px solid red; overflow:hidden;">
							<div style="background-image: url(<?php echo base_url();?>images/editor/t-shirt/white/white_blank.png); height:100%;background-size: cover;background-repeat: no-repeat;padding:5px;" id="background_image">

								<div id="draggable_image" style="display:inline-block;">
									<img src="<?php echo base_url();?>images/5-2-attitude-quotes-png.png" id="image_resize">
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
      <?php $this->load->view("common/footer");?>
  </body>
</html>
<script type="text/javascript">
	function readURL(input) {
		
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#image_resize').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
			$('#image_resize').show();
		}
	}
</script>
<script type="text/javascript">
	$(window).load(function(){
		$('#draggable_image').draggable();
		$('#image_resize').resizable();
    });

</script>
<script>
	document.getElementById('make_it_black').onclick = function(){
		 if( $(this).is(':checked') ){
			 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/black/black_blank.png)';
		 }
	};

	document.getElementById('make_it_white').onclick = function(){
		 if( $(this).is(':checked') ){
			 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/white/white_blank.png)';
		 }
	};

	document.getElementById('make_it_army_green').onclick = function(){
		 if( $(this).is(':checked') ){
			 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/army_green/army_green_blank.png)';
		 }
	};

	document.getElementById('make_it_bold_red').onclick = function(){
		 if( $(this).is(':checked') ){
			 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/bold_red/bold_red_blank.png)';
		 }
	};

	document.getElementById('make_it_mustard_yellow').onclick = function(){
		 if( $(this).is(':checked') ){
			 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/mustard_yellow/mustard_yellow_blank.png)';
		 }
	};

	document.getElementById('make_it_ocean_blue').onclick = function(){
		 if( $(this).is(':checked') ){
			 document.getElementById('background_image').style.backgroundImage = 'url(http://localhost/pbeazyprint/mockup/images/editor/t-shirt/ocean_blue/ocean_blue_blank.png)';
		 }
	};
</script>

