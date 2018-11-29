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
			height: 50%;
			width: 50%
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
						</div>
						<div class="col-md-8" style="border:1px solid red; overflow:hidden;">
							<div style="background-image: url(<?php echo base_url();?>images/editor/t-shirt/white_front.png); height:100%;background-size: cover;background-repeat: no-repeat;padding:5px;" >

								<div id="draggable_image" style="display:inline-block;height:50%;width:50% important;">
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

