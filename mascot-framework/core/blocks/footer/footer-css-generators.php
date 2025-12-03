<?php

if (!function_exists('digitex_get_footer_parts_wpb_shortcodes_custom_css')) {
	/**
	 * Add VC inline css to body
	 */
	function digitex_get_footer_parts_wpb_shortcodes_custom_css() {
		$current_page_id = digitex_get_page_id();

		//Footer Widget Area
		//check if meta value is provided for this page or then get it from theme options
		$temp_meta_value = digitex_get_rwmb_group( 'digitex_' . "page_mb_footer_settings", 'footer_widget_area', $current_page_id );
		if( ! digitex_metabox_opt_val_is_empty( $temp_meta_value ) && $temp_meta_value != "inherit" ) {
			$params['footer_widget_area'] = $temp_meta_value;
		} else {
			$params['footer_widget_area'] = digitex_get_redux_option( 'footer-settings-choose-footer-widget-area', 'default' );
		}


		//VC Custom CSS
		$shortcodes_custom_css = get_post_meta( $params['footer_widget_area'], '_wpb_shortcodes_custom_css', true );
		if ( ! empty( $shortcodes_custom_css ) ) {
			wp_add_inline_style( 'digitex-dynamic-style', $shortcodes_custom_css );
		}


	}
	add_action( 'wp_enqueue_scripts', 'digitex_get_footer_parts_wpb_shortcodes_custom_css' );
}



if (!function_exists('digitex_footer_bottom_background_color')) {
	/**
	 * Generate CSS codes for Footer Bottom Background Color
	 */
	function digitex_footer_bottom_background_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'footer-settings-footer-bg-color';
		$declaration = array();
		$selector = array(
			'footer#footer',
			'footer#footer.footer-inverted',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
		echo digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_footer_bottom_background_color');
}




if (!function_exists('digitex_footer_widget_title_line_bottom_color')) {
	/**
	 * Generate CSS codes for Footer Top Widget Title Custom Line Bottom Color
	 */
	function digitex_footer_widget_title_line_bottom_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'footer-settings-footer-widget-title-line-bottom-custom-color';
		//If Make Line Bottom Theme Colored?
		if( $digitex_redux_theme_opt['footer-settings-footer-widget-title-line-bottom-theme-colored'] != '' ) {
			return;
		}

		$declaration = array();
		$selector = array(
			'footer#footer .footer-widget-area .widget .widget-title.widget-title-line-bottom:after',
			'footer#footer.footer-inverted .footer-widget-area  .widget .widget-title.widget-title-line-bottom:after'
		);

		$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_footer_widget_title_line_bottom_color');
}











if (!function_exists('digitex_footer_widget_title_typography')) {
	/**
	 * Generate CSS codes for Footer Top Widget Title Typography
	 */
	function digitex_footer_widget_title_typography() {
		global $digitex_redux_theme_opt;
		$var_name = 'footer-settings-footer-top-widget-title-typography';
		$declaration = array();
		$selector = array(
			'footer#footer .footer-widget-area .widget .widget-title',
			//'footer#footer.footer-inverted .footer-widget-area .widget .widget-title'
		);

		$declaration = digitex_redux_option_field_typography( $var_name );
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_footer_widget_title_typography');
}

if (!function_exists('digitex_footer_widget_text_typography')) {
	/**
	 * Generate CSS codes for Footer Top Widget Text Typography
	 */
	function digitex_footer_widget_text_typography() {
		global $digitex_redux_theme_opt;
		$var_name = 'footer-settings-footer-top-widget-text-typography';
		$declaration = array();
		$selector = array(
			'footer#footer .footer-widget-area',
			//'footer#footer.footer-inverted .footer-widget-area'
		);

		$declaration = digitex_redux_option_field_typography( $var_name );
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_footer_widget_text_typography');
}

if (!function_exists('digitex_footer_widget_link_typography')) {
	/**
	 * Generate CSS codes for Footer Top Widget Link Typography
	 */
	function digitex_footer_widget_link_typography() {
		global $digitex_redux_theme_opt;
		$var_name = 'footer-settings-footer-top-widget-link-typography';
		$declaration = array();
		$selector = array(
			'footer#footer .footer-widget-area a',
			//'footer#footer.footer-inverted .footer-widget-area a'
		);

		$declaration = digitex_redux_option_field_typography( $var_name );
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_footer_widget_link_typography');
}

if (!function_exists('digitex_footer_widget_link_hover_color')) {
	/**
	 * Generate CSS codes for Footer Top Widget Link Hover Color
	 */
	function digitex_footer_widget_link_hover_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'footer-settings-footer-top-widget-link-hover-color';
		$declaration = array();
		$selector = array(
			'footer#footer .footer-widget-area a:hover',
			//'footer#footer.footer-inverted .footer-widget-area a:hover'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['color'] = $digitex_redux_theme_opt[$var_name];
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_footer_widget_link_hover_color');
}