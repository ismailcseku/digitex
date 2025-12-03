<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( $show_post_featured_image ) { ?>
	<div class="entry-header">
		<?php do_action( 'digitex_blog_post_entry_header_start' ); ?>
		<?php digitex_get_post_thumbnail( $post_format ); ?>
		<?php if ( has_post_thumbnail() ) { ?>
			<?php if( digitex_get_redux_option( 'blog-settings-post-meta', true, 'show-post-date' ) ) { ?>
			<div class="post-single-meta">
				<?php digitex_post_shortcode_single_meta( 'show-post-date' ); ?>
			</div>
			<?php } ?>
		<?php } ?>
		<?php do_action( 'digitex_blog_post_entry_header_end' ); ?>
	</div>
	<?php } ?>
	<div class="entry-content">
		<?php do_action( 'digitex_blog_post_entry_content_start' ); ?>
		<?php digitex_post_meta(); ?>
		<?php digitex_get_post_title(); ?>
		<div class="post-excerpt">
			<?php digitex_get_excerpt(); ?>
		</div>
		<?php echo digitex_blog_read_more_link(); ?>
		<?php do_action( 'digitex_blog_post_entry_content_end' ); ?>
		<div class="clearfix"></div>
	</div>
</article>