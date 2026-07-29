<?php
/**
 * Email addon template.
 *
 * @package CF7_Email_Addon
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// phpcs:ignore WordPress.Security.NonceVerification.Recommended
$contact_form_id              = ! empty( $_REQUEST['post'] ) ? (int) $_REQUEST['post'] : 0;
$chk_cf7ea_admin_template     = '';
$chk_cf7ea_thank_you_template = '';
if ( $contact_form_id ) {
	$chk_cf7ea_admin_template     = get_post_meta( $contact_form_id, 'cf7ea_admin_template', true );
	$chk_cf7ea_thank_you_template = get_post_meta( $contact_form_id, 'cf7ea_thank_you_template', true );
}

if ( ! function_exists( 'cf7ea_render_pro_promo_card' ) ) {
	/**
	 * Renders a promo card nudging the user to purchase the Pro plugin.
	 * This card does not represent a selectable email template.
	 */
	function cf7ea_render_pro_promo_card(): void {
		$buy_url = 'https://www.krishastore.io/product/email-addon-for-cf7-pro/';
		?>
		<li class="cf7ea-template-promo">
			<div class="cf7ea-template-box cf7ea-promo-box">
				<div class="cf7ea-promo-visual">
					<span class="cf7ea-promo-badge"><?php esc_html_e( 'PRO', 'cf7-email-add-on' ); ?></span>
					<div class="cf7ea-promo-glow"></div>
					<div class="cf7ea-promo-content">
						<span class="cf7ea-promo-icon dashicons dashicons-star-filled"></span>
						<h3><?php esc_html_e( 'Your Emails Deserve Better', 'cf7-email-add-on' ); ?></h3>
						<p><?php esc_html_e( 'Export HTML, live-preview &amp; test before you send, exclusive templates and more all just a click away!', 'cf7-email-add-on' ); ?></p>
					</div>
				</div>
				<div class="cf7ea-template-name cf7ea-promo-footer">
					<a href="<?php echo esc_url( $buy_url ); ?>" target="_blank" class="cf7ea-promo-btn">
						<?php esc_html_e( 'Yes, Show Me Pro!', 'cf7-email-add-on' ); ?>
						<span class="dashicons dashicons-arrow-right-alt"></span>
					</a>
				</div>
			</div>
		</li>
		<?php
	}
}

if ( ! function_exists( 'cf7ea_render_template_card' ) ) {
	/**
	 * Renders a single template selection card.
	 *
	 * @param array<string, string> $template Template config (keys: key, label, image, id, name_attr).
	 * @param string                $selected Currently saved template slug.
	 */
	function cf7ea_render_template_card( array $template, string $selected ): void {
		$is_active = ( $selected === $template['key'] );
		?>
		<li<?php echo $is_active ? ' class="cf7ea-template-active"' : ''; ?>>
			<div class="cf7ea-template-box">
				<span class="cf7ea-template-badge"><?php esc_html_e( 'Active', 'cf7-email-add-on' ); ?></span>
				<div class="lightbox-gallery">
					<a href="<?php echo esc_url( $template['image'] ); ?>">
						<img src="<?php echo esc_url( $template['image'] ); ?>" alt="<?php echo esc_attr( $template['label'] ); ?>">
					</a>
				</div>
				<div class="cf7ea-template-name">
					<div class="custom-control custom-radio">
						<input type="radio"
							id="<?php echo esc_attr( $template['id'] ); ?>"
							name="<?php echo esc_attr( $template['name_attr'] ); ?>"
							class="cf7ea_email_template custom-control-input"
							value="<?php echo esc_attr( $template['key'] ); ?>"
							<?php echo $is_active ? 'checked' : ''; ?>>
						<label class="custom-control-label" for="<?php echo esc_attr( $template['id'] ); ?>">
							<?php echo esc_html( $template['label'] ); ?>
						</label>
					</div>
				</div>
				<div class="cf7ea-template-overlay">
					<a href="#" class="selecte_template"><?php esc_html_e( 'Select Template', 'cf7-email-add-on' ); ?></a>
					<span class="cf7ea-template-selected-info">
						<span class="dashicons dashicons-yes-alt"></span>
						<?php esc_html_e( 'Selected', 'cf7-email-add-on' ); ?>
						<small><?php esc_html_e( 'Click Save to apply this template', 'cf7-email-add-on' ); ?></small>
					</span>
				</div>
			</div>
		</li>
		<?php
	}
}

$base_url = plugin_dir_url( __FILE__ ) . 'assets/images/';

$user_templates = array(
	array(
		'key'       => 'donate-text',
		'label'     => __( 'Donate Text', 'cf7-email-add-on' ),
		'image'     => $base_url . 'donate/donate-user-preview.jpg',
		'id'        => 'donate_text_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'interview-box',
		'label'     => __( 'Interview Box', 'cf7-email-add-on' ),
		'image'     => $base_url . 'interview/interview-box.png',
		'id'        => 'interview_box_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'meeting',
		'label'     => __( 'Meeting', 'cf7-email-add-on' ),
		'image'     => $base_url . 'meeting/user-preview.jpg',
		'id'        => 'meeting_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'gradient',
		'label'     => __( 'Gradient', 'cf7-email-add-on' ),
		'image'     => $base_url . 'gradient-user.jpg',
		'id'        => 'gradient_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'purple-moon',
		'label'     => __( 'Purple Moon', 'cf7-email-add-on' ),
		'image'     => $base_url . 'purple-moon/user.jpg',
		'id'        => 'purple_moon_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'space',
		'label'     => __( 'Space', 'cf7-email-add-on' ),
		'image'     => $base_url . 'space-preview-user.jpg',
		'id'        => 'space_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'default',
		'label'     => __( 'Default', 'cf7-email-add-on' ),
		'image'     => $base_url . 'default-preview-user.jpg',
		'id'        => 'default_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
	array(
		'key'       => 'typewriter',
		'label'     => __( 'Typewriter', 'cf7-email-add-on' ),
		'image'     => $base_url . 'typewriter-preview-user.jpg',
		'id'        => 'typewriter_user',
		'name_attr' => 'cf7ea_thank_you_email',
	),
);

$admin_templates = array(
	array(
		'key'       => 'gradient',
		'label'     => __( 'Gradient', 'cf7-email-add-on' ),
		'image'     => $base_url . 'gradient-admin.jpg',
		'id'        => 'gradient_admin',
		'name_attr' => 'cf7ea_admin_email',
	),
	array(
		'key'       => 'purple-moon',
		'label'     => __( 'Purple Moon', 'cf7-email-add-on' ),
		'image'     => $base_url . 'purple-moon/admin.jpg',
		'id'        => 'purple_moon_admin',
		'name_attr' => 'cf7ea_admin_email',
	),
	array(
		'key'       => 'space',
		'label'     => __( 'Space', 'cf7-email-add-on' ),
		'image'     => $base_url . 'space-preview-admin.jpg',
		'id'        => 'space_admin',
		'name_attr' => 'cf7ea_admin_email',
	),
	array(
		'key'       => 'default',
		'label'     => __( 'Default', 'cf7-email-add-on' ),
		'image'     => $base_url . 'default-preview-admin.jpg',
		'id'        => 'default_admin',
		'name_attr' => 'cf7ea_admin_email',
	),
	array(
		'key'       => 'typewriter',
		'label'     => __( 'Typewriter', 'cf7-email-add-on' ),
		'image'     => $base_url . 'typewriter-preview-admin.jpg',
		'id'        => 'typewriter_admin',
		'name_attr' => 'cf7ea_admin_email',
	),
);
?>
<div class="cf7ea-wrap">
	<div class="cf7ea-title">
		<h2><?php esc_html_e( 'Templates For User', 'cf7-email-add-on' ); ?></h2>
		<div class="export-template">
			<a href="<?php echo esc_url( 'https://www.krishastore.io/email-templates/' ); ?>" target="_blank" class="export"><?php esc_html_e( 'Export', 'cf7-email-add-on' ); ?></a>
		</div>
	</div>
	<!-- template list start -->
	<div class="cf7ea-template-list thank_you_templates">
		<ul>
			<?php foreach ( $user_templates as $template ) : ?>
				<?php cf7ea_render_template_card( $template, $chk_cf7ea_thank_you_template ); ?>
			<?php endforeach; ?>
		</ul>
	</div>
	<!-- template list end -->
	<div class="cf7ea-title">
		<h2><?php esc_html_e( 'Templates For Admin', 'cf7-email-add-on' ); ?></h2>
		<div class="export-template">
			<a href="<?php echo esc_url( 'https://www.krishastore.io/email-templates/' ); ?>" target="_blank" class="export"><?php esc_html_e( 'Export', 'cf7-email-add-on' ); ?></a>
		</div>
	</div>
	<!-- template list start -->
	<div class="cf7ea-template-list admin_templates">
		<ul>
			<?php foreach ( $admin_templates as $template ) : ?>
				<?php cf7ea_render_template_card( $template, $chk_cf7ea_admin_template ); ?>
			<?php endforeach; ?>
			<?php if ( ! cf7ea_is_pro_active() ) : ?>
				<?php cf7ea_render_pro_promo_card(); ?>
			<?php endif; ?>
		</ul>
	</div>
	<!-- Template list end -->
	<div id="cf7-email-preview" style="display: none;">
		<img src="" alt="<?php esc_attr_e( 'Template preview', 'cf7-email-add-on' ); ?>" width="auto" height="500px">
	</div>
	<?php require_once 'shortcode-list.php'; ?>
</div>
