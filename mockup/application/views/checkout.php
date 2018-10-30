
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

		<!-- Title -->
		<title>Eazyprint | Checkout</title>
<?php
$this->load->view("common/metalinks");
?>
		<link href="<?php echo base_url();?>css/timeline.min.css" rel="stylesheet" />
	</head>
	<body class="app">

<?php
$this->load->view("common/header");
?>
				<div class="container">
					<div class="side-app">
						<p>&nbsp;</p>
						<div class="row" style="padding:0px;margin:0px;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="card">
								<div class="card-status bg-success br-tr-3 br-tl-3"></div>
								<div class="card-body">
									<h1 class="text-center">Checkout</h1>
								</div>
							</div>
						</div>
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="card">
									<div class="card-status bg-orange br-tr-3 br-tl-3"></div>
									<div class="card-body">
										<h3>Billing Address</h3>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Company</label>
													<input type="text" class="form-control"  placeholder="Company" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Username</label>
													<input type="text" class="form-control" placeholder="Username" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="Company">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" placeholder="Home Address" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="City" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select class="form-control custom-select">
														<option value="0">--Select--</option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Aus</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body">
									<div class="checkbox">
									  <label><input type="checkbox"> Same as above address</label>
									</div>
								</div>
								</div>
								<div class="card">
									<div class="card-status bg-orange br-tr-3 br-tl-3"></div>
									<div class="card-body">
										<h3>Shipping Address</h3>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Company</label>
													<input type="text" class="form-control"  placeholder="Company" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Username</label>
													<input type="text" class="form-control" placeholder="Username" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="Company">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" placeholder="Home Address" >
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="City" >
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select class="form-control custom-select">
														<option value="0">--Select--</option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Aus</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="card store">
									<div class="card-status bg-success"></div>
									<div class="table-responsive">
										<div class="card">
									<div class="card-header">
										<strong class="card-title">Order Preview</strong>
									</div>
									<div class="card-body">
									  <!-- Credit Card -->
									  <div id="pay-invoice">
										  <div class="card-title">
											 <tr>
												<td><img src="<?php echo base_url();?>images/14.png" alt="" class="h-8"></td>
												<td class="text-left">Product Name</td>
											</tr>
										  </div>
										  <hr>
										  <form action="" method="post" novalidate="novalidate">
											  <div class="form-group text-center">
												  <ul class="list-inline">
													  <li class="list-inline-item"><i class="text-muted fab fa-cc-visa fa-2x"></i></li>
													  <li class="list-inline-item"><i class="fab fa-cc-mastercard fa-2x"></i></li>
													  <li class="list-inline-item"><i class="fab fa-cc-amex fa-2x"></i></li>
													  <li class="list-inline-item"><i class="fab fa-cc-discover fa-2x"></i></li>
												  </ul>
											  </div>
											  <div class="form-group">
												  <label for="cc-payment" class="control-label mb-1">Payment amount</label>
												  <input id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
											  </div>
											  <div class="form-group has-success">
												  <label for="cc-name" class="control-label mb-1">Name on card</label>
												  <input id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
												  <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
											  </div>
											  <div class="form-group">
												  <label for="cc-number" class="control-label mb-1">Card number</label>
												  <input id="cc-number" name="cc-number" type="tel" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
												  <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
											  </div>
											  <div class="row">
												  <div class="col-6">
													  <div class="form-group">
														  <label for="cc-exp" class="control-label mb-1">Expiration</label>
														  <input id="cc-exp" name="cc-exp" type="tel" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
														  <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
													  </div>
												  </div>
												  <div class="col-6">
													  <label for="x_card_code" class="control-label mb-1">Security code</label>
													  <div class="input-group">
														  <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off">
														  
															<span class="col-auto align-self-center ">
																<span class="form-help bg-primary text-white" data-toggle="popover" data-placement="top" data-content="<span>The 3 digit code on back of the card..</span>">?</span>
															</span>
													  </div>
												  </div>
											  </div>
											  <div>
												  <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
													  <i class="fa fa-lock fa-lg"></i>&nbsp;
													  <span id="payment-button-amount">Pay $100.00</span>
													  <span id="payment-button-sending" style="display:none;">Sending…</span>
												  </button>
											  </div>
										  </form>
									  </div>
									</div>
								</div> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

<?php
$this->load->view("common/footer");
?>
				<script src="<?php echo base_url();?>js/timeline.min.js"></script>
				<script>
					timeline(document.querySelectorAll('.timeline'), {
						forceVerticalMode: 700,
						mode: 'vertical',
						verticalStartPosition: 'left',
						visibleItems: 4
					});
				</script>
	</body>
</html>