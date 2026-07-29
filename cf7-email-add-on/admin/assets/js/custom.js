jQuery( document ).ready( function( $ ) {
	if ( cf7ea_free_ajax_object.pro_active ) {
		initResetTemplateButton( $ );
		return;
	}
	// Added: new sidebar
	$( '#informationdiv' ).clone().insertAfter( '#informationdiv' ).html( cf7ea_free_ajax_object.pro_features_list );
	// Added: Mail body suggestion list button.
	var CF7Body = $( '#wpcf7-mail-body, #wpcf7-mail-2-body' );
	CF7Body.before( '<span class="dashicons dashicons-list-view"></span>' );
	// initalise the dialog
	$( '#cf7-email-preview, #cf7-email-suggestion-list' ).dialog( {
		title: cf7ea_free_ajax_object.dialog_title,
		dialogClass: 'wp-dialog',
		autoOpen: false,
		draggable: false,
		width: 'auto',
		modal: true,
		resizable: false,
		closeOnEscape: true,
		position: {
			my: 'center',
			at: 'center',
			of: window
		},
		open: function() {
			// close dialog by clicking the overlay behind it.
			$( '.ui-widget-overlay' ).on( 'click', function() {
				$( '#cf7-email-preview' ).dialog( 'close' );
			} );
 		 },
	  	create: function() {
			// style fix for WordPress admin.
			$( '.ui-dialog-titlebar-close' ).addClass( 'ui-button' );
		},
	} );

	// Template quick preview.
	$( '.lightbox-gallery' ).on( 'click', 'a', function( event ) {
		event.preventDefault();
		var _this = $( this );
		var PreviewImage = $( '#cf7-email-preview' ).find( 'img' );
		PreviewImage.attr( 'src', _this.attr( 'href' ) );
		$( '.ui-dialog-title' ).text( _this.parents( 'li' ).find( 'label' ).text() );
		$( '#cf7-email-preview' ).dialog( 'open' );
	} );

	// Shortcode quick preview.
	$( document ).on( 'click', 'span.dashicons-list-view', function( e ) {
		$( '.ui-dialog-title' ).text( 'Special Mail Tags' );
		if ( ! $( 'textarea#wpcf7-additional-settings' ).val().includes( 'subscribers_only: true' ) ) {
			$( 'a[href="#cf7_user_related"]' ).hide();
		} else {
			$( 'a[href="#cf7_user_related"]' ).show();
		}
		$( '#cf7-email-suggestion-list' ).dialog( 'open' );
	} );
	// Click to copy.
	$( document ).on( 'click', '.shortcode-list code, span.mailtag', function( e ) {
		e.preventDefault();
		var element = this;
		var text = $( element ).text();
		if ( navigator.clipboard && window.isSecureContext ) {
			navigator.clipboard.writeText( text ).catch( function() {
				var range = document.createRange();
				range.selectNodeContents( element );
				window.getSelection().removeAllRanges();
				window.getSelection().addRange( range );
			} );
		} else {
			var range = document.createRange();
			range.selectNodeContents( element );
			window.getSelection().removeAllRanges();
			window.getSelection().addRange( range );
		}
	} );

	// Click on shortcode tab.
	$( '#cf7-email-suggestion-list' ).on( 'click', '.nav-tab', function( e ) {
		e.preventDefault();
		var _thisNav = $( this );
		$( '.nav-tab-active' ).removeClass( 'nav-tab-active' );
		$( '.shortcode-list' ).hide();
		_thisNav.addClass( 'nav-tab-active' );
		$( '#' + _thisNav.attr( 'href' ).replace( '#', '' ) ).show();
	} );

	// Radio button click.
	$( '.cf7ea-template-list input[type="radio"]' ).click( function() {
		$( this ).closest( '.cf7ea-template-list' ).find( 'input[type="radio"]' ).each( function() {
			$( this ).parents( 'li' ).toggleClass( 'cf7ea-template-selected', this.checked );
		} );
	} );
	// Select templates.
	$( '.cf7ea-wrap .selecte_template' ).click( function( e ) {
		e.preventDefault();
		var $currentLi = $( this ).parents( 'li' );
		var $currentList = $( this ).parents( '.cf7ea-template-list' );
		if( $currentLi.find( '.cf7ea_email_template' ).is( ':checked' ) ) {
			var template_name = $currentLi.find( '.cf7ea_email_template' ).val();
			var template_type = '';

			if ( $currentList.hasClass( 'admin_templates' ) ){
				template_type = 'admin';
			}else{
				template_type = 'thank_you';
			}
			var admin_template_data = {
				action: 'cf7_email_add_on_add_admin_template',
				template_name: template_name,
				template_type: template_type,
				nonce: cf7ea_free_ajax_object.nonce,
			};
			$.ajax( {
				type: 'POST',
				url: cf7ea_free_ajax_object.ajax_url + window.location.search,
				data: admin_template_data,
				success: function( response ) {
					var cf7ea_response = JSON.parse( response );
					if ( cf7ea_response.result === 1 ) {
						$currentList.find( 'li.cf7ea-template-active' ).removeClass( 'cf7ea-template-active cf7ea-template-pending' );
						$currentLi.addClass( 'cf7ea-template-active cf7ea-template-pending' );
						if( cf7ea_response.template_type === 'admin' ) {
							$( '#contact-form-editor #mail-panel #wpcf7-mail-body' ).val( '' );
							$( '#contact-form-editor #mail-panel #wpcf7-mail-body' ).val( cf7ea_response.message );
							if( ! $( '#contact-form-editor #mail-panel #wpcf7-mail-use-html' ).is( ':checked' ) ) {
								$( '#contact-form-editor #mail-panel  #wpcf7-mail-use-html' ).trigger( 'click' );
							}
							$( 'input[name=wpcf7-save]' ).removeAttr( 'disabled' );
							showResetTemplateButton( 'admin' );
							openMailTab();
						}else {
							if( ! $( '#wpcf7-mail-2-active' ).is( ':checked' ) ) {
								$( '#wpcf7-mail-2-active' ).trigger( 'click' );
							}
							$( '#contact-form-editor #mail-panel #wpcf7-mail-2-body' ).val( '' );
							$( '#contact-form-editor #mail-panel #wpcf7-mail-2-body' ).val( cf7ea_response.message );
							if( ! $( '#contact-form-editor #mail-panel  #wpcf7-mail-2-use-html' ).is( ':checked' ) ) {
								$( '#contact-form-editor #mail-panel  #wpcf7-mail-2-use-html' ).trigger( 'click' );
							}
							$( 'input[name=wpcf7-save]' ).removeAttr( 'disabled' );
							showResetTemplateButton( 'thank_you' );
							openMailTab();
						}
					}
				},
				error: function() {
					window.console.error( 'Email Addon for Contact Form 7: Failed to load template.' );
				}
			} );
		}
	} );

	// Template change
	$( '.cf7ea_email_template' ).change( function() {
		if( $( this ).parents( 'li' ).hasClass( 'cf7ea-template-active' ) ) {
			$( 'input[name=wpcf7-save]' ).removeAttr( 'disabled' );
		} else {
			$( 'input[name=wpcf7-save]' ).attr( 'disabled', 'disabled' );
		}
	} );

	$( 'input[name=wpcf7-save]' ).on( 'click', function() {
		$( '.cf7ea-template-list li.cf7ea-template-pending' ).removeClass( 'cf7ea-template-pending' );
	} );

	initResetTemplateButton( $ );

	// Open mail tab
	function openMailTab() {
		// CF7 5.9 uses .ui-tabs-anchor, CF7 6+ uses data-panel
		if ( jQuery(".ui-tabs-anchor[href='#mail-panel']").length ) {
			jQuery(".ui-tabs-anchor[href='#mail-panel']").trigger("click"); // CF7 5.9 version
			if ( jQuery( '#mail-panel-tab' ).hasClass( 'ui-tabs-active' ) )  {
				jQuery( '#mail-panel-tab' ).addClass('active');
			} else {
				jQuery( '#mail-panel-tab' ).removeClass('active');
			}
		} else if (jQuery("#mail-panel-tab a").length) {
			jQuery("#mail-panel-tab a")[0].click(); // CF7 6+ version
		}
	}
} );

/**
 * The "Reset Template" button and the contact-forms list-table "Email
 * Template" column: kept active even when Pro is running (and taking over
 * the template-picker panel above), since Pro has no equivalent for either.
 *
 * @param {jQuery} $ jQuery.
 */
function initResetTemplateButton( $ ) {
	function mailFieldsFor( template_type ) {
		var prefix = 'admin' === template_type ? '#wpcf7-mail' : '#wpcf7-mail-2';
		return {
			body: prefix + '-body',
			useHtml: prefix + '-use-html',
			excludeBlank: prefix + '-exclude-blank'
		};
	}

	function showResetTemplateButton( template_type ) {
		var fields = mailFieldsFor( template_type );
		var $panel = $( '#contact-form-editor #mail-panel' );
		var $body = $panel.find( fields.body );
		if ( ! $body.length ) {
			return;
		}
		var $row = $body.next( '.cf7ea-mail-options-row' );
		if ( ! $row.length ) {
			$row = $( '<div class="cf7ea-mail-options-row"></div>' ).insertAfter( $body );
			var $checkboxes = $( '<div class="cf7ea-mail-checkboxes"></div>' ).appendTo( $row );
			$panel.find( fields.excludeBlank ).closest( 'p' ).appendTo( $checkboxes );
			$panel.find( fields.useHtml ).closest( 'p' ).appendTo( $checkboxes );
		}
		if ( $row.find( '.cf7ea-reset-template' ).length ) {
			return;
		}
		$( '<a href="#" class="button cf7ea-reset-template"></a>' )
			.attr( 'data-template-type', template_type )
			.text( cf7ea_free_ajax_object.reset_template_label )
			.appendTo( $row );
	}

	if ( cf7ea_free_ajax_object.active_admin_template ) {
		showResetTemplateButton( 'admin' );
	}
	if ( cf7ea_free_ajax_object.active_thank_you_template ) {
		showResetTemplateButton( 'thank_you' );
	}

	$( '#contact-form-editor #mail-panel' ).on( 'click', '.cf7ea-reset-template', function( e ) {
		e.preventDefault();
		var $resetBtn = $( this );
		var template_type = $resetBtn.attr( 'data-template-type' );
		var fields = mailFieldsFor( template_type );

		var reset_template_data = {
			action: 'cf7ea_reset_template',
			template_type: template_type,
			nonce: cf7ea_free_ajax_object.nonce,
		};
		$.ajax( {
			type: 'POST',
			url: cf7ea_free_ajax_object.ajax_url + window.location.search,
			data: reset_template_data,
			success: function( response ) {
				var cf7ea_response = JSON.parse( response );
				if ( cf7ea_response.result === 1 ) {
					$( '.cf7ea-template-list.' + ( 'admin' === template_type ? 'admin_templates' : 'thank_you_templates' ) )
						.find( 'li.cf7ea-template-active' )
						.removeClass( 'cf7ea-template-active cf7ea-template-selected cf7ea-template-pending' )
						.find( '.cf7ea_email_template' ).prop( 'checked', false );
					$( fields.body ).val( cf7ea_response.message );
					$( fields.useHtml ).prop( 'checked', false );
					$resetBtn.remove();
					$( 'input[name=wpcf7-save]' ).removeAttr( 'disabled' );
					// CF7 5.9 uses .ui-tabs-anchor, CF7 6+ uses data-panel.
					if ( jQuery( ".ui-tabs-anchor[href='#mail-panel']" ).length ) {
						jQuery( ".ui-tabs-anchor[href='#mail-panel']" ).trigger( 'click' );
						jQuery( '#mail-panel-tab' ).toggleClass( 'active', jQuery( '#mail-panel-tab' ).hasClass( 'ui-tabs-active' ) );
					} else if ( jQuery( '#mail-panel-tab a' ).length ) {
						jQuery( '#mail-panel-tab a' )[ 0 ].click();
					}
				} else {
					window.console.error( 'Email Addon for Contact Form 7: Failed to reset template.', cf7ea_response.message );
				}
			},
			error: function() {
				window.console.error( 'Email Addon for Contact Form 7: Failed to reset template.' );
			}
		} );
	} );

	var $cf7List = $( '#wpcf7-contact-form-list-table .wp-list-table' );
	if ( $cf7List.length && cf7ea_free_ajax_object.template_columns ) {
		$cf7List.find( 'tbody tr td.cf7ea_active_template' ).each( function() {
			var $cell = $( this );
			var postId = $cell.closest( 'tr' ).find( 'input[name="post[]"]' ).val() || '';
			var data = postId ? cf7ea_free_ajax_object.template_columns[ postId ] : null;

			if ( data && ( data.admin || data.user ) ) {
				var $list = $( '<ul class="cf7ea-column-templates"></ul>' );
				if ( data.admin ) {
					$( '<li></li>' ).text( cf7ea_free_ajax_object.template_column_admin + ' ' ).append( $( '<strong></strong>' ).text( data.admin ) ).appendTo( $list );
				}
				if ( data.user ) {
					$( '<li></li>' ).text( cf7ea_free_ajax_object.template_column_user + ' ' ).append( $( '<strong></strong>' ).text( data.user ) ).appendTo( $list );
				}
				$cell.append( $list );
			} else {
				$cell.append( $( '<span class="cf7ea-column-none"></span>' ).text( cf7ea_free_ajax_object.template_column_none ) );
			}
		} );
	}
}
