<?php
/**
 * Default email template for admin.
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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
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
			}
			.table_responsive {
				width: 100% !important;
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
		}
	</style>
	</head>
	<body style="padding: 0; margin: 0; background-color: #ffffff">
		<span class="preheader" style="display: none !important; visibility: hidden; mso-hide: all; font-size: 16px; line-height: 1px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; color: #000000;">You have a new inquiry from your website — view the details inside.</span>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#FFFFFF" class="main_table" style="background-image: url([plugin_url]admin/assets/images/table-bg.jpg); background-repeat: repeat-x; background-color: #ffffff; padding-top: 20px;">
			<tr>
				<td align="center">
					<div style="width: 100%; max-width: 650px; margin: 0 auto">
						<table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="table_responsive" style="width: 100%; max-width: 650px; margin: 0 auto">
							<tbody>
								<tr>
									<td>
										<table width="100%" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0" style="width: 100%; max-width: 620px; margin: 0 auto; background: #ffffff;">
											<tbody>
												<tr>
													<td style="background-color: #ffffff">
														<table width="100%" cellpadding="0" cellspacing="0" border="0" style="padding-top: 20px; padding-bottom: 20px">
															<tbody>
																<tr>
																	<td style="text-align: center">
																		<a href="https://www.krishaweb.com" target="_blank" style="display: inline-block"><img src="[plugin_url]admin/assets/images/default-logo.png" alt="KrishaWeb logo" width="200" height="40"></a>
																	</td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
												<tr>
													<td style="background-color: #f9f9f9; color: #000000" height="300">
														<h1 style="color: #1ca1ec; font-size: 30px; text-align: center; font-family: Verdana, sans-serif; font-weight: bold; margin: 0 0 20px 0; padding: 0; line-height: 1.1;">Congratulations</h1>
														<div style="color: #000000; font-size: 20px; font-family: Verdana, sans-serif; text-align: center;">You have a new inquiry from your website</div>
													</td>
												</tr>
												<tr>
													<td>
														<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color: #ffffff; border: 4px solid #f9f9f9;">
															<tbody>
																<tr>
																	<td width="600" style="padding-top: 70px; padding-bottom: 40px; padding-left: 20px; padding-right: 20px;">
																		<table width="100%" cellpadding="0" cellspacing="0" border="0">
																			<tbody>
																				<tr>
																					<td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;">
																						<label style="font-weight: bold; display: block; margin-bottom: 10px;">Name</label>
																						<div style="margin-bottom: 15px">[your-name]</div>
																						<div style="border-bottom: 2px solid #f4f4f4;"></div>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;">
																						<label style="font-weight: bold; display: block; margin-bottom: 10px;">Email</label>
																						<div style="margin-bottom: 15px">
																							<a href="mailto:[your-email]" style="color: #000000">[your-email]</a>
																						</div>
																						<div style="border-bottom: 2px solid #f4f4f4;"></div>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px;">
																						<label style="font-weight: bold; display: block; margin-bottom: 10px;">Subject</label>
																						<div style="margin-bottom: 15px">[your-subject]</div>
																						<div style="border-bottom: 2px solid #f4f4f4;"></div>
																					</td>
																				</tr>
																				<tr>
																					<td style="font-family: Verdana, sans-serif; color: #000000; text-align: left; padding-bottom: 15px; line-height: 25px;">
																						<label style="font-weight: bold; display: block; margin-bottom: 10px;">Message</label>
																						<div>[your-message]</div>
																					</td>
																				</tr>
																				<tr>
																					<td height="20"></td>
																				</tr>
																				<tr>
																					<td>
																						<table width="100%" cellpadding="0" cellspacing="0" border="0">
																							<tbody>
																								<tr>
																									<td style="text-align: center">
																										<a href="https://www.facebook.com/KrishaWeb/" target="_blank" style="display: inline-block; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/facebook-icon.png" alt="Facebook" width="45" height="45"></a>
																										<a href="https://twitter.com/krishaweb" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/twitter-icon.png" alt="Twitter" width="45" height="45"></a>
																										<a href="https://www.linkedin.com/company/krishaweb-technology" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/linkedin-icon.png" alt="LinkedIn" width="45" height="45"></a>
																										<a href="https://www.instagram.com/krishaweb/" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/instagram-icon.png" alt="Instagram" width="45" height="45"></a>
																										<a href="https://www.pinterest.com/krishaweb/" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px;"><img src="[plugin_url]admin/assets/images/pinterest-icon.png" alt="Pinterest" width="45" height="45"></a>
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
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
			<tr>
				<td class="copyright_bottom">
					<div style="width: 100%; max-width: 620px; margin: 0 auto">
						<table class="table_responsive" width="100%" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td class="col_resp" style="font-family: Verdana, sans-serif; font-weight: normal; font-size: 14px; line-height: 24px; color: #3e3e3e; text-align: left; padding-bottom: 30px; padding-top: 15px;">Copyright &copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <a href="https://www.krishaweb.com/" target="_blank" style="text-decoration: none; color: #1a1f8e">KrishaWeb</a></td>
								<td class="col_resp" style="font-family: Verdana, sans-serif; font-weight: normal; font-size: 14px; line-height: 24px; color: #3e3e3e; text-align: right; padding-bottom: 30px; padding-top: 15px;">Powered by <a href="https://www.krishastore.io/" target="_blank" style="text-decoration: none; color: #1a1f8e">krishaStore</a></td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
