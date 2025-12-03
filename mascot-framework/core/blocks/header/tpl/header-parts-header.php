	<!-- Header -->
	<?php
		/**
		* digitex_before_header hook.
		*
		*/
		do_action( 'digitex_before_header' );
	?>
	<header id="header" class="header <?php echo esc_attr(implode(' ', $header_classes)); ?>" <?php if( $params['header_layout_type'] == 'header-vertical-nav' ) { ?> style="<?php echo esc_attr( $vertical_nav_bgcolor ); ?> <?php echo esc_attr( $vertical_nav_bgimg ); ?>" <?php } ?>>
		<?php
			/**
			* digitex_header_start hook.
			*
			*/
			do_action( 'digitex_header_start' );
		?>
		<?php
			/**
			* digitex_header_top_area hook.
			*
			* @hooked digitex_get_header_top
			*/
			do_action( 'digitex_header_top_area' );
		?>
		<?php
			digitex_get_header_layout_type();
		?>

		<?php
			/**
			* digitex_header_end hook.
			*
			*/
			do_action( 'digitex_header_end' );
		?>
	</header>
	<?php
		/**
		* digitex_after_header hook.
		*
		*/
		do_action( 'digitex_after_header' );
	?>