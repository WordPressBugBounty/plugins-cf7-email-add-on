<?php
/**
 * Email addon template.
 *
 * @package WordPress
 */

//phpcs:ignore WordPress.Security.NonceVerification.Recommended
$contact_form_id = ! empty( $_REQUEST['post'] ) ? (int) $_REQUEST['post'] : 0;
if ( isset( $contact_form_id ) ) {
	$chk_cf7ea_admin_template     = get_post_meta( $contact_form_id, 'cf7ea_admin_template', true );
	$chk_cf7ea_thank_you_template = get_post_meta( $contact_form_id, 'cf7ea_thank_you_template', true );
}
?>
<div class="cf7ea-wrap">
	<div class="cf7ea-title">
		<h2><?php esc_html_e( 'Templates For User', 'cf7-email-add-on' ); ?></h2>
		<div class="export-template">
			<a href="<?php echo esc_url( 'https://www.krishaweb.com/email-templates/' ); ?>" target="blank" class="export"><?php esc_html_e( 'Export', 'cf7-email-add-on' ); ?></a>
		</div>
	</div>
	<!-- template list start -->
	<div class="cf7ea-template-list thank_you_templates">
		<ul>
			<!-- Template Start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'donate-text' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/donate/donate-user-preview.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/donate/donate-user-preview.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="donate_text_user" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="donate-text" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'donate-text' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="donate_text_user"><?php esc_html_e( 'Donate Text', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- Template End -->

			<!-- Template Start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'interview-box' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/interview/interview-box.png' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/interview/interview-box.png' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="interview_box_user" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="interview-box" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'interview-box' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="interview_box_user"><?php esc_html_e( 'Interview Box', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- Template End -->

			<!-- Template Start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'meeting' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/meeting/user-preview.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/meeting/user-preview.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="meeting_user" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="meeting" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'meeting' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="meeting_user"><?php esc_html_e( 'Meeting', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- Template End -->

			<!-- Template Start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'gradient' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/gradient-user.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/gradient-user.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="gradient" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="gradient" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'gradient' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="gradient"><?php esc_html_e( 'Gradient', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- Template End -->

			<!-- Template Start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'purple-moon' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/purple-moon/user.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/purple-moon/user.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="purple_moon_user" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="purple-moon" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'purple-moon' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="purple_moon_user"><?php esc_html_e( 'Purple Moon', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- Template End -->
			
			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'space' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/space-preview-user.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/space-preview-user.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="tyradio1" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="space" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'space' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="tyradio1"><?php esc_html_e( 'Space', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->
			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'default' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/default-preview-user.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/default-preview-user.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="tyradio2" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="default" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'default' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="tyradio2"><?php esc_html_e( 'Default', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->
			<!-- Template Start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'typewriter' === $chk_cf7ea_thank_you_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/typewriter-preview-user.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/typewriter-preview-user.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="tyradio3" name="cf7ea_thank_you_email" class="cf7ea_email_template custom-control-input" value="typewriter" 
							<?php
							if ( ! empty( $chk_cf7ea_thank_you_template ) && ( 'typewriter' === $chk_cf7ea_thank_you_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="tyradio3"><?php esc_html_e( 'Typewriter', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- Template End -->

		</ul>
	</div>
	<!-- template list end -->
	<div class="cf7ea-title">
		<h2><?php esc_html_e( 'Templates For Admin', 'cf7-email-add-on' ); ?></h2>
		<div class="export-template">
			<a href="<?php echo esc_url( 'https://www.krishaweb.com/email-templates/' ); ?>" target="blank" class="export"><?php esc_html_e( 'Export', 'cf7-email-add-on' ); ?></a>
		</div>
	</div>
	<!-- template list start -->
	<div class="cf7ea-template-list admin_templates">
		<ul>
			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_admin_template ) && ( 'gradient' === $chk_cf7ea_admin_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/gradient-admin.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/gradient-admin.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="gradient_admin" name="cf7ea_admin_email" class="cf7ea_email_template custom-control-input" value="gradient" 
							<?php
							if ( ! empty( $chk_cf7ea_admin_template ) && ( 'gradient' === $chk_cf7ea_admin_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="gradient_admin"><?php esc_html_e( 'Gradient', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->

			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_admin_template ) && ( 'purple-moon' === $chk_cf7ea_admin_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/purple-moon/admin.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/purple-moon/admin.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="purple_moon_admin" name="cf7ea_admin_email" class="cf7ea_email_template custom-control-input" value="purple-moon" 
							<?php
							if ( ! empty( $chk_cf7ea_admin_template ) && ( 'purple-moon' === $chk_cf7ea_admin_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="purple_moon_admin"><?php esc_html_e( 'Purple Moon', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->

			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_admin_template ) && ( 'space' === $chk_cf7ea_admin_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/space-preview-admin.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/space-preview-admin.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" name="cf7ea_admin_email" id="customRadio1"  class="cf7ea_email_template custom-control-input" value="space" 
							<?php
							if ( ! empty( $chk_cf7ea_admin_template ) && ( 'space' === $chk_cf7ea_admin_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="customRadio1"><?php esc_html_e( 'Space', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->
			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_admin_template ) && ( 'default' === $chk_cf7ea_admin_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/default-preview-admin.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/default-preview-admin.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio2" name="cf7ea_admin_email" class="cf7ea_email_template custom-control-input" value="default" 
							<?php
							if ( ! empty( $chk_cf7ea_admin_template ) && ( 'default' === $chk_cf7ea_admin_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="customRadio2"><?php esc_html_e( 'Default', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->

			<!-- template start -->
			<li 
			<?php
			if ( ! empty( $chk_cf7ea_admin_template ) && ( 'typewriter' === $chk_cf7ea_admin_template ) ) :
				?>
				class="cf7ea-template-active" <?php endif; ?>>
				<div class="cf7ea-template-box">
					<div class="lightbox-gallery">
						<a href="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/typewriter-preview-admin.jpg' ); ?>">
							<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) . 'assets/images/typewriter-preview-admin.jpg' ); ?>">
						</a>
					</div>
					<div class="cf7ea-template-name">
						<div class="custom-control custom-radio">
							<input type="radio" id="customRadio3" name="cf7ea_admin_email" class="cf7ea_email_template custom-control-input" value="typewriter" 
							<?php
							if ( ! empty( $chk_cf7ea_admin_template ) && ( 'typewriter' === $chk_cf7ea_admin_template ) ) :
								?>
								checked <?php endif; ?>>
							<label class="custom-control-label" for="customRadio3"><?php esc_html_e( 'Typewriter', 'cf7-email-add-on' ); ?></label>
						</div>
					</div>
					<div class="cf7ea-template-overlay">
						<a href="javascript:;" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					</div>
				</div>
			</li>
			<!-- template end -->
		</ul>
	</div>
	<!-- Template list end -->
	<div id="cf7-email-preview" style="display: none;">
		<img src="" alt="preview" width="auto" height="500px">
	</div>
	<?php require_once 'shortcode-list.php'; ?>
</div>
