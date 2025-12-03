<?php


if(!function_exists('digitex_get_404_parts')) {
	/**
	 * Function that Renders Coming Soon Page HTML Codes
	 * @return HTML
	 */
	function digitex_get_404_parts() {
		$params = array();
		$section_classes_array = array();
		$params['section_classes'] = '';
		$layout = digitex_get_redux_option( '404-page-settings-layout', 'simple' );
		$section_classes_array[] = 'page-404-layout-' . $layout;

		//Text Alignment
		$params['text_align'] = digitex_get_redux_option( '404-page-settings-text-align', 'text-center' );

		//Add Background Overlay
		if( digitex_get_redux_option( '404-page-settings-bg-layer-overlay-status' ) ) {
			$section_classes_array[] = 'layer-overlay overlay-'.digitex_get_redux_option( '404-page-settings-bg-layer-overlay-color' ) .'-'.digitex_get_redux_option( '404-page-settings-bg-layer-overlay' );
		}

		//make array into string
		if( is_array( $section_classes_array ) && count( $section_classes_array ) ) {
			$params['section_classes'] = esc_attr(implode(' ', $section_classes_array));
		}

		$params['page_title'] = digitex_get_redux_option( '404-page-settings-title', digitex_redux_fallback_text_collection('404') );
		$params['page_subtitle'] = digitex_get_redux_option( '404-page-settings-subtitle', digitex_redux_fallback_text_collection('404_oops') );
		$params['page_content'] = digitex_get_redux_option( '404-page-settings-content', digitex_redux_fallback_text_collection('404_notexist') );


		//fullscreen if not show header footer
		if( digitex_get_redux_option( '404-page-settings-show-header', true ) == true || digitex_get_redux_option( '404-page-settings-show-footer', true ) == true ) {
			$params['fullscreen'] = 'page-404-wrapper-padding';
		} else {
			$params['fullscreen'] = 'section-fullscreen';
		}

		//Search Box
		$params['show_search_box'] = digitex_get_redux_option( '404-page-settings-show-search-box', false );
		$params['search_box_heading'] = digitex_get_redux_option( '404-page-settings-search-box-heading' );
		$params['search_box_paragraph'] = digitex_get_redux_option( '404-page-settings-search-box-paragraph' );

		//Helpful Links
		$params['show_helpful_links'] = digitex_get_redux_option( '404-page-settings-show-helpful-links', 0 );
		$params['helpful_links_heading'] = digitex_get_redux_option( '404-page-settings-helpful-links-heading' );
		$params['helpful_links_nav'] = 'page-404-helpful-links';

		//Show Social Links
		$params['show_social_links'] = digitex_get_redux_option( '404-page-settings-show-social-links', false );

		//Back Button Label
		$params['show_back_to_home_button'] = digitex_get_redux_option( '404-page-settings-show-back-to-home-button', true );
		$params['back_to_home_button_label'] = digitex_get_redux_option( '404-page-settings-back-to-home-button-label', digitex_redux_fallback_text_collection('404_btn') );

		//Produce HTML version by using the parameters (filename, variation, folder name, parameters)
		$html = digitex_get_blocks_template_part( 'template', digitex_get_redux_option( '404-page-settings-layout', 'simple' ), '404/tpl', $params );

		return $html;
	}
}