/**
 * Handles dismissal of the "rate this plugin" admin notice.
 */
( function ( $ ) {
	'use strict';

	$( document ).on( 'click', '.cf7ea-review-notice .notice-dismiss, .cf7ea-review-notice .cf7ea-review-dismiss', function ( event ) {
		var $notice = $( this ).closest( '.cf7ea-review-notice' );

		if ( $( this ).hasClass( 'cf7ea-review-dismiss' ) ) {
			event.preventDefault();
			$notice.fadeTo( 100, 0, function () {
				$notice.slideUp( 100, function () {
					$notice.remove();
				} );
			} );
		}

		$.post( cf7ea_review_notice.ajax_url, {
			action: 'cf7ea_dismiss_review_notice',
			nonce: cf7ea_review_notice.nonce,
		} );
	} );
} )( jQuery );
