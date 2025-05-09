<?php
/**
 * Plugin Name: Email addons for CF7
 * Plugin URI: https://wordpress.org/plugins/cf7-email-add-on/
 * Description: Email addons for CF7 plugin provides the responsive Email templates to admin and users.
 * Requires at least: 6.6
 * Requires PHP: 7.4
 * Author: KrishaWeb
 * Author URI: https://www.krishaweb.com
 * Text Domain: cf7-email-add-on
 * Domain Path: /languages
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Requires Plugins : contact-form-7
 * Version: 2.0
 *
 * @package WordPress
 */

// If check abspath exists or not.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CF7_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CF7_PLUGIN_VERSION', '1.9' );

require_once 'include/class-cf7-email.php';

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
}
register_activation_hook( __FILE__, 'cf7_email_add_on_activate' );

/**
 * Plugin deactivate hook.
 */
function cf7_email_add_on_deactivate() {
	$cf7ea = cf7ea_init();
	$cf7ea->__clear_history();
}
register_deactivation_hook( __FILE__, 'cf7_email_add_on_deactivate' );

/**
 * Plugin uninstall function.
 *
 * @return void
 */
function cf7_email_add_on_uninstall() {
	$cf7ea = cf7ea_init();
	$cf7ea->__clear_history();
}
register_uninstall_hook( __FILE__, 'cf7_email_add_on_uninstall' );

/**
 * Loads a cf 7 email add on textdomain.
 */
function cf7ea_init() {
	load_plugin_textdomain( 'cf7-email-add-on', false, basename( __DIR__ ) . '/languages' );
	// Load core class.
	// phpcs:ignore WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase
	$CF7EA = Cf7_Email_Add_on::_instance();
	// phpcs:ignore WordPress.NamingConventions.ValidVariableName.VariableNotSnakeCase
	return $CF7EA;
}
add_action( 'plugins_loaded', 'cf7ea_init' );
