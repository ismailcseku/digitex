<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */
$header_return_true_false = ( digitex_get_redux_option( '404-page-settings-show-header', true ) == true ) ? 'digitex_return_true' : 'digitex_return_false';
add_filter( 'digitex_filter_show_header', $header_return_true_false );

$footer_return_true_false = ( digitex_get_redux_option( '404-page-settings-show-footer', true ) == true ) ? 'digitex_return_true' : 'digitex_return_false';
add_filter( 'digitex_filter_show_footer', $footer_return_true_false );

get_header();

digitex_get_title_area_parts();

digitex_get_404_parts();

get_footer();
