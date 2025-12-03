<div id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<div class="page-content">
			<?php
				digitex_get_blog_single_post_thumbnail();
			?>
			<?php
				/**
				* digitex_before_page_content hook.
				*
				*/
				do_action( 'digitex_before_page_content' );
			?>
			<?php
				the_content();
			?>
			<?php
				/**
				* digitex_after_page_content hook.
				*
				*/
				do_action( 'digitex_after_page_content' );
			?>

			<?php digitex_get_post_wp_link_pages(); ?>

			<?php
				if( digitex_get_redux_option( 'page-settings-show-share' ) ) {
					digitex_get_social_share_links();
				}
			?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php
	if( $page_show_comments ) {
		digitex_show_comments();
	}
?>
