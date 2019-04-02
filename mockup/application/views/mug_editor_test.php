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
					<div class="row">
						<div class="col-md-4" style="border:1px solid black;">
							<div class="form-group p-2">
								<h4>UPLOAD YOUR IMAGE</h4>
							</div>
							<div class="form-group p-2">
								<input type="file"  onchange="readURL(this);"">
							</div>
						</div>
						<div class="col-md-8" style="border:1px solid red; overflow:hidden;">
							<div id="background_image">
								<div>
									<canvas id="canvas1"></canvas>
								</div>
								<div>
									<canvas id="canvas2"></canvas>
								</div>
								<div>
									<canvas id="canvas3"></canvas>
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
	function canvas1() {
	  var canvas = document.getElementById("canvas1");
	  var ctx = canvas.getContext("2d");

	  var productImg = new Image();
	  productImg.onload = function() {
		var iw = productImg.width;
		var ih = productImg.height;
		console.log("height");

		canvas.width = iw;
		canvas.height = ih;

		ctx.drawImage(productImg, 0, 0, productImg.width, productImg.height,
		  0, 0, iw, ih);
		loadUpperIMage()
	  };

	  productImg.src = "http://res.cloudinary.com/pussyhunter/image/upload/c_scale,f_auto,h_350/left_handle_cup_i7ztfs.jpg"


	  function loadUpperIMage() {
		var img = new Image();


		img.src = "http://res.cloudinary.com/pussyhunter/image/upload/v1488184107/500_F_97150423_M13q2FeAUZxxIx6CaPixHupprmyiVVli_skh6fe.jpg"
		img.onload = function() {

		  var iw = img.width;
		  var ih = img.height;

		  var xOffset = 102, //left padding
			yOffset = 110; //top padding

		  //alert(ih)
		  var a = 75.0; //image width
		  var b = 10; //round ness

		  var scaleFactor = iw / (4 * a);

		  // draw vertical slices
		  for (var X = 0; X < iw; X += 1) {
			var y = b / a * Math.sqrt(a * a - (X - a) * (X - a)); // ellipsis equation
			ctx.drawImage(img, X * scaleFactor, 0, iw / 9, ih, X + xOffset, y + yOffset, 1, 174);
		  }
		};
	  }

	};

	function canvas2() {

	  var canvas = document.getElementById("canvas2");
	  var ctx = canvas.getContext("2d");

	  var productImg = new Image();
	  productImg.onload = function() {
		var iw = productImg.width;
		var ih = productImg.height;
		console.log("height");

		canvas.width = iw;
		canvas.height = ih;

		ctx.drawImage(productImg, 0, 0, productImg.width, productImg.height,
		  0, 0, iw, ih);
		loadUpperIMage()
	  };


	  productImg.src = "http://res.cloudinary.com/pussyhunter/image/upload/h_350/canter_handle_cup_xyxhdd.jpg"

	  function loadUpperIMage() {
		var img = new Image();

		img.src = "http://res.cloudinary.com/pussyhunter/image/upload/v1488184107/500_F_97150423_M13q2FeAUZxxIx6CaPixHupprmyiVVli_skh6fe.jpg"

		img.onload = function() {

		  var iw = img.width;
		  var ih = img.height;

		  // alert(iw)

		  var xOffset = 101, //left padding
			yOffset = 110; //top padding

		  var a = 75.0; //image width
		  var b = 10; //round ness

		  var scaleFactor = iw / (4 * a);

		  // draw vertical slices
		  for (var X = 0; X < iw; X += 1) {
			var y = b / a * Math.sqrt(a * a - (X - a) * (X - a)); // ellipsis equation
			ctx.drawImage(img, X * scaleFactor, 0, iw / 3, ih, X + xOffset, y + yOffset, 1, 174);

		  }
		};
	  }

	};

	function canvas3() {

	  var canvas = document.getElementById("canvas3");
	  var ctx = canvas.getContext("2d");

	  var productImg = new Image();
	  productImg.onload = function() {
		var iw = productImg.width;
		var ih = productImg.height;

		canvas.width = iw;
		canvas.height = ih;

		ctx.drawImage(productImg, 0, 0, productImg.width, productImg.height,
		  0, 0, iw, ih);
		loadUpperIMage()
	  };

	  productImg.src = "http://res.cloudinary.com/pussyhunter/image/upload/h_350/right_handle_cup_dsdhr7.jpg"


	  function loadUpperIMage() {
		var img = new Image();

		img.src = "http://res.cloudinary.com/pussyhunter/image/upload/v1488184107/500_F_97150423_M13q2FeAUZxxIx6CaPixHupprmyiVVli_skh6fe.jpg"

		img.onload = function() {

		  var iw = img.width;
		  var ih = img.height;

		  //alert(iw)

		  var xOffset = 102, //left padding
			yOffset = 110; //top padding

		  var a = 75.0; //image width
		  var b = 10; //round ness

		  var scaleFactor = iw / (3 * a);

		  // draw vertical slices
		  for (var X = 0; X < iw; X += 1) {
			var y = b / a * Math.sqrt(a * a - (X - a) * (X - a)); // ellipsis equation
			ctx.drawImage(img, X * scaleFactor, 0, iw / 1.5, ih, X + xOffset, y + yOffset, 1, 174);
		  }
		};
	  }

	};

	setTimeout(function() {
	  canvas1()
	}, 1000);
	setTimeout(function() {
	  canvas2()
	}, 2000);
	setTimeout(function() {
	  canvas3()
	}, 3000);
</script>

