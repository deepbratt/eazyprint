<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Eazyprint | About Us</title>
	<?php include("metalinks.php");?>
</head>

<body>
    <?php 
		include("header.php");
	?>

	<section style="border-bottom:1px solid #CCC;">
		<div class="container-fluid">
			<div class="container">
				<p class="center" style="text-align:left;margin-top:12px;">
					<a href="" style="font-size:12px;color:#535353;"> Home </a> >> 
					<a href="" style="font-size:12px;color:#535353;"> Apple </a> >>
					<a href="" style="font-size:12px;color:#535353;"> iPhone 5/5s </a> >>
					<a href="" style="font-size:12px;color:#535353;"> <b>Custom picture mobile case</b> </a>
				</p>
			</div>
		</div>
	</section>


	<section style="background:#fff;">
		<div class="container" style="">
			<p>&nbsp;</p>
			<h1 class="center" style="text-align:center;">FAQs</h1>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-12">
					<strong>You ship to my country ?</strong>
					<p>We ship in India only.</p>

					<strong>How much does shipping cost ?</strong>
					<p>Shipping costs depend on the state of the buyer. Prices are displayed during checkout after a shipping address has been given.</p>

					<strong>What is the displayed currency on your website ? can i pay with any other currency ? </strong>
					<p>The prices are all displayed in INR (Indian Rupees).</p>

					<strong>Is this product available ? </strong>
					<p>Products displayed on our website are currently available. If a product becomes out of stock, we will update the website.</p>

					<strong>If i order today, when will i receive my shipment ? </strong>
					<p>We do our best to process every order within 1-2 business days. After processing your order, we will send you a shipping confirmation email for your convenience.</p>

					<strong>My Order contains a mistake. what should i do? </strong>
					<p>Please contact us as soon as you can at <strong style="color:red;">support@eazyprint.com</strong> and we will help you correct it. Please use this subject: "CHANGE ORDER: my order number is #99999" for the quickest possible response (including the order number in the subject line will help us locate your order quickly).</p>

					<strong>I want to change something with my order, but it has already been processed ! what to do ? </strong>
					<p>If you have just received the notification, there may still be time for us to change the order. Please contact us quickly at <strong style="color:red;">support@eazyprint.com</strong> and we will help you correct it. Please use this subject: "CHANGE ORDER: my order number is #99999" for the quickest possible response (including the order number in the subject line will help us locate your order quickly). If you received the notification a few hours ago, it is probably too late. If the address is incorrect, please email us the right address so that we may send the package again once it comes back to us.</p>

					<strong>I did not receive my tracking number! what happened ? </strong>
					<p>If you have not received your tracking number within 2 business days after receiving the shipment confirmation, please contact us at <strong style="color:red;">support@eazyprint.com</strong></p>

					<strong>I want to cancel my order, but the order has already been shipped! What to do ? </strong>
					<p>It is probably too late for us to stop the package. Please contact us at <strong style="color:red;">support@eazyprint.com</strong> to explain your situation, and we will see what we can do. You should also have a look at our return policy. <strong style="color:red;">Click here for returns page</strong></p>

					<strong>The content of the shipment is not what i ordered ! </strong>
					<p>We sometimes make mistakes and are sorry about that. Please contact us at <strong style="color:red;">support@eazyprint.com</strong> and give us your order number in the subject of the email. Please include pictures of the product and the back of the packaging. We will do our best to solve this issue for you quickly.</p>

					<strong>What do i do if my order was damaged during shipping ? </strong>
					<p>Sometimes the carrier mishandles the parcels and a product can be damaged during shipping. You should first try to open the package and see if the product inside is also damaged. If there is anything wrong with it, please contact us at <strong style="color:red;">support@eazyprint.com</strong> (you should include your order number in the subject of the email) and include pictures of the products and the packaging. We will do our best to accommodate you quickly.</p>

					<strong>Where do i find my order number ? </strong>
					<p>Your order number is the 5 digit number sent in the confirmation email. For example: #20340. If you cannot find your order number, you may tell us what email you provided when placing your order and we should be able to locate it. I cannot find an answer to my questions here. what should i do ? Contact us at <strong style="color:red;">support@eazyprint.com</strong> We will try to answer you as quickly as possible!</p>

				</div>

			</div>
			<p>&nbsp;</p>
		</div>
	</section>

	<?php
	include("footer.php");
	?>
	
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