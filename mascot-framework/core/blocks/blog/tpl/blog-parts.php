<?php
	/**
	* digitex_before_blog_section hook.
	*
	*/
	do_action( 'digitex_before_blog_section' );
?>
<section>
	<div class="<?php echo esc_attr( $container_type ); ?>">
		<?php
			/**
			* digitex_blog_container_start hook.
			*
			*/
			do_action( 'digitex_blog_container_start' );
		?>

		<div class="blog-posts">
			<?php
				digitex_get_blog_sidebar_layout();
			?>
		</div>

	<?php
		/**
		* digitex_blog_container_end hook.
		*
		*/
		do_action( 'digitex_blog_container_end' );
	?>
	</div>
</section>
<?php
	/**
	* digitex_after_blog_section hook.
	*
	*/
	do_action( 'digitex_after_blog_section' );
?>
