<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the .main-content div and #wrapper
 *
 */
?>


	<?php digitex_get_footer_top_callout(); ?>


	<?php
		/**
		 * digitex_main_content_end hook.
		 *
		 */
		do_action( 'digitex_main_content_end' );
	?>
	</div>
	<!-- main-content end -->
	<?php
		/**
		 * digitex_after_main_content hook.
		 *
		 */
		do_action( 'digitex_after_main_content' );
	?>


	<?php if( apply_filters('digitex_filter_show_footer', true) ): ?>
	<?php digitex_get_footer_parts(); ?>
	<?php endif; ?>

	<?php
		/**
		 * digitex_wrapper_end hook.
		 *
		 */
		do_action( 'digitex_wrapper_end' );
	?>
</div>
<!-- wrapper end -->
<?php
	/**
	 * digitex_body_tag_end hook.
	 *
	 */
	do_action( 'digitex_body_tag_end' );
?>
<?php
	/**
	 * nav_search_icon_popup_html hook.
	 *
	 */
	do_action( 'digitex_nav_search_icon_popup_html');
	digitex_floating_cart_sidebar();
?>
<?php wp_footer(); ?>
</body>
</html>
