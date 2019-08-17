<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes, minimal-ui">
    <meta charset="utf-8">
    <title>Contact Us | Eazyprint
    </title>
    <meta name="description" content="">
    <meta name="title" content="Contact Us | Eazyprint">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style>
	.error_msg{
		font-size:15px;
		color:red;
		margin-top:3px;
		display:none;
	}
	</style>
	<?php $this->load->view("common/metalinks");?> 
  </head>
  <body class="sprd-responsive-cnt">
	<?php $this->load->view("common/header");?>
    <main>
      <div id="spreadshop-home" data-tracking="Spreadshop-Homepage" style="">
        <section class="assortment-teaser" style="background: #333 url(//www.spreadshop.com/content/f_auto,q_70/pages/assortment/teaser) no-repeat center;">
            <div class="container text-center">
                <div class="assortment-teaser__text-wrapper" style="padding-bottom: 35px !important;">
                    <h1 style="padding-top: 20px;color:white;">Sell Your Art on Hundreds of Products</h1>
                    <p style="color:white;">Custom one-off printing of unlimited designs with no minimum order size</p>
                </div>
            </div>
        </section>
        <section class="ressources" id="Contact_form" style="padding:50px 0;">
		
		
          <div class="container">
		    <?php
			  if($this->session->flashdata('success')){
			?>
			<div class="alert alert-success" style="margin-top:30px;"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
			<?php
			}
			?>
            <div class="row align-content-center justify-content-between">
              <div class="col-12 col-lg-6 col-xl-6">
                  <form method="post" action="<?php echo base_url('contact/send_email');?>">
				  	<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="name">Full Name(<span style="color:red;font-weight:bold;">*</span>)</label>
							  <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name">
							  <span class="error_msg" id="name_error">
								Enter your full name
							  </span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="email">Email(<span style="color:red;font-weight:bold;">*</span>)</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							  <span class="error_msg" id="email_error">
								Enter a valid email id
							  </span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							  <label for="name">Phone(<span style="color:red;font-weight:bold;">*</span>)</label>
							  <input type="number" class="form-control" id="number" placeholder="Enter phone number" name="number">
							  <span class="error_msg" id="phone_error">
								Enter a valid phone number
							  </span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							  <label for="subject">Subject</label>
							  <input type="text" class="form-control" id="subject" placeholder="Enter a subject" name="subject">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							  <label for="message">Message(<span style="color:red;font-weight:bold;">*</span>)</label>
							  <textarea class="form-control" id="message" placeholder="Type your message" name="message" style="height:150px;"></textarea>
							  <span class="error_msg" id="message_error">
								Enter your message(charecters must contain 20 charecters atleast)
							  </span>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							  <button type="submit" class="sprd-button secondary" style="height: 37px;padding: 11px;">Send</button>
							</div>
						</div>
					</div>
					
				  </form>
              </div>
              <div class="col-12 col-lg-6 col-xl-6">
                <div class="ressources__list-wrapper">
                  <ul>
                    <li>
                      <div class="ressources__icon ressources__icon--code">
                      </div>
                      <div class="ressources__text">
                        <h3>Shop integration options
                        </h3>
                        <p>We have a variety of shop integration options with the best site creators around.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="ressources__icon ressources__icon--bundle">
                      </div>
                      <div class="ressources__text">
                        <h3>Order merch bundles
                        </h3>
                        <p>Start selling merch to your fans face-to-face by ordering our MerchPack bundles.
                        </p>
                      </div>
                    </li>
                    <li>
                      <div class="ressources__icon ressources__icon--camera">
                      </div>
                      <div class="ressources__text">
                        <h3>Premium access to photos
                        </h3>
                        <p>Eazyprint has partnered with Placeit, offering thousands of product photos for you to mockup.
                        </p>
                      </div>
                    </li>
                  </ul>
                  <div class="sprd-button secondary d-lg-none" data-lightbox="register-modal">Open Your Merch Shop
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
      </div>        
    </main>
	<?php $this->load->view("common/footer");?>
  </body>
  <script>
	$("form").submit(function(e){
		var name = $('#name').val();
		var email = $('#email').val();
		var number = $('#number').val();
		var message = $('#message').val();
		if(name == ''){
			$('#name_error').show();
			var a = 1;
			e.preventDefault();
		}
		var emailReg  = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test( email ) || email == '' ) {
			$('#email_error').show();
			var b = 1;
			e.preventDefault();
			
		} 
		if(number == '' || number.length != 10){
			$('#phone_error').show();
			var c = 1;
			e.preventDefault();
		}
		if(message == '' || message.length < 20){
			$('#message_error').show();
			var d = 1;
			e.preventDefault();
		}
		if(a != 1 && b != 1 && c != 1 && d != 1)
		{
			$("form").unbind('submit');
		}else{
			$('html, body').animate({
				scrollTop: $("#Contact_form").offset().top
			}, 1000);
		}
		
	});

	setInterval(function(){
		check_vakidation() 
	}, 2000);

	function check_vakidation(){
		var name = $('#name').val();
		var email = $('#email').val();
		var number = $('#number').val();
		var message = $('#message').val();

		if(name != ''){
			$('#name_error').hide();
		}
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if(emailReg.test( email ) && email != '' ) {
			$('#email_error').hide();
		}
		if(number.length == 10){
			$('#phone_error').hide();
		}
		if(message.length > 19){
			$('#message_error').hide();
		}
	}
</script>
</html>
