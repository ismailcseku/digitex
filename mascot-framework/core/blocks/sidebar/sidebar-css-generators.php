<?php

if (!function_exists('digitex_sidebar_padding')) {
	/**
	 * Generate CSS codes for Sidebar Padding
	 */
	function digitex_sidebar_padding() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-padding';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		//added padding into the container.
		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name]['padding-top'] != "" ) {
			$declaration['padding-top'] = $digitex_redux_theme_opt[$var_name]['padding-top'];
		}
		if( $digitex_redux_theme_opt[$var_name]['padding-right'] != "" ) {
			$declaration['padding-right'] = $digitex_redux_theme_opt[$var_name]['padding-right'];
		}
		if( $digitex_redux_theme_opt[$var_name]['padding-bottom'] != "" ) {
			$declaration['padding-bottom'] = $digitex_redux_theme_opt[$var_name]['padding-bottom'];
		}
		if( $digitex_redux_theme_opt[$var_name]['padding-left'] != "" ) {
			$declaration['padding-left'] = $digitex_redux_theme_opt[$var_name]['padding-left'];
		}
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_padding');
}


if (!function_exists('digitex_sidebar_bg_color')) {
	/**
	 * Generate CSS codes for Sidebar Background Color
	 */
	function digitex_sidebar_bg_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-bg-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_bg_color');
}


if (!function_exists('digitex_sidebar_text_align')) {
	/**
	 * Generate CSS codes for Sidebar Text Alignment
	 */
	function digitex_sidebar_text_align() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-text-align';
		$declaration = array();
		$selector = array(
			'.sidebar-area'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['text-align'] = $digitex_redux_theme_opt[$var_name];
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_text_align');
}





if (!function_exists('digitex_sidebar_title_padding')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Padding
	 */
	function digitex_sidebar_title_padding() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-padding';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		//added padding into the container.
		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name]['padding-top'] != "" ) {
			$declaration['padding-top'] = $digitex_redux_theme_opt[$var_name]['padding-top'];
		}
		if( $digitex_redux_theme_opt[$var_name]['padding-right'] != "" ) {
			$declaration['padding-right'] = $digitex_redux_theme_opt[$var_name]['padding-right'];
		}
		if( $digitex_redux_theme_opt[$var_name]['padding-bottom'] != "" ) {
			$declaration['padding-bottom'] = $digitex_redux_theme_opt[$var_name]['padding-bottom'];
		}
		if( $digitex_redux_theme_opt[$var_name]['padding-left'] != "" ) {
			$declaration['padding-left'] = $digitex_redux_theme_opt[$var_name]['padding-left'];
		}
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_title_padding');
}


if (!function_exists('digitex_sidebar_title_bg_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Background Color
	 */
	function digitex_sidebar_title_bg_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-bg-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_title_bg_color');
}


if (!function_exists('digitex_sidebar_title_text_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Text Color
	 */
	function digitex_sidebar_title_text_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-text-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
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
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_title_text_color');
}


if (!function_exists('digitex_sidebar_title_font_size')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Font Size
	 */
	function digitex_sidebar_title_font_size() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-font-size';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title'
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['font-size'] = $digitex_redux_theme_opt[$var_name] . 'px';
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_title_font_size');
}


if (!function_exists('digitex_sidebar_title_line_bottom_color')) {
	/**
	 * Generate CSS codes for Sidebar Widget Title Line Bottom Color
	 */
	function digitex_sidebar_title_line_bottom_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'sidebar-settings-sidebar-title-line-bottom-color';
		$declaration = array();
		$selector = array(
			'.sidebar-area .widget .widget-title.widget-title-line-bottom:after'
		);

		if( !digitex_get_redux_option( 'sidebar-settings-sidebar-title-show-line-bottom' ) ) {
			return;
		}

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] == '' ) {
			return;
		}

		$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_sidebar_title_line_bottom_color');
}