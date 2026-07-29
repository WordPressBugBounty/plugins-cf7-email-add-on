<?php
/**
 * Purple Moon email template.
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
			/* border-color:; */
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
				padding-left: 10px !important;
				padding-right: 10px !important;
				box-sizing: border-box !important;
				border: 0;
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
			.table_responsive td, .table_responsive th {
				width: 100% !important;
				display: block !important;
				box-sizing: border-box !important;
			}
			.button_resp {
				display: block !important;
				width: 100% !important;
				max-width: 190px !important;
				margin: 0 auto !important;
			}
			.button_resp img {
				width: 100% !important;
				height: auto !important;
				display: block !important;
			}
			.hero_cell img {
				width: auto !important;
				max-width: 100% !important;
				height: auto !important;
				display: block !important;
				margin: 0 auto 20px auto !important;
			}
			.hero_cell {
				height: auto !important;
				padding: 30px 10px !important;
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
<body style="margin: 0; padding: 0">
	<table width="800" align="center" cellpadding="0" cellspacing="0" border="0" bgcolor="#f1eef8" class="main_table table_responsive">
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
									<table width="600" cellpadding="0" cellspacing="0" border="0" class="table_responsive" bgcolor="#fff">
										<tbody>
											<tr>
												<td style="height: 17px"></td>
											</tr>
											<tr>
												<td align="center">
													<a href="[_url]">
														<img src="[plugin_url]admin/assets/images/purple-moon/logo.png" alt="Purple Moon logo" class="img_resp" style="display: block" />
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
													<img src="[plugin_url]admin/assets/images/purple-moon/banner.jpg" alt="Purple Moon banner" class="img_resp" style="display: block" />
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
									<table width="540" cellpadding="0" cellspacing="0" border="0" class="table_responsive">
										<tbody>
											<tr>
												<td style="height: 35px"></td>
											</tr>
											<tr>
												<td style="font-family: Verdana, Geneva, sans-serif; font-size: 28px; line-height: 38px; color: #d9d3f1; font-weight: bold; text-align: center;">
													<h1 style="margin: 0; font-family: Verdana, Geneva, sans-serif; font-size: 28px; line-height: 38px; color: #000000; font-weight: bold; text-align: center;">Congratulations</h1>
												</td>
											</tr>
											<tr>
												<td style="height: 20px"></td>
											</tr>
											<tr>
												<td style="font-family: Verdana, Geneva, sans-serif; font-size: 16px; line-height: 26px; color: #3a304e; font-weight: normal; text-align: center;">
													<h2 style="margin: 0; font-family: Verdana, Geneva, sans-serif; font-size: 16px; line-height: 26px; color: #3a304e; font-weight: normal; text-align: center;">You have a new inquiry from your Website's <a href="[_url]" style="display: inline-block; color: #7c51ed">Contact Us</a> page</h2>
												</td>
											</tr>
											<tr>
												<td style="height: 25px"></td>
											</tr>
											<tr>
												<td>
													<table width="100%" cellpadding="0" cellspacing="0" border="2" style="border-style: solid; border-color: #d9d3f1" class="table_responsive">
														<tbody>
															<tr>
																<td width="194" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">Name</td>
																<td colspan="2" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">[your-name]</td>
															</tr>
															<tr>
																<td width="194" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">Email</td>
																<td colspan="2" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">[your-email]</td>
															</tr>
															<tr>
																<td width="194" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">Subject</td>
																<td colspan="2" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">[your-subject]</td>
															</tr>
															<tr>
																<td width="194" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">Message</td>
																<td colspan="2" style="border-width: 2px; border-style: solid; font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #000000; font-weight: normal; padding-left: 18px; padding-top: 20px; padding-bottom: 20px; border-color: #d9d3f1;">[your-message]</td>
															</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td style="height: 33px"></td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<!-- table content end-->
							<!-- copyright start -->
							<tr>
								<td>
									<table width="540" cellpadding="0" cellspacing="0" border="0" class="table_responsive" bgcolor="#f1eef8">
										<tbody>
											<tr>
												<td style="height: 25px"></td>
											</tr>
											<tr>
												<td style="font-family: Verdana, Geneva, sans-serif; font-size: 14px; line-height: 24px; color: #68617a; text-transform: uppercase; font-weight: normal; text-align: center;">
													&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Powered by <a href="https://www.krishastore.io/" target="_blank" style="text-decoration: none; color: #68617a; text-transform: uppercase;">krishaStore</a>.
												</td>
											</tr>
											<tr>
												<td style="height: 25px"></td>
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
