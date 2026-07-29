<?php
/**
 * Plugin Name: Email Addon for Contact Form 7
 * Plugin URI: https://wordpress.org/plugins/cf7-email-add-on/
 * Description: Email Addon for Contact Form 7 plugin provides the responsive Email templates to admin and users.
 * Requires at least: 6.6
 * Requires PHP: 8.1
 * Author: KrishaWeb
 * Author URI: https://www.krishaweb.com
 * Text Domain: cf7-email-add-on
 * Domain Path: /languages
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Requires Plugins: contact-form-7
 * Version: 2.2
 *
 * @package CF7_Email_Addon
 */

// If check abspath exists or not.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CF7_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CF7_PLUGIN_VERSION', '2.2' );

if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

/**
 * Whether the Pro add-on is active.
 *
 * @return bool
 */
function cf7ea_is_pro_active() {
	return is_plugin_active( 'cf7-email-addon-pro/contact-form-7-email-add-on-pro.php' );
}

require_once plugin_dir_path( __FILE__ ) . 'include/class-cf7-email-addon.php';

/**
 * Plugin activate hook.
 */
function cf7_email_add_on_activate() {
	// If check contact form 7 activate or not.
	if ( ! has_action( 'wpcf7_init' ) ) {
		// Deactivate contact form 7 plguin.
		deactivate_plugins( plugin_basename( __FILE__ ) );
		// Display error message.
		wp_die(
			esc_html__( 'Please activate Contact Form 7.', 'cf7-email-add-on' ),
			esc_html__( 'Plugin dependency check', 'cf7-email-add-on' ),
			array(
				'back_link' => true,
			)
		);
	}
	// Record first activation time, used to schedule the "rate this plugin" notice.
	add_option( 'cf7ea_activated_at', time() );
}
register_activation_hook( __FILE__, 'cf7_email_add_on_activate' );

/**
 * Plugin deactivate hook.
 */
function cf7_email_add_on_deactivate() {
	CF7_Email_Addon::clear_history();
}
register_deactivation_hook( __FILE__, 'cf7_email_add_on_deactivate' );

/**
 * Plugin uninstall function.
 *
 * @return void
 */
function cf7_email_add_on_uninstall() {
	CF7_Email_Addon::clear_history();
	delete_option( 'cf7ea_activated_at' );
	delete_option( 'cf7ea_review_notice_dismissed_until' );
}
register_uninstall_hook( __FILE__, 'cf7_email_add_on_uninstall' );

/**
 * Loads a cf 7 email add on textdomain.
 */
function cf7ea_init() {
	load_plugin_textdomain( 'cf7-email-add-on', false, basename( __DIR__ ) . '/languages' );
	add_option( 'cf7ea_activated_at', time() );
	$instance = CF7_Email_Addon::get_instance();
	return $instance;
}
add_action( 'plugins_loaded', 'cf7ea_init' );
