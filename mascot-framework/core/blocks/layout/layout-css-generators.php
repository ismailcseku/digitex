<?php

if (!function_exists('digitex_layout_settings_boxed_layout_padding_top_bottom')) {
	/**
	 * Generate CSS codes for Boxed Layout - Padding Top & Bottom
	 */
	function digitex_layout_settings_boxed_layout_padding_top_bottom() {
		global $digitex_redux_theme_opt;
		$var_name = 'layout-settings-boxed-layout-padding-top-bottom';
		$declaration = array();
		$selector = array(
			'body.tm-boxed-layout',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		//if Page Layout boxed
		if( digitex_get_redux_option( 'layout-settings-page-layout' ) == 'boxed' ) {
			$padding_top = $digitex_redux_theme_opt[$var_name]['padding-top'];
			$padding_bottom = $digitex_redux_theme_opt[$var_name]['padding-bottom'];

			if( !empty( $padding_top ) && $padding_top != "" ) {
				$padding_top = digitex_remove_suffix( $padding_top, 'px');
				$declaration['padding-top'] = $padding_top . 'px';
			}
			if( !empty( $padding_bottom ) && $padding_bottom != "" ) {
				$padding_bottom = digitex_remove_suffix( $padding_bottom, 'px');
				$declaration['padding-bottom'] = $padding_bottom . 'px';
			}
		}

		digitex_dynamic_css_generator($selector, $declaration);
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_layout_settings_boxed_layout_padding_top_bottom');
}


if (!function_exists('digitex_stretched_layout_background_color')) {
	/**
	 * Generate CSS codes for Stretched Layout - Background Color
	 */
	function digitex_stretched_layout_background_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'layout-settings-stretched-layout-bg-bgcolor';
		$declaration = array();
		$selector = array(
			'body.tm-stretched-layout',
		);

		//if empty then return
		if( digitex_get_redux_option( 'layout-settings-page-layout' ) != 'stretched' ) {
			return;
		}
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( digitex_get_redux_option( 'layout-settings-boxed-layout-bg-type' ) == 'bg-color' ) {
			if( $digitex_redux_theme_opt[$var_name] != "" ) {
				$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
			}
			digitex_dynamic_css_generator($selector, $declaration);
		}
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_stretched_layout_background_color');
}


if (!function_exists('digitex_boxed_layout_background_color')) {
	/**
	 * Generate CSS codes for Boxed Layout - Background Color
	 */
	function digitex_boxed_layout_background_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'layout-settings-boxed-layout-bg-type-bgcolor';
		$declaration = array();
		$selector = array(
			'body.tm-boxed-layout',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( digitex_get_redux_option( 'layout-settings-boxed-layout-bg-type' ) == 'bg-color' ) {
			if( $digitex_redux_theme_opt[$var_name] != "" ) {
				$declaration['background-color'] = $digitex_redux_theme_opt[$var_name];
			}
			digitex_dynamic_css_generator($selector, $declaration);
		}
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_boxed_layout_background_color');
}




if (!function_exists('digitex_boxed_layout_background_pattern')) {
	/**
	 * Generate CSS codes for Boxed Layout - Background Pattern
	 */
	function digitex_boxed_layout_background_pattern() {
		global $digitex_redux_theme_opt;
		$var_name = 'layout-settings-boxed-layout-bg-type-pattern';
		$declaration = array();
		$selector = array(
			'body.tm-boxed-layout',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( digitex_get_redux_option( 'layout-settings-boxed-layout-bg-type' ) == 'bg-patter' ) {
			if( $digitex_redux_theme_opt[$var_name] != "" ) {
				$declaration['background-image'] = 'url('.$digitex_redux_theme_opt[$var_name].')';
			}
			digitex_dynamic_css_generator($selector, $declaration);
		}
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_boxed_layout_background_pattern');
}


if (!function_exists('digitex_boxed_layout_bg')) {
	/**
	 * Generate CSS codes for Widget Footer Background
	 */
	function digitex_boxed_layout_bg() {
		global $digitex_redux_theme_opt;
		$var_name = 'layout-settings-boxed-layout-bg-type-bgimg';
		$declaration = array();
		$selector = array(
			'body.tm-boxed-layout',
		);

		//if empty then return
		if( !array_key_exists( $var_name, $digitex_redux_theme_opt ) ) {
			return;
		}

		if( digitex_get_redux_option( 'layout-settings-boxed-layout-bg-type' ) == 'bg-image' ) {
			$declaration = digitex_redux_option_field_background( $var_name );
			digitex_dynamic_css_generator($selector, $declaration);
		}
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_boxed_layout_bg');
}





if (!function_exists('digitex_dark_layout_background_color')) {
	/**
	 * Generate CSS codes for dark Layout - Background Color
	 */
	function digitex_dark_layout_background_color() {
		global $digitex_redux_theme_opt;
		$var_name = 'general-settings-dark-mode-custom-bgcolor';
		$declaration = array();
		$selector = array(
			'[data-tm-layout="dark"]'
		);

		//if empty then return
		if( digitex_get_redux_option( 'general-settings-enable-dark-mode' ) != '1' ) {
			return;
		}

		if( $digitex_redux_theme_opt[$var_name] != "" ) {
			$declaration['--body-bg'] = $digitex_redux_theme_opt[$var_name] . '!important';
			digitex_dynamic_css_generator($selector, $declaration);
		}
	}
	add_action('digitex_dynamic_css_generator_action', 'digitex_dark_layout_background_color');
}