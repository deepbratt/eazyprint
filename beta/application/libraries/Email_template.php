<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Email Template of EazyPrint
 *
 * @author Sujit
 */
 

 
class Email_template {

	public function send_query($name,$email,$number,$subject,$message){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Enquiry Mail</title>
		 </head>
		 <body>
				<table data-bgcolor="BodyBg" data-module="notemail-2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="currentTable">
				<tr>
					<td valign="middle" align="center">
						<!--Logo Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="line-height:80px; font-size:80px;" valign="middle" align="center" height="80">
												&nbsp;
											</td>
										</tr>
									</table>
								</td>
							</tr>
 
						<!--Logo Part End-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="border-radius: 8px 8px 0px 0px; background-color:white;border-bottom: 2px solid #EC6B0D;" data-bgcolor="theme-bg" valign="middle" bgcolor="#18c197" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
													<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left" class="editable">
															<table class="full" width="165" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td style="line-height:5px; font-size:5px;" valign="middle" align="center" height="5">
																		&nbsp;
																	</td>
																</tr>
																<tr>
																	<td valign="middle" align="center">
																		<a href="#"><!-- <img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /> -->EAZYPRINT</a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Content Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left">
															<table class="two-left-inner" width="365" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td valign="top" align="left">
																		
																		<table class="full" width="250" cellspacing="0" cellpadding="0" border="0" align="left">
																			<tr>
																				<td valign="top" align="left">
																					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tr>
																							<td style="font-family:Open Sans, Verdana, Arial; font-size:24px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																								<multiline>
																									Hi EazyCrew,
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									New enquiry from user
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
																								&nbsp;
																							</td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Below new mail received from contact page :
																<li>Name: '.$name.'</li>
																<li>Email: '.$email.'</li>
																<li>Phone number : '.$number.'</li>
																<li>Subject '.$subject.'</li>
																<li>Message: '.$message.'</li>
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																If this was not you, then please ignore and delete this email.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Kind regards,<br/>
																EazyPrint
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
														
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																 This is an automated message from EazyPrint. Please do not reply to this message. Contact our Customer Support team using sales@eazyprint.in.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
													
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Content Part End-->

						<!--Copyright Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td valign="middle" align="center">
												<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
													<tr>
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="center">
															<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
																<tr>
																	<td style="font-family:Open Sans, Verdana, Arial; font-size:14px; color:#272f3a; font-weight:normal; line-height:24px;" valign="top" align="left">
																		<multiline>
																			Copyright &copy; 2019 Clickrstop Software Solutions Pvt Ltd. &nbsp;
																		</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																		<!-- <unsubscribe>
																			Company number: NI643316 VAT registration number 297 5082 62
																		</unsubscribe> -->
																		<multiline>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Copyright Part End-->

					</td>
				</tr>
			</table>
		  
		 </body>
		</html>';
		return $message;
	}

	public function send_query($name,$email,$number,$subject,$message){
		$message = '<!doctype html>
		<html lang="en">
		 <head>
		  <meta charset="UTF-8">
		  <meta name="Generator" content="EditPlus®">
		  <meta name="Author" content="">
		  <meta name="Keywords" content="">
		  <meta name="Description" content="">
		  <title>Thank you</title>
		 </head>
		 <body>
				<table data-bgcolor="BodyBg" data-module="notemail-2" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="currentTable">
				<tr>
					<td valign="middle" align="center">
						<!--Logo Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="line-height:80px; font-size:80px;" valign="middle" align="center" height="80">
												&nbsp;
											</td>
										</tr>
									</table>
								</td>
							</tr>
 
						<!--Logo Part End-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="border-radius: 8px 8px 0px 0px; background-color:white;border-bottom: 2px solid #EC6B0D;" data-bgcolor="theme-bg" valign="middle" bgcolor="#18c197" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
													<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left" class="editable">
															<table class="full" width="165" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td style="line-height:5px; font-size:5px;" valign="middle" align="center" height="5">
																		&nbsp;
																	</td>
																</tr>
																<tr>
																	<td valign="middle" align="center">
																		<a href="#"><!-- <img src="https://www.staging.protectbox.com/images/logo.png" alt=""  height="45" /> -->EAZYPRINT</a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Content Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center">
												<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
													<tr>
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="left">
															<table class="two-left-inner" width="365" cellspacing="0" cellpadding="0" border="0" align="left">
																<tr>
																	<td valign="top" align="left">
																		
																		<table class="full" width="250" cellspacing="0" cellpadding="0" border="0" align="left">
																			<tr>
																				<td valign="top" align="left">
																					<table width="100%" cellspacing="0" cellpadding="0" border="0" align="left">
																						<tr>
																							<td style="font-family:Open Sans, Verdana, Arial; font-size:24px; color:#312e2e; font-weight:normal; line-height:36px;" valign="top" align="left">
																								<multiline>
																									Hi '.ucfirst($name).',
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Open Sans, Verdana, Arial; font-size: 20px; font-weight: normal; line-height: 34px; color: rgb(108, 167, 27);" data-color="theme-colour" valign="top" align="left">
																								<multiline>
																									Thank you
																								</multiline>
																							</td>
																						</tr>
																						<tr>
																							<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
																								&nbsp;
																							</td>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Thank you for reaching us. We received your query and will get back to you soon.
															</multiline>
														</td>
													</tr>
													
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																If this was not you, then please ignore and delete this email.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:16px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																Kind regards,<br/>
																EazyPrint
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
														
													<tr>
														<td style="font-family:Open Sans, Verdana, Arial; font-size:12px; color:#767676; font-weight:normal; line-height:32px;" valign="top" align="left">
															<multiline>
																 This is an automated message from EazyPrint. Please do not reply to this message. Contact our Customer Support team using sales@eazyprint.in.
															</multiline>
														</td>
													</tr>
													<tr>
														<td style="line-height:10px; font-size:10px;" valign="middle" align="center" height="10">
															&nbsp;
														</td>
													</tr>
													
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Content Part End-->

						<!--Copyright Part Start-->

						<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
							<tr>
								<td valign="top" align="center">
									<table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
										<tr>
											<td valign="middle" align="center">
												<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
													<tr>
														<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">
															&nbsp;
														</td>
													</tr>
													<tr>
														<td valign="top" align="center">
															<table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
																<tr>
																	<td style="font-family:Open Sans, Verdana, Arial; font-size:14px; color:#272f3a; font-weight:normal; line-height:24px;" valign="top" align="left">
																		<multiline>
																			Copyright &copy; 2019 Clickrstop Software Solutions Pvt Ltd. &nbsp;
																		</multiline><span style="font-family:Open Sans, Verdana, Arial; font-size:13px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;"></span>
																		<!-- <unsubscribe>
																			Company number: NI643316 VAT registration number 297 5082 62
																		</unsubscribe> -->
																		<multiline>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">
															&nbsp;
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!--Copyright Part End-->

					</td>
				</tr>
			</table>
		  
		 </body>
		</html>';
		return $message;
	}
}