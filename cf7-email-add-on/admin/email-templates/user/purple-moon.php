<?php
/**
 * Purple moon email template.
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
	<table width="800" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#f1eef8" class="main_table">
		<tbody>
			<tr>
				<td align="center">
					<table width="600" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
						<tbody>
							<tr>
								<td style="height: 20px"></td>
							</tr>
							<!-- logo start -->
							<tr>
								<td>
									<table width="600" cellpadding="0" cellspacing="0" border="0" bgcolor="#fff" class="table_responsive">
										<tbody>
											<tr>
												<td style="height: 17px"></td>
											</tr>
											<tr>
												<td align="center">
													<a href="[_url]">
														<img src="[plugin_url]admin/assets/images/purple-moon/logo.png" alt="KrishaWeb logo" style="display: block" />
													</a>
												</td>
											</tr>
											<tr>
												<td style="height: 17px"></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<!-- logo end -->
							<!-- banner start -->
							<tr>
								<td>
									<table width="600" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
										<tbody>
											<tr>
												<td>
													<img src="[plugin_url]admin/assets/images/purple-moon/banner.jpg" alt="Purple moon email banner" class="img_resp" style="display: block" />
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<!-- banner end -->
							<!-- table content start -->
							<tr>
								<td align="center" style="background-color: #fff">
									<table width="490" cellpadding="0" cellspacing="0" border="0" class="table-content">
										<tbody>
											<tr>
												<td style="height: 35px"></td>
											</tr>
											<tr>
												<td style="font-family: Verdana, Geneva, sans-serif; font-size: 28px; line-height: 38px; color: #130b39; font-weight: bold; text-align: center;">
													<h1 style="margin: 0; font-size: 28px; line-height: 38px; font-family: Verdana, Geneva, sans-serif; font-weight: bold; color: #130b39;">Thank you</h1>
												</td>
											</tr>
											<tr>
												<td style="height: 20px"></td>
											</tr>
											<tr>
												<td style="font-family: Verdana, Geneva, sans-serif; font-size: 16px; line-height: 26px; color: #3a304e; font-weight: normal; text-align: center;">We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please call us on to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.</td>
											</tr>
											<tr>
												<td style="height: 27px"></td>
											</tr>
											<tr>
												<td align="center">
													<a href="mailto:[_site_admin_email]" style="text-decoration: none; display: inline-block; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 50px; color: #fff; font-weight: bold; text-transform: uppercase; height: 50px; width: 160px; background-color: #5d36b1; border-radius: 100px;">Call us</a>
												</td>
											</tr>
											<tr>
												<td style="height: 40px"></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<!-- table content end-->
							<!-- copyright start -->
							<tr>
								<td>
									<table width="600" cellpadding="0" cellspacing="0" border="0" bgcolor="#f1eef8" class="table_responsive copyright-box">
										<tbody>
											<tr>
												<td style="height: 20px"></td>
											</tr>
											<tr>
												<td class="col_resp" style="font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 22px; color: #68617a; text-transform: uppercase; font-weight: normal;">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Powered by <a href="[_url]" target="_blank" style="text-decoration: none; color: #68617a; text-transform: uppercase;">krishaStore</a>.</td>
												<td class="col_resp" style="text-align: center">
													<a href="https://www.facebook.com/KrishaWeb/" target="_blank" style="display: inline-block; margin-right: 3px">
														<img src="[plugin_url]admin/assets/images/purple-moon/facebook-icon.png" alt="Facebook icon" />
													</a>
													<a href="#" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px">
														<img src="[plugin_url]admin/assets/images/purple-moon/google-icon.png" alt="Google icon" />
													</a>
													<a href="https://www.instagram.com/" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px">
														<img src="[plugin_url]admin/assets/images/purple-moon/instagram-icon.png" alt="Instagram icon" />
													</a>
													<a href="https://www.linkedin.com/company/krishaweb-technology" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px">
														<img src="[plugin_url]admin/assets/images/purple-moon/linkedin-icon.png" alt="LinkedIn icon" />
													</a>
													<a href="https://www.pinterest.com/krishaweb/" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px">
														<img src="[plugin_url]admin/assets/images/purple-moon/pinterest-icon.png" alt="Pinterest icon" />
													</a>
													<a href="https://twitter.com/krishaweb" target="_blank" style="display: inline-block; margin-left: 3px; margin-right: 3px">
														<img src="[plugin_url]admin/assets/images/purple-moon/twitter-icon.png" alt="Twitter icon" />
													</a>
												</td>
											</tr>
											<tr>
												<td style="height: 20px"></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<!-- copyright end -->
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
