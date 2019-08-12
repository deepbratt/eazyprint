<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes, minimal-ui">
    <meta charset="utf-8">
    <title>Contact Us | Eazyprint
    </title>
    <meta name="description" content="With Eazyprint you can create free online shop in no time. Make and sell custom merchandise on social media or start your own t-shirt business with no hassles.">
    <meta name="title" content="Contact Us | Eazyprint">
    <!-- <meta name="p:domain_verify" content="0d7c551a1fbc4df58c9e10c7dc141603">
    <meta name="google-site-verification" content="pziWEIF-g6PO5yOvN5UBz1ow0RQUndIxZr3ZFVkqi-w">-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
        <section class="ressources">
          <div class="container">
            <div class="row align-content-center justify-content-between">
              <div class="col-12 col-lg-6 col-xl-6">
                  <form method="post">
				  	<div class="col-md-12">
						<div class="col-md-6" style="float:left">
							<div class="form-group">
							  <label for="name">Full Name</label>
							  <input type="text" class="form-control" id="name" placeholder="Enter full name" name="name">
							</div>
						</div>
						<div class="col-md-6" style="float:right">
							<div class="form-group">
							  <label for="email">Email</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6" style="float:left">
							<div class="form-group">
							  <label for="name">Phone</label>
							  <input type="number" class="form-control" id="number" placeholder="Enter phone number" name="number">
							</div>
						</div>
						<div class="col-md-6" style="float:right">
							<div class="form-group">
							  <label for="subject">Subject</label>
							  <input type="text" class="form-control" id="subject" placeholder="Enter a subject" name="subject">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-12" style="float:left">
							<div class="form-group">
							  <label for="message">Message</label>
							  <textarea class="form-control" id="message" placeholder="Type your message" name="message" style="height:150px;"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-12" style="float:left">
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
</html>
