<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "main-content" div.
 *
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<link rel="profile" href="//gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
<?php wp_body_open(); ?>
<?php
	/**
	 * digitex_body_tag_start hook.
	 *
	 */
	do_action( 'digitex_body_tag_start' );
?>
<div id="wrapper">
	<?php
		/**
		 * digitex_wrapper_start hook.
		 *
		 */
		do_action( 'digitex_wrapper_start' );
	?>
	<?php digitex_get_page_preloader(); ?>

	<?php if( apply_filters('digitex_filter_show_header', true) ): ?>
	<?php digitex_get_header_parts(); ?>
	<?php endif; ?>

	<?php
		/**
		 * digitex_before_main_content hook.
		 *
		 */
		do_action( 'digitex_before_main_content' );
	?>
	<div class="main-content">
	<?php
		/**
		 * digitex_main_content_start hook.
		 *
		 */
		do_action( 'digitex_main_content_start' );
	?>
