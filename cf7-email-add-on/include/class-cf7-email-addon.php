<?php
/**
 * Email addon class file.
 *
 * @package CF7_Email_Addon
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'CF7_Email_Addon' ) ) {
	/**
	 * Email addon class.
	 */
	class CF7_Email_Addon {

		/**
		 * Singleton instance.
		 *
		 * @var CF7_Email_Addon|null
		 */
		private static ?CF7_Email_Addon $instance = null;

		/**
		 * Whether the Pro add-on is active and licensed (i.e. actually
		 * driving the editor UI, not just installed).
		 *
		 * @var bool
		 */
		private bool $pro_active = false;

		/**
		 * Class construct.
		 */
		public function __construct() {
			$pro_active       = cf7ea_is_pro_active()
				&& ( ! function_exists( 'cf7ea_pro_is_licensed' ) || cf7ea_pro_is_licensed() );
			$this->pro_active = $pro_active;
			// Plugin meta row.
			add_filter( 'plugin_row_meta', array( $this, 'cf7_email_add_on_plugin_row_meta' ), 10, 3 );
			add_action( 'admin_notices', array( $this, 'cf7_email_add_on_review_notice' ) );
			add_action( 'wp_ajax_cf7ea_dismiss_review_notice', array( $this, 'cf7_email_add_on_dismiss_review_notice' ) );
			// Only register editor hooks on the CF7 admin page.
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			$page = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : '';
			if ( 'wpcf7' !== $page ) {
				return;
			}
			// Reset template using AJAX. Editor-only: no nopriv (logged-out) handler.
			add_action( 'wp_ajax_cf7ea_reset_template', array( $this, 'cf7ea_reset_template' ) );
			// Contact forms list table: register the "Email Template" column header.
			add_action( 'current_screen', array( $this, 'cf7_email_add_on_register_list_column' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'cf7_email_add_on_scripts_admin' ) );
			add_action( 'wpcf7_after_create', array( $this, 'cf7_email_add_on_copy_template_meta_on_duplicate' ) );
			if ( $pro_active ) {
				return;
			}
			// Add template using AJAX. Editor-only: no nopriv (logged-out) handler.
			add_action( 'wp_ajax_cf7_email_add_on_add_admin_template', array( $this, 'cf7_email_add_on_add_admin_template' ) );
			// Contact form 7 editor filter.
			add_filter( 'wpcf7_editor_panels', array( $this, 'cf7_email_add_on_editor_panels' ) );
			// Save contact form.
			add_action( 'wpcf7_save_contact_form', array( $this, 'cf7_email_add_on_save_contact_form' ) );
		}

		/**
		 * Standard singleton pattern.
		 *
		 * @return CF7_Email_Addon
		 */
		public static function get_instance(): CF7_Email_Addon {
			if ( is_null( self::$instance ) || ! ( self::$instance instanceof self ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Enqueue scripts.
		 */
		public function cf7_email_add_on_scripts_admin(): void {
			wp_enqueue_style( 'cf7ea-style', plugin_dir_url( __FILE__ ) . '../admin/assets/css/style.css', array(), CF7_PLUGIN_VERSION );
			wp_enqueue_script( 'jquery-ui-dialog' );
			wp_enqueue_style( 'wp-jquery-ui-dialog' );
			wp_enqueue_script( 'cf7ea-custom', plugin_dir_url( __FILE__ ) . '../admin/assets/js/custom.js', array( 'jquery' ), CF7_PLUGIN_VERSION, true );
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			$is_list_view     = empty( $_GET['post'] );
			$template_columns = $is_list_view ? $this->cf7_email_add_on_get_template_column_data() : array();
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			$post_id                   = $is_list_view ? 0 : (int) $_GET['post'];
			$active_admin_template     = $post_id ? get_post_meta( $post_id, 'cf7ea_admin_template', true ) : '';
			$active_thank_you_template = $post_id ? get_post_meta( $post_id, 'cf7ea_thank_you_template', true ) : '';
			wp_localize_script(
				'cf7ea-custom',
				'cf7ea_free_ajax_object',
				array(
					'ajax_url'                  => admin_url( 'admin-ajax.php' ),
					'nonce'                     => wp_create_nonce( 'cf7-email-add-on' ),
					'pro_active'                => $this->pro_active,
					'dialog_title'              => esc_html__( 'Email Template', 'cf7-email-add-on' ),
					'pro_features_list'         => $this->get_pro_features_html(),
					'template_column_admin'     => __( 'Admin:', 'cf7-email-add-on' ),
					'template_column_user'      => __( 'User:', 'cf7-email-add-on' ),
					'template_column_none'      => __( 'Default', 'cf7-email-add-on' ),
					'template_columns'          => $template_columns,
					'reset_template_label'      => __( 'Reset Template', 'cf7-email-add-on' ),
					'active_admin_template'     => ! empty( $active_admin_template ),
					'active_thank_you_template' => ! empty( $active_thank_you_template ),
				)
			);
		}

		/**
		 * Registers the "Email Template" column header on CF7's own contact
		 * forms list table, once the current screen is known.
		 *
		 * CF7 renders a custom WP_List_Table (not the standard post-type list
		 * table) but still builds its columns through WP core's screen-scoped
		 * `manage_{$screen->id}_columns` filter, the same one CF7 itself uses
		 * to register its own cb/title/shortcode/author/date columns.
		 *
		 * @param \WP_Screen $screen Current screen.
		 */
		public function cf7_email_add_on_register_list_column( \WP_Screen $screen ): void {
			if ( 'toplevel_page_wpcf7' !== $screen->id ) {
				return;
			}
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			if ( ! empty( $_GET['post'] ) ) {
				return;
			}
			add_filter( 'manage_' . $screen->id . '_columns', array( $this, 'cf7_email_add_on_add_list_column' ), 20 );
		}

		/**
		 * Adds the "Email Template" column after Title.
		 *
		 * @param array<string,string> $columns Existing list table columns.
		 *
		 * @return array<string,string>
		 */
		public function cf7_email_add_on_add_list_column( array $columns ): array {
			$new_columns = array();
			foreach ( $columns as $key => $label ) {
				$new_columns[ $key ] = $label;
				if ( 'title' === $key ) {
					$new_columns['cf7ea_active_template'] = __( 'Email Template', 'cf7-email-add-on' );
				}
			}
			return $new_columns;
		}

		/**
		 * Build a map of contact form ID => active template labels, used to
		 * fill the "Email Template" column cells via JS. CF7's list table
		 * hardcodes column_default() to return an empty string with no hook,
		 * so per-row content still has to be injected client-side.
		 *
		 * @return array<int,array<string,string>>
		 */
		private function cf7_email_add_on_get_template_column_data(): array {
			$form_ids = get_posts(
				array(
					'post_type'      => 'wpcf7_contact_form',
					'post_status'    => 'any',
					'posts_per_page' => -1,
					'fields'         => 'ids',
				)
			);

			$data = array();
			foreach ( $form_ids as $form_id ) {
				$admin_template     = get_post_meta( $form_id, 'cf7ea_admin_template', true );
				$thank_you_template = get_post_meta( $form_id, 'cf7ea_thank_you_template', true );
				$data[ $form_id ]   = array(
					'admin' => $admin_template ? $this->cf7_email_add_on_get_template_label( $admin_template ) : '',
					'user'  => $thank_you_template ? $this->cf7_email_add_on_get_template_label( $thank_you_template ) : '',
				);
			}
			return $data;
		}

		/**
		 * Human-readable label for a template slug.
		 *
		 * @param string $key Template slug (e.g. 'purple-moon').
		 *
		 * @return string
		 */
		private function cf7_email_add_on_get_template_label( string $key ): string {
			$labels = array(
				'default'       => __( 'Default', 'cf7-email-add-on' ),
				'gradient'      => __( 'Gradient', 'cf7-email-add-on' ),
				'purple-moon'   => __( 'Purple Moon', 'cf7-email-add-on' ),
				'space'         => __( 'Space', 'cf7-email-add-on' ),
				'typewriter'    => __( 'Typewriter', 'cf7-email-add-on' ),
				'donate-text'   => __( 'Donate Text', 'cf7-email-add-on' ),
				'interview-box' => __( 'Interview Box', 'cf7-email-add-on' ),
				'meeting'       => __( 'Meeting', 'cf7-email-add-on' ),
			);
			return $labels[ $key ] ?? ucwords( str_replace( '-', ' ', $key ) );
		}

		/**
		 * Returns escaped HTML for the pro features sidebar panel.
		 *
		 * @return string
		 */
		private function get_pro_features_html(): string {
			$buy_url  = esc_url( 'https://www.krishastore.io/product/email-addon-for-cf7-pro/' );
			$demo_url = esc_url( 'https://www.youtube.com/watch?v=20jCxtgK_hQ' );
			return '<h3>' . esc_html__( 'Email Addon for Contact Form 7 Pro Features: ', 'cf7-email-add-on' ) . '</h3>'
				. '<div class="inside cf7-features-list"><ul>'
				. '<li>' . esc_html__( 'Ability to export the HTML templates', 'cf7-email-add-on' ) . '</li>'
				. '<li>' . esc_html__( 'Setting panel to easily update the information', 'cf7-email-add-on' ) . '</li>'
				. '<li>' . esc_html__( 'Preview template &amp; send test email', 'cf7-email-add-on' ) . '</li>'
				. '</ul><hr><div class="cf7-buy-now">'
				. '<a href="' . $buy_url . '" target="_blank">' . esc_html__( 'Buy Now', 'cf7-email-add-on' ) . '</a>'
				. '<a href="' . $demo_url . '" target="_blank">' . esc_html__( 'Live Demo', 'cf7-email-add-on' ) . '</a>'
				. '</div></div>';
		}

		/**
		 * Contact form 7 editor panels.
		 *
		 * @param array<string,array<string,mixed>> $panels The panels.
		 *
		 * @return array<string,array<string,mixed>>
		 */
		public function cf7_email_add_on_editor_panels( array $panels ): array {
			$panels['cf7-email-add-on-html-template-panel'] = array(
				'title'    => __( 'Email Template', 'cf7-email-add-on' ),
				'callback' => array( $this, 'cf7_email_add_on_template_panel' ),
			);
			return $panels;
		}

		/**
		 * Template panel.
		 */
		public function cf7_email_add_on_template_panel(): void {
			require plugin_dir_path( __FILE__ ) . '../admin/contact-form-7-email-add-on-templates.php';
		}

		/**
		 * Save contact form 7.
		 *
		 * Nonce is verified by Contact Form 7 before this hook fires; no additional
		 * check_admin_referer() call is needed here.
		 */
		public function cf7_email_add_on_save_contact_form(): void {
			// phpcs:ignore WordPress.Security.NonceVerification.Missing
			$post_id = ! empty( $_POST['post_ID'] ) ? (int) $_POST['post_ID'] : 0;
			if ( ! $post_id ) {
				return;
			}
			// phpcs:ignore WordPress.Security.NonceVerification.Missing
			$cf7ea_admin_template_name = ! empty( $_POST['cf7ea_admin_email'] ) ? sanitize_text_field( wp_unslash( $_POST['cf7ea_admin_email'] ) ) : '';
			if ( ! empty( $cf7ea_admin_template_name ) ) {
				update_post_meta( $post_id, 'cf7ea_admin_template', $cf7ea_admin_template_name );
			}
			// phpcs:ignore WordPress.Security.NonceVerification.Missing
			$cf7ea_thank_you_template_name = ! empty( $_POST['cf7ea_thank_you_email'] ) ? sanitize_text_field( wp_unslash( $_POST['cf7ea_thank_you_email'] ) ) : '';
			if ( ! empty( $cf7ea_thank_you_template_name ) ) {
				update_post_meta( $post_id, 'cf7ea_thank_you_template', $cf7ea_thank_you_template_name );
			}
		}

		/**
		 * Copies the addon's template meta to a duplicated contact form.
		 *
		 * CF7's "Duplicate" action clones a form via `WPCF7_ContactForm::copy()`
		 * followed by `save()`, which only carries over CF7's own properties
		 * (mail/mail_2/etc). It never fires the `wpcf7_save_contact_form` action,
		 * so `cf7ea_admin_template`/`cf7ea_thank_you_template` postmeta would
		 * otherwise be left empty on the copy even though the mail body still
		 * contains the template markup.
		 *
		 * @param WPCF7_ContactForm $contact_form Newly created contact form.
		 */
		public function cf7_email_add_on_copy_template_meta_on_duplicate( $contact_form ): void {
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended, WordPress.Security.NonceVerification.Missing
			$action = isset( $_REQUEST['action'] ) ? sanitize_text_field( wp_unslash( $_REQUEST['action'] ) ) : '';
			if ( 'copy' !== $action ) {
				return;
			}
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended, WordPress.Security.NonceVerification.Missing
			$post_id_from_post = ! empty( $_POST['post_ID'] ) ? absint( $_POST['post_ID'] ) : 0;
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended, WordPress.Security.NonceVerification.Missing
			$post_id_from_request = ! empty( $_REQUEST['post'] ) ? absint( $_REQUEST['post'] ) : 0;
			$source_id            = $post_id_from_post ? $post_id_from_post : $post_id_from_request;
			$new_id               = $contact_form->id();
			if ( ! $source_id || ! $new_id || $source_id === $new_id ) {
				return;
			}
			foreach ( array( 'cf7ea_admin_template', 'cf7ea_thank_you_template' ) as $meta_key ) {
				$value = get_post_meta( $source_id, $meta_key, true );
				if ( '' !== $value ) {
					update_post_meta( $new_id, $meta_key, $value );
				}
			}
		}

		/**
		 * Add email template using AJAX.
		 */
		public function cf7_email_add_on_add_admin_template(): void {
			// WP ajax check security nonce.
			check_ajax_referer( 'cf7-email-add-on', 'nonce' );

			// Only users allowed to edit contact forms may load templates.
			if ( ! current_user_can( 'wpcf7_edit_contact_forms' ) ) {
				$this->cf7_email_add_on_send_response( 0, 'Error: You are not allowed to perform this action.' );
			}

			$template_name = ! empty( $_POST['template_name'] ) ? sanitize_text_field( wp_unslash( $_POST['template_name'] ) ) : '';
			$template_type = ! empty( $_POST['template_type'] ) ? sanitize_text_field( wp_unslash( $_POST['template_type'] ) ) : '';

			if ( empty( $template_name ) ) {
				$this->cf7_email_add_on_send_response( 0, 'Error: Template name is missing.' );
			}

			$file_path = $this->cf7_email_add_on_get_template_path( $template_name, $template_type );

			if ( ! $file_path ) {
				$this->cf7_email_add_on_send_response( 0, 'File Not Found' );
			}

			ob_start();
			include_once $file_path;
			$fields        = $this->cf7_email_add_on_create_dynamic_fields();
			$template_data = str_replace( '[fields]', $fields, html_entity_decode( esc_html( ob_get_clean() ) ) );
			if ( ! empty( $template_data ) ) {
				// @phpstan-ignore-next-line
				$this->cf7_email_add_on_send_response( 1, str_replace( '[plugin_url]', CF7_PLUGIN_URL, $template_data ), $template_type );
			}

			$this->cf7_email_add_on_send_response( 0, 'Error: Empty template data.' );
		}

		/**
		 * Reset an applied email template using AJAX.
		 *
		 * Restores the mail body to Contact Form 7's own stock default
		 * template and clears the addon's "active template" marker for the
		 * given form, without touching the other mail settings (recipient,
		 * subject, headers, etc.) or any other form's template.
		 */
		public function cf7ea_reset_template(): void {
			check_ajax_referer( 'cf7-email-add-on', 'nonce' );

			if ( ! current_user_can( 'wpcf7_edit_contact_forms' ) ) {
				$this->cf7_email_add_on_send_response( 0, 'Error: You are not allowed to perform this action.' );
			}

			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			$post_id       = ! empty( $_REQUEST['post'] ) ? (int) $_REQUEST['post'] : 0;
			$template_type = ! empty( $_POST['template_type'] ) ? sanitize_text_field( wp_unslash( $_POST['template_type'] ) ) : '';

			if ( ! $post_id || 'wpcf7_contact_form' !== get_post_type( $post_id ) ) {
				$this->cf7_email_add_on_send_response( 0, 'Error: Invalid contact form.' );
			}

			$is_admin       = ( 'admin' === $template_type );
			$mail_meta_key  = $is_admin ? '_mail' : '_mail_2';
			$marker_key     = $is_admin ? 'cf7ea_admin_template' : 'cf7ea_thank_you_template';
			$default_values = WPCF7_ContactFormTemplate::get_default( $is_admin ? 'mail' : 'mail_2' );

			$mail = get_post_meta( $post_id, $mail_meta_key, true );
			$mail = is_array( $mail ) ? $mail : $default_values;

			$mail['body']     = $default_values['body'];
			$mail['use_html'] = $default_values['use_html'];
			update_post_meta( $post_id, $mail_meta_key, $mail );
			delete_post_meta( $post_id, $marker_key );

			$this->cf7_email_add_on_send_response( 1, $mail['body'], $template_type );
		}

		/**
		 * Get email template file path.
		 *
		 * @param string $template_name Template name.
		 * @param string $template_type Template type ('admin' or 'user').
		 *
		 * @return string|false Absolute path on success, false if not found/allowed.
		 */
		private function cf7_email_add_on_get_template_path( string $template_name, string $template_type ): string|false {
			// Allowlist of bundled templates. The path is never derived from raw
			// user input, which prevents Local File Inclusion (CVE-2024-10898).
			$allowed_templates = array(
				'admin' => array( 'default', 'gradient', 'purple-moon', 'space', 'typewriter' ),
				'user'  => array(
					'default',
					'gradient',
					'purple-moon',
					'space',
					'typewriter',
					'donate-text',
					'interview-box',
					'meeting',
				),
			);

			$dir = ( 'admin' === $template_type ) ? 'admin' : 'user';

			// Reject anything that is not an explicitly bundled template.
			if ( ! in_array( $template_name, $allowed_templates[ $dir ], true ) ) {
				return false;
			}

			$file_path = plugin_dir_path( __FILE__ ) . '../admin/email-templates/' . $dir . '/' . $template_name . '.php';

			return is_readable( $file_path ) ? $file_path : false;
		}

		/**
		 * Send JSON response and exit.
		 *
		 * @param int    $result        AJAX result code (1 = success, 0 = error).
		 * @param string $message       Response message or template HTML.
		 * @param string $template_type Template type ('admin' or 'user').
		 *
		 * @return never
		 */
		private function cf7_email_add_on_send_response( int $result, string $message, string $template_type = '' ): never {
			echo wp_json_encode(
				array(
					'result'        => $result,
					'template_type' => $template_type,
					'message'       => $message,
				)
			);
			wp_die();
		}

		/**
		 * Build HTML table rows for all CF7 mail tags of the current form.
		 *
		 * @return string HTML table rows, or empty string if the form cannot be loaded.
		 */
		private function cf7_email_add_on_create_dynamic_fields(): string {
			$template_fields = '';
			// phpcs:ignore WordPress.Security.NonceVerification.Recommended
			$post_id = ! empty( $_REQUEST['post'] ) ? (int) $_REQUEST['post'] : 0;
			$post    = WPCF7_ContactForm::get_instance( $post_id );
			if ( ! $post instanceof WPCF7_ContactForm ) {
				return '';
			}
			$fields = $post->collect_mail_tags();
			foreach ( $fields as $field ) {
				$template_fields .= '<tr>
				<td style="font-family: Courier, Courier New, monospace, Arial; color: #ffffff; text-align: left; padding-bottom: 35px; padding-left: 15px; padding-right: 15px;">
					<table cellpadding="0" cellspacing="0" width="100%;">
					<tr>
					<td style="font-weight: bold; font-size: 22px; color: #f18f4e;" width="200">' . str_replace( array( '-', '_' ), array( ' ', ' ' ), $field ) . '
					</td>
					<td style="font-size: 16px; font-family: sans-serif, Arial;" width="300">[' . $field . ']
					</td>
					</tr>
					</table>
					</td>
				</tr>';
			}
			return $template_fields;
		}

		/**
		 * Plugin row meta.
		 *
		 * @param  array<int,string>   $links       Row items.
		 * @param  string              $plugin_file File path.
		 * @param  array<string,mixed> $plugin_data Plugin data.
		 *
		 * @return array<int,string> Plugin row action links.
		 */
		public function cf7_email_add_on_plugin_row_meta( array $links, string $plugin_file, array $plugin_data ): array {
			if ( ( isset( $plugin_data['slug'] ) && 'cf7-email-add-on' === $plugin_data['slug'] ) ) {
				$links[] = wp_sprintf( '<a href="%1$s" target="_blank"><span class="dashicons dashicons-search"></span> %2$s</a>', esc_url( 'https://krishaweb.com/docs/contact-form-7-email-add-on/' ), __( 'Documentation', 'cf7-email-add-on' ) );
				$links[] = wp_sprintf( '<a href="mailto:%1$s"><span class="dashicons dashicons-admin-users"></span> %2$s</a>', sanitize_email( 'support@krishaweb.com' ), __( 'Support', 'cf7-email-add-on' ) );
				if ( ! cf7ea_is_pro_active() ) {
					$links[] = wp_sprintf( '<a href="%1$s"><span class="dashicons dashicons-cart"></span> %2$s</a>', esc_url( 'https://www.krishastore.io/product/email-addon-for-cf7-pro/' ), __( 'Premium', 'cf7-email-add-on' ) );
				}
			}
			return $links;
		}

		/**
		 * Displays a dismissible admin notice asking for a WordPress.org review,
		 * once the plugin has been active for at least 7 days.
		 */
		public function cf7_email_add_on_review_notice(): void {
			if ( ! current_user_can( 'manage_options' ) ) {
				return;
			}

			$dismissed_until = (int) get_option( 'cf7ea_review_notice_dismissed_until' );
			if ( $dismissed_until && time() < $dismissed_until ) {
				return;
			}

			$activated_at = (int) get_option( 'cf7ea_activated_at' );
			if ( ! $activated_at || ( time() - $activated_at ) < 7 * DAY_IN_SECONDS ) {
				return;
			}
			// @phpstan-ignore-next-line
			wp_enqueue_script( 'cf7ea-review-notice', CF7_PLUGIN_URL . 'admin/assets/js/review-notice.js', array( 'jquery' ), CF7_PLUGIN_VERSION, true );
			wp_localize_script(
				'cf7ea-review-notice',
				'cf7ea_review_notice',
				array(
					'ajax_url' => admin_url( 'admin-ajax.php' ),
					'nonce'    => wp_create_nonce( 'cf7ea_review_notice' ),
				)
			);
			?>
			<div class="notice notice-info is-dismissible cf7ea-review-notice">
				<p>
					<?php
					esc_html_e(
						'Love using Contact form 7 email addon? Share your experience with a review on WordPress.org. Your feedback helps us improve the plugin and continue delivering new features and enhancements.',
						'cf7-email-add-on'
					);
					?>
				</p>
				<p>
					<a href="<?php echo esc_url( 'https://wordpress.org/support/plugin/cf7-email-add-on/reviews/?rate=5#new-post' ); ?>" class="button button-primary" target="_blank" rel="noopener noreferrer">
						<?php esc_html_e( 'Leave a review', 'cf7-email-add-on' ); ?>
					</a>
					<a href="#" class="button cf7ea-review-dismiss">
						<?php esc_html_e( 'I already did', 'cf7-email-add-on' ); ?>
					</a>
				</p>
			</div>
			<?php
		}

		/**
		 * AJAX handler that snoozes the review notice for 7 days.
		 */
		public function cf7_email_add_on_dismiss_review_notice(): void {
			check_ajax_referer( 'cf7ea_review_notice', 'nonce' );

			if ( ! current_user_can( 'manage_options' ) ) {
				wp_die();
			}

			update_option( 'cf7ea_review_notice_dismissed_until', time() + 7 * DAY_IN_SECONDS );
			wp_die();
		}

		/**
		 * Clear mail template data on plugin deactivation or uninstall.
		 */
		public static function clear_history(): void {
			$cf7_form = new WP_Query(
				array(
					'post_type'      => 'wpcf7_contact_form',
					'posts_per_page' => -1,
					// phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
					'meta_query'     => array(
						'relation' => 'OR',
						array(
							'key'     => 'cf7ea_admin_template',
							'compare' => '=',
						),
						array(
							'key'     => 'cf7ea_thank_you_template',
							'compare' => '=',
						),
					),
				)
			);
			if ( $cf7_form->have_posts() ) {
				while ( $cf7_form->have_posts() ) {
					$cf7_form->the_post();
					$post_id = get_the_id();
					$mail_1  = get_post_meta( $post_id, '_mail', true );
					$mail_2  = get_post_meta( $post_id, '_mail_2', true );
					if ( get_post_meta( $post_id, 'cf7ea_admin_template', true ) !== '' ) {
						$mail_1['body'] = '';
						update_post_meta( $post_id, '_mail', $mail_1 );
					}
					if ( get_post_meta( $post_id, 'cf7ea_thank_you_template', true ) !== '' ) {
						$mail_2['body'] = '';
						update_post_meta( $post_id, '_mail_2', $mail_2 );
					}
					delete_post_meta( $post_id, 'cf7ea_admin_template' );
					delete_post_meta( $post_id, 'cf7ea_thank_you_template' );
				}
			}
			wp_reset_postdata();
		}
	}
}
