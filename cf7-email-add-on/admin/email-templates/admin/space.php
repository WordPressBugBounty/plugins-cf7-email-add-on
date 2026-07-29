<?php
/**
 * Space Default email.
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
		color: #ffffff;
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
	}
</style>
</head>
	<body style="margin: 0; padding: 0">
		<table width="100%" class="main_table" cellpadding="0" bgcolor="#222222" cellspacing="0" border="0" style="background-image: url([plugin_url]admin/assets/images/table-bg.png); background-color: #222222; padding-top: 20px;">
			<tr>
				<td align="center">
					<div style="width: 100%; max-width: 650px; margin: 0 auto;">
						<table width="100%" cellpadding="0" cellspacing="0" border="0" class="main_table table_responsive" style="width: 100%; max-width: 650px; margin: 0 auto;">
							<tbody>
								<tr>
									<td>
										<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive" style="width: 100%; max-width: 620px; margin: 0 auto;">
											<tbody>
												<tr>
													<td height="60"></td>
												</tr>
												<tr>
													<td style="text-align: center;">
														<a href="https://www.krishaweb.com" target="_blank" style="display: inline-block;"><img src="[plugin_url]admin/assets/images/logo.png" alt="KrishaWeb logo" class="img_resp" style="display: block;"></a>
													</td>
												</tr>
												<tr>
													<td height="60"></td>
												</tr>
												<tr>
													<td style="padding-bottom: 100px;">
														<h1 style="color: #f18f4e; font-size: 30px; text-align: center; font-family: Courier, Courier New, monospace, Arial; font-weight: bold; margin-bottom: 20px;">Congratulations</h1>
														<div style="color: #f9f9f9; font-size: 20px; font-family: Courier, Courier New, monospace, Arial; text-align: center;">
															You have a new inquiry from your website
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
															<tbody>
																<tr>
																	<td width="500" style="" align="center">
																		<table width="500" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
																			<tbody>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #ffffff; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px;">
																						<table cellpadding="0" cellspacing="0" width="100%;" class="table_responsive two_col">
																							<tr>
																								<td style="font-weight: bold; font-size: 22px; color: #f18f4e;" width="200">
																									Name
																								</td>
																								<td style="font-size: 16px; font-family: sans-serif, Arial;" width="300">
																									[your-name]
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #ffffff; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px;">
																						<table cellpadding="0" cellspacing="0" width="100%;" class="table_responsive two_col">
																							<tr>
																								<td style="font-weight: bold; font-size: 22px; color: #f18f4e;" width="200">
																									Email
																								</td>
																								<td style="font-size: 16px; font-family: sans-serif, Arial;" width="300">
																									<a href="mailto:[your-email]" style="color: #ffffff;">[your-email]</a>
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #ffffff; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px;">
																						<table cellpadding="0" cellspacing="0" width="100%;" class="table_responsive two_col">
																							<tr>
																								<td style="font-weight: bold; font-size: 22px; color: #f18f4e;" width="200">
																									Subject
																								</td>
																								<td style="font-size: 16px; font-family: sans-serif, Arial;" width="300">
																									[your-subject]
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; color: #ffffff; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px;">
																						<table cellpadding="0" cellspacing="0" width="100%;" class="table_responsive two_col">
																							<tr>
																								<td style="font-weight: bold; font-size: 22px; vertical-align: top; color: #f18f4e;" width="200">
																									Message
																								</td>
																								<td style="font-size: 16px; line-height: 26px; font-family: sans-serif, Arial;" width="300">
																									[your-message]
																								</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
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
				<td style="padding-top: 50px;">
					<div style="width: 100%; max-width: 620px; margin: 0 auto;">
						<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive copyright-box">
							<tr>
								<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 14px; line-height: 24px; color: #ffffff; text-align: left; padding-bottom: 30px; padding-top: 15px; padding-left: 15px; padding-right: 15px;">
									Copyright &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <a href="https://www.krishaweb.com/" target="_blank" style="text-decoration: none; font-weight: bold; color: #ffffff;">KrishaWeb</a>
								</td>
								<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 14px; line-height: 24px; color: #ffffff; text-align: right; padding-bottom: 30px; padding-top: 15px; padding-left: 15px; padding-right: 15px;">
									Powered by <a href="https://www.krishastore.io/" target="_blank" style="text-decoration: none; font-weight: bold; color: #ffffff;">krishaStore</a>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
