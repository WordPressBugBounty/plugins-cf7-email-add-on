<?php
/**
 * Donate text email template for user.
 *
 * @package WordPress
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" <?php language_attributes( 'xhtml' ); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Email Addon for Contact Form 7</title>
<style type="text/css">
	body {
		margin: 0 !important;
		padding: 0 !important;
		-webkit-text-size-adjust: 100% !important;
		-ms-text-size-adjust: 100% !important;
		-webkit-font-smoothing: antialiased !important;
	}
	img {
		border: 0 !important;
		outline: none !important;
	}
	table {
		border-collapse: collapse;
		mso-table-lspace: 0px;
		mso-table-rspace: 0px;
	}
	td, a, span {
		border-collapse: collapse;
		mso-line-height-rule: exactly;
	}
	p {
		margin: 0px !important;
		padding: 0px !important;
	}
	/* Default readable text color to avoid accidental white-on-white text */
	body, td, p, a, span {
		color: #000000;
	}
	.em_defaultlink a {
		color: inherit !important;
		text-decoration: none !important;
	}
	.ExternalClass * {
		line-height: 100%;
	}
	span.MsoHyperlink {
		mso-style-priority: 99;
		color: inherit;
	}
	span.MsoHyperlinkFollowed {
		mso-style-priority: 99;
		color: inherit;
	}
	@media only screen and (max-width: 680px) {
		.main_table {
			overflow: hidden;
			width: 100% !important;
			min-width: 0 !important;
			padding-left: 10px !important;
			padding-right: 10px !important;
		}
		.table_responsive {
			width: 100% !important;
			max-width: 100% !important;
			padding-left: 10px !important;
			padding-right: 10px !important;
		}
		.table_responsive td, .table_responsive th {
			width: 100% !important;
			display: block !important;
			box-sizing: border-box !important;
		}
		.table_responsive.two_col tr td:first-child {
			width: 30% !important;
		}
		.two_col td, .two_col th {
			display: table-cell !important;
			width: 50% !important;
			box-sizing: border-box !important;
			vertical-align: top !important;
		}
		.res_hide {
			display: none !important;
		}
		.copyright_bottom {
			padding-bottom: 30px;
		}
		.col_resp {
			width: 100% !important;
			display: block !important;
			text-align: center !important;
			padding-bottom: 0 !important;
		}
		.img_resp {
			width: 100% !important;
			height: auto !important;
			display: block !important;
			padding-bottom: 10px !important;
		}
		.img_center {
			display: block !important;
			margin: 0 auto 10px !important;
		}
		.txt_center {
			text-align: center !important;
		}
		.right_col {
			padding-left: 0 !important;
			padding-top: 20px !important;
		}
		.btn_group a {
			display: block !important;
		}
		.btn_group span {
			display: block !important;
			height: 10px !important;
		}
		.footer-spacing {
			padding-left: 10px !important;
			padding-right: 10px !important;
		}
		.copyright-box td {
			text-align: center !important;
		}
		.copyright-box td:first-child {
			padding-bottom: 0 !important;
		}
		.table-content {
			padding-left: 30px !important;
			padding-right: 30px !important;
		}
	}
</style>
</head>
<body style="margin: 0; padding: 0">
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td style="background-image: url([plugin_url]admin/assets/images/gradient/table-bg.jpg); background-repeat: no-repeat; background-color: #f0f0f0; padding-top: 65px;">
				<table cellpadding="0" cellspacing="0" width="600" align="center" class="main_table table_responsive">
					<tr>
						<td align="center">
							<div style="width: 100%; max-width: 650px; margin: 0 auto;">
								<table width="100%" cellpadding="0" cellspacing="0" border="0" class="main_table table_responsive" style="width: 100%; max-width: 650px; margin: 0 auto;">
									<tbody>
										<tr>
											<td>
												<img src="[plugin_url]admin/assets/images/gradient/lawyer.png" alt="Layer image" class="img_resp" style="display: block;">
											</td>
										</tr>
										<tr>
											<td>
												<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" class="table_responsive" style="width: 100%; max-width: 620px; margin: 0 auto; background: #ffffff;">
													<tbody>
														<tr>
															<td style="background-color: #ffffff;">
																<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
																	<tbody>
																		<tr>
																			<td style="text-align: center; padding-top: 50px; padding-bottom: 50px;">
																				<a href="https://www.krishaweb.com/" target="_blank" style="display: inline-block;"><img src="[plugin_url]admin/assets/images/default-logo.png" alt="KrishaWeb logo"></a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</td>
														</tr>
														<tr>
															<td>
																<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive" style="background-color: #ffffff;">
																	<tbody>
																		<tr>
																			<td width="600" style="padding-top: 0px; padding-bottom: 60px; padding-left: 70px; padding-right: 70px;" class="table-content">
																				<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
																					<tbody>
																						<tr>
																							<td style="font-family: Verdana, Geneva, sans-serif; font-size: 30px; line-height: 32px; color: #444444; text-align: center; padding-bottom: 15px;">
																								<h1 style="margin: 0; font-size: 30px; line-height: 32px; font-family: Verdana, Geneva, sans-serif; font-weight: bold; color: #444444;">Thanks <strong> [your-name]</strong></h1>
																							</td>
																						</tr>
																						<tr>
																							<td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal; font-size: 16px; line-height: 28px; color: #444444; text-align: center; padding-bottom: 10px;">
																								For Donate us
																							</td>
																						</tr>
																						<tr>
																							<td align="center" style="font-family: Verdana, Geneva, sans-serif; font-weight: normal; font-size: 16px; line-height: 28px; color: #444444; padding-bottom: 60px; padding-top: 40px;">
																								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
																							</td>
																						</tr>
																						<!-- Social Icon Start -->
																						<tr>
																							<td>
																								<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
																									<tbody>
																										<tr>
																											<td style="text-align: center;">
																												<a href="https://www.facebook.com/KrishaWeb/" target="_blank" style="display: inline-block; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/gradient/facebook-icon.png" alt="Facebook icon"></a>
																												<a href="https://twitter.com/krishaweb" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/gradient/twitter-icon.png" alt="Twitter icon"></a>
																												<a href="https://www.linkedin.com/company/krishaweb-technology" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/gradient/linkedin-icon.png" alt="LinkedIn icon"></a>
																												<a href="https://www.instagram.com/krishaweb/" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/gradient/instagram-icon.png" alt="Instagram icon"></a>
																												<a href="https://www.pinterest.com/krishaweb/" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/gradient/pinterest-icon.png" alt="Pinterest icon"></a>
																											</td>
																										</tr>
																									</tbody>
																								</table>
																							</td>
																						</tr>
																						<!-- Social Icon End -->
																					</tbody>
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
					<!-- Footer Start -->
					<tr>
						<td>
							<div style="width: 100%; max-width: 620px; margin: 0 auto;">
								<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive copyright-box" style="">
									<tr>
										<td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal; font-size: 14px; line-height: 24px; color: #333333; text-align: left; padding-bottom: 25px; padding-top: 15px;">
											Copyright &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <a href="https://www.krishaweb.com/" target="_blank" style="text-decoration: none; color: #333333">KrishaWeb</a>
										</td>
										<td style="font-family: Verdana, Geneva, sans-serif; font-weight: normal; font-size: 14px; line-height: 24px; color: #333333; text-align: right; padding-bottom: 25px; padding-top: 15px;">
											Powered by <a href="https://www.krishastore.io/" target="_blank" style="text-decoration: none; color: #333333">krishaStore</a>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
					<!-- Footer End -->
				</table>
			</td>
		</tr>
	</table>
</body>
</html>
