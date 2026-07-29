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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
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
<body style="margin: 0; padding: 0; background-color: #f2f2f2">
	<span class="preheader" style="display: none !important; visibility: hidden; mso-hide: all; font-size: 16px; line-height: 16px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; color: #000000;">You have a new inquiry from your website — view the details inside.</span>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" bgcolor="#f2f2f2" class="main_table" style="background: #f2f2f2">
		<tbody>
			<tr>
				<td align="center" style="padding: 30px 0 30px 0">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" class="table_responsive" style="background: #ffffff; max-width: 600px; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; overflow: hidden; font-family: Verdana, Geneva, sans-serif;" bgcolor="#ffffff">
						<tbody>
							<tr>
								<td>
									<table width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td class="hero_cell" align="center" height="440" bgcolor="#af7cb7" style="background-image: url([plugin_url]admin/assets/images/gradient-img.png); background-color: #af7cb7; background-repeat: repeat-x; height: 440px;">
												<img src="[plugin_url]admin/assets/images/envelope.png" class="img_resp" alt="Email envelope illustration" style="display: block" />
												<h1 style="font-family: Verdana, Geneva, sans-serif; font-size: 35px; font-weight: 700; color: #ffffff; margin: 0 0 10px 0;">Congratulations</h1>
												<h2 style="font-family: Verdana, Geneva, sans-serif; font-size: 22px; color: #ffffff; margin: 0 0 26px 0; font-weight: normal;">You have a new inquiry from your website</h2>
												<a href="mailto:[your-email]" class="button_resp" style="font-family: Verdana, Geneva, sans-serif; display: inline-block; width: 190px; height: 50px; font-size: 14px; color: #174ea6; text-decoration: none; text-transform: uppercase; font-weight: 700; background: url() no-repeat; text-align: center;">
													<img src="[plugin_url]admin/assets/images/send-btn.png" class="img_resp" style="display: block" alt="Send a reply" />
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="padding: 30px 30px 30px 30px">
									<p style="font-family: Verdana, Geneva, sans-serif; font-size: 18px; line-height: 30px; color: #222222; margin: 0 0 0px 0; text-align: center;">
										Here is the inquiry that you have received from the <a href="[_url]" style="text-decoration: none; color: #174ea6">Contact Us</a> page
									</p>
								</td>
							</tr>
							<tr>
								<td style="padding: 0px 30px 30px 30px">
									<table class="table_responsive" cellspacing="0" cellpadding="0" width="100%">
										<tbody>
											<tr style="display: block; background: #f7f7f7; margin-bottom: 5px;">
												<th class="col_resp" width="227" style="display: inline-block; text-align: left; background: #f7f7f7; padding: 20px 20px; font-size: 14px; color: #666666; font-weight: 700; font-family: Verdana, Geneva, sans-serif; text-transform: uppercase;">Name</th>
												<td width="227" style="display: inline-block; background: #f7f7f7; font-size: 14px; color: #333333; padding: 20px 20px; font-family: Verdana, Geneva, sans-serif;">[your-name]</td>
											</tr>
											<tr style="display: block; background: #f7f7f7; margin-bottom: 5px;">
												<th class="col_resp" width="227" style="display: inline-block; text-align: left; background: #f7f7f7; padding: 20px 20px; font-size: 14px; color: #666666; font-weight: 700; font-family: Verdana, Geneva, sans-serif; text-transform: uppercase;">Email</th>
												<td width="227" style="display: inline-block; background: #f7f7f7; font-size: 14px; color: #333333; padding: 20px 20px; font-family: Verdana, Geneva, sans-serif;">
													<a href="tel:[tel-432]" style="color: #333333; text-decoration: none">[your-email]</a>
												</td>
											</tr>
											<tr style="display: block; background: #f7f7f7; margin-bottom: 5px;">
												<th class="col_resp" width="227" style="display: inline-block; text-align: left; background: #f7f7f7; padding: 20px 20px; font-size: 14px; color: #666666; font-weight: 700; font-family: Verdana, Geneva, sans-serif; text-transform: uppercase;">Subject</th>
												<td width="227" style="display: inline-block; background: #f7f7f7; font-size: 14px; color: #333333; padding: 20px 20px; font-family: Verdana, Geneva, sans-serif;">[your-subject]</td>
											</tr>
											<tr style="display: block; background: #f7f7f7; margin-bottom: 5px;">
												<th class="col_resp" width="227" style="display: inline-block; text-align: left; background: #f7f7f7; padding: 20px 20px; font-size: 14px; color: #666666; font-weight: 700; font-family: Verdana, Geneva, sans-serif; text-transform: uppercase;">Message</th>
												<td width="227" style="display: inline-block; background: #f7f7f7; font-size: 14px; color: #333333; padding: 20px 20px; font-family: Verdana, Geneva, sans-serif;">[your-message]</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
			<tr>
				<td style="text-align: center; font-size: 14px; color: #666666; text-transform: uppercase; font-family: Verdana, Geneva, sans-serif; padding: 0px 0 30px 0;">
					&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> Powered by<a href="https://www.krishastore.io/" target="_blank" style="color: #666666; text-decoration: none">krishaStore</a>.
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>
