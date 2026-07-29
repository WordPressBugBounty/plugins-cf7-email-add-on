<?php
/**
 * Space email template.
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
			padding-left: 0px !important;
			padding-right: 0px !important;
			padding-top: 50px !important;
			padding-bottom: 50px !important;
		}
		.copyright-box {
			padding-top: 0 !important;
			padding-bottom: 50px !important;
		}
		.footer-bottom {
			padding-top: 0 !important;
			padding-bottom: 50px !important;
		}
	}
</style>
</head>
	<body style="margin: 0; padding: 0">
		<table width="100%" cellpadding="0" cellspacing="0" bgcolor="#222222" border="0" class="main_table" style="background-image: url([plugin_url]admin/assets/images/table-bg.png); background-color: #222222; padding-top: 20px;">
			<tr>
				<td align="center" style="padding-left: 15px; padding-right: 15px;">
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
														<a href="https://www.krishaweb.com" target="_blank" style="display: inline-block;"><img src="[plugin_url]admin/assets/images/logo.png" alt="KrishaWeb logo" class="img_resp img_center"></a>
													</td>
												</tr>
												<tr>
													<td height="60"></td>
												</tr>
												<tr>
													<td>
														<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
															<tbody>
																<tr>
																	<td width="600" style="padding-top: 50px; padding-bottom: 50px;" class="table-content">
																		<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
																			<tbody>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: bold; font-size: 28px; line-height: 32px; color: #f18f4e; text-align: center; padding-bottom: 25px; padding-left: 15px; padding-right: 15px;">
																						<h1 style="margin: 0; font-size: 28px; line-height: 32px; font-family: Courier, Courier New, monospace, Arial; font-weight: bold; color: #f18f4e;">Hello [your-name],</h1>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: bold; font-size: 24px; line-height: 38px; color: #f18f4e; text-align: center; padding-bottom: 25px; padding-left: 15px; padding-right: 15px;">
																						<h2 style="margin: 0; font-size: 24px; line-height: 38px; font-family: Courier, Courier New, monospace, Arial; font-weight: bold; color: #f18f4e;">Thanks for getting in touch</h2>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 20px; line-height: 28px; color: #f9f9f9; text-align: center; padding-bottom: 30px; padding-left: 15px; padding-right: 15px;">
																						We have received your inquiry. Happy to have you in our precious clients list. One of our sales representative will be in touch with you soon. <br>Till than stay tuned with the updates from KrishaWeb...
																					</td>
																				</tr>
																				<tr>
																					<td height="20"></td>
																				</tr>
																				<tr>
																					<td align="center">
																						<a href="https://www.krishaweb.com/blog" style="display: block; background: #f18f4e; color: #ffffff; font-size: 20px; text-decoration: none; font-family: Courier, Courier New, monospace, Arial; font-weight: bold; text-transform: uppercase; letter-spacing: 0.05em; width: 235px; height: 47px; line-height: 47px;">fresh from blog</a>
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
				<td class="footer-bottom" style="padding-top: 50px;">
					<div style="width: 100%; max-width: 620px; margin: 0 auto;">
						<table width="100%" cellpadding="0" cellspacing="0" border="0" class="table_responsive copyright-box">
							<tr>
								<td class="col_resp" style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 14px; line-height: 24px; color: #ffffff; text-align: left; padding-bottom: 30px; padding-top: 15px; padding-left: 15px; padding-right: 15px;">
									Copyright &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <a href="https://www.krishaweb.com/" target="_blank" style="text-decoration: none; font-weight: bold; color: #ffffff">KrishaWeb</a>
								</td>
								<td class="col_resp" style="font-family: Courier, Courier New, monospace, Arial; font-weight: normal; font-size: 14px; line-height: 24px; color: #ffffff; text-align: right; padding-bottom: 30px; padding-top: 15px; padding-left: 15px; padding-right: 15px;">
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
