<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes, minimal-ui">
    <meta charset="utf-8">
    <title>Create and sell print on demand merchandise | Eazyprint
    </title>
    <meta name="description" content="With Eazyprint you can create free online shop in no time. Make and sell custom merchandise on social media or start your own t-shirt business with no hassles.">
    <meta name="title" content="Create and sell print on demand merchandise | Eazyprint">
    <!-- <meta name="p:domain_verify" content="0d7c551a1fbc4df58c9e10c7dc141603">
    <meta name="google-site-verification" content="pziWEIF-g6PO5yOvN5UBz1ow0RQUndIxZr3ZFVkqi-w">-->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<style>
	.register{
    background: -webkit-linear-gradient(left, #ff9343, #ff9999);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 0px 10%;
    margin-top: 5%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #ff9343;
    color: white;
    font-weight: 600;
    width: 40%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
	</style>
	<?php $this->load->view("common/metalinks");?> 
  </head>
  <body class="sprd-responsive-cnt">
	<?php $this->load->view("common/header");?>
    <main>
      <div id="spreadshop-home" data-tracking="Spreadshop-Homepage">
        <section class="works-teaser" >
          <div class="container register" style="width:100% !important;">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                       <div class="row register-form">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name *" value="" />
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last Name *" value="" />
								</div>
								<div class="form-group">
									<input type="password" class="form-control" placeholder="Password *" value="" />
								</div>
								
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Your Email *" value="" />
								</div>
								<div class="form-group">
									<input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
								</div>
								<div class="form-group">
									<input type="password" class="form-control"  placeholder="Confirm Password *" value="" />
								</div>
								
                            </div>
							<div class="col-md-12">
							<button class="sprd-button light" href="//partner.spreadshirt.com/login" target="_blank" rel="noopener">Get started now</button>
							</div>
							
                </div>

            </div>
        </section>
      </div>        
    </main>
	<?php $this->load->view("common/footer");?>
  </body>
</html>
