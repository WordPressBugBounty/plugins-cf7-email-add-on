<?php
/**
 * Gradient email template.
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="main_table" style="background: #f2f2f2">
		<tbody>
			<tr>
				<td align="center" style="padding: 30px 0 30px 0">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="main_table table_responsive" style="background: #ffffff; max-width: 600px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; overflow: hidden; font-family: Verdana, Geneva, sans-serif;">
						<tbody>
							<tr>
								<td>
									<table width="100%" cellpadding="0" cellspacing="0" class="table_responsive">
										<tr>
											<td align="center" height="520" bgcolor="#8d89c9" style="background-image: url([plugin_url]admin/assets/images/gradient-img2.png); background-color: #8d89c9; background-repeat: repeat-x; height: 520px;">
												<img src="[plugin_url]admin/assets/images/thank-you-img.png" alt="Thank you illustration" class="img_resp img_center" style="display: block;">
												<h1 style="font-family: Verdana, Geneva, sans-serif; font-size: 35px; font-weight: 700; color: #ffffff; margin: 0 0 10px 0;">Thank you</h1>
												<p style="font-family: Verdana, Geneva, sans-serif; max-width: 90%; font-size: 18px; color: #ffffff; margin: 0 auto 26px;">
													We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please call us to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.
												</p>
												<a href="mailto:[_site_admin_email]" style="font-family: Verdana, Geneva, sans-serif; display: inline-block; width: 160px; height: 50px; font-size: 14px; color: #8a89cb; text-decoration: none; text-transform: uppercase; font-weight: 700; background: url() no-repeat; text-align: center;">
													<img src="[plugin_url]admin/assets/images/send-btn.png" style="display: block;" alt="Contact us">
												</a>
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
				<td align="center" style="padding: 0px 0 30px 0">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_responsive copyright-box" style="max-width: 600px; overflow: hidden; font-family: Verdana, Geneva, sans-serif;">
						<tbody>
							<tr>
								<td style="text-align: center; font-size: 12px; color: #666666; text-transform: uppercase; font-family: Verdana, Geneva, sans-serif;">
									&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Powered by <a href="https://www.krishastore.io/" target="_blank" style="color: #666666; text-decoration: none;">krishaStore</a>.
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
