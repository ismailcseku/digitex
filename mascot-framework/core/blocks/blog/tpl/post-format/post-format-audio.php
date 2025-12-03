<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<?php do_action( 'digitex_blog_post_entry_header_start' ); ?>
		<?php digitex_get_post_thumbnail( $post_format ); ?>
		<?php do_action( 'digitex_blog_post_entry_header_end' ); ?>
	</div>
	<div class="entry-content">
		<?php do_action( 'digitex_blog_post_entry_content_start' ); ?>



		<?php digitex_post_meta(); ?>
		<?php digitex_get_post_title(); ?>
		<div class="post-excerpt">
			<?php digitex_get_excerpt(); ?>
		</div>
		<?php do_action( 'digitex_blog_post_entry_content_end' ); ?>

		<?php echo digitex_blog_read_more_link(); ?>
	</div>
	<div class="clearfix"></div>
</article>