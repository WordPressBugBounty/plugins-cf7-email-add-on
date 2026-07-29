<?php
/**
 * Typewritter email template.
 *
 * @package WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" <?php language_attributes( 'xhtml' ); ?>>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<title>Email Addon for Contact Form 7</title>
	</head>
	<body style="margin: 0; padding: 0">
		<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#DCDDE1" border="0" style="background-color: #dcdde1; padding-top: 20px">
			<tr>
				<td align="center">
					<div style="width: 100%; max-width: 650px; margin: 0 auto">
						<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 650px; margin: 0 auto">
							<tbody>
								<tr>
									<td>
										<table width="100%" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 620px; margin: 0 auto">
											<tbody>
												<tr>
													<td height="400" bgcolor="#37B5CE" style="background-image: url([plugin_url]admin/assets/images/banner-bg.jpg); background-repeat: no-repeat; background-color: #37b5ce; text-align: center; font-family: Courier, Courier New, monospace, Arial; padding: 0 25px">
														<img src="[plugin_url]admin/assets/images/icon.png" alt="icon" style="display: inline-block" />
														<h1 style="display: block; color: #ffffff; font-size: 20px; font-weight: bold; letter-spacing: 0.05em; text-align: left; margin-bottom: 10px; padding-top: 40px">
															Hi, Administrator
														</h1>
														<p style="margin: 5px 0 10px; font-family: Verdana, sans-serif; text-align: left; color: #ffffff">
															We have an incoming lead for you.
														</p>
														<p style="margin: 5px 0 0; font-family: Verdana, sans-serif; text-align: left; color: #ffffff">
															See the detail of the lead below.
														</p>
													</td>
												</tr>
												<tr>
													<td bgcolor="#ffffff">
														<table width="100%" cellpadding="0" cellspacing="0" border="0">
															<tbody>
																<tr>
																	<td height="40"></td>
																</tr>
																<tr>
																	<td width="500" style="" align="center">
																		<table width="500" cellpadding="0" cellspacing="0" border="0">
																			<tbody>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #74737b; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px">
																						<table cellpadding="0" cellspacing="0" width="100%;">
																							<tr>
																								<td style="font-size: 18px; color: #a0a0a2; font-family: Verdana, sans-serif" width="200">
																									Name
																								</td>
																								<td style="font-size: 16px; font-family: sans-serif, Arial" width="300">
																									[your-name]
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #74737b; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px">
																						<table cellpadding="0" cellspacing="0" width="100%;">
																							<tr>
																								<td style="font-size: 18px; color: #a0a0a2; font-family: Verdana, sans-serif" width="200">
																									Email
																								</td>
																								<td style="font-size: 16px; font-family: sans-serif, Arial" width="300">
																									<a href="mailto:[your-email]" style="color: #74737b">[your-email]</a>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #74737b; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px">
																						<table cellpadding="0" cellspacing="0" width="100%;">
																							<tr>
																								<td style="font-size: 18px; color: #a0a0a2; font-family: Verdana, sans-serif" width="200">
																									Subject
																								</td>
																								<td style="font-size: 16px; font-family: sans-serif, Arial" width="300">
																									[your-subject]
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td style="font-size: 18px; vertical-align: top; color: #a0a0a2" width="500">
																		<table width="500" cellpadding="0" cellspacing="0" border="0" align="center">
																			<tbody>
																				<tr>
																					<td style="font-family: Verdana, sans-serif; color: #a0a0a2; text-align: left; padding-bottom: 10px; padding-left: 15px; padding-right: 15px">
																						Message
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td style="color: #f18f4e" width="500">
																		<table width="500" cellpadding="0" cellspacing="0" border="0" align="center">
																			<tbody>
																				<tr>
																					<td style="font-family: sans-serif, Arial; color: #74737b; text-align: left; padding-left: 15px; padding-right: 15px; padding-bottom: 35px; font-size: 16px; line-height: 24px">
																						[your-message]
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td bgcolor="#F6F6F6" style="padding: 15px">
																		<table cellpadding="0" cellspacing="0" width="100%">
																			<tr>
																				<td>
																					<a href="https://www.krishaweb.com" target="_blank" style="display: inline-block"><img src="[plugin_url]admin/assets/images/default-logo.png" alt="logo" /></a>
																				</td>
																				<td style="text-align: right">
																					<div style="margin-bottom: 5px">
																						<a href="mailto:support@krishaweb.com" style="color: #ababab; font-family: Courier, Courier New, monospace, Arial; font-size: 16px; display: inline-block; text-decoration: none">support@krishaweb.com</a>
																					</div>
																					<div>
																						<a href="tel:+919426064290" style="color: #ababab; font-family: Courier, Courier New, monospace, Arial; font-size: 16px; display: inline-block; text-decoration: none">+91 9426064290</a>
																					</div>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<!-- Msg Strat -->
											</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td style="padding-top: 10px">
					<div style="width: 100%; max-width: 620px; margin: 0 auto">
						<table width="100%" cellpadding="0" cellspacing="0" border="0" style="">
							<tr>
								<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 14px; line-height: 24px; color: #444444; text-align: left; padding-bottom: 30px; padding-top: 15px; padding-left: 15px; padding-right: 15px">
									Copyright &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <a href="https://www.krishaweb.com/" target="_blank" style="text-decoration: none; font-weight: bold; color: #444444">KrishaWeb</a>
								</td>
								<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 14px; line-height: 24px; color: #444444; text-align: right; padding-bottom: 30px; padding-top: 15px; padding-left: 15px; padding-right: 15px">
									Powered by <a href="https://www.krishastore.io/" target="_blank" style="text-decoration: none; font-weight: bold; color: #444444">krishaStore</a>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
