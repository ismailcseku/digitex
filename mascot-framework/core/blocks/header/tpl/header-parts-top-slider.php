
	<?php
	/**
	* digitex_before_top_sliders_container hook.
	*
	*/
	do_action( 'digitex_before_top_sliders_container' );
	?>
	<div class="top-sliders-container">
		<?php
			/**
			* digitex_top_sliders_container_start hook.
			*
			*/
			do_action( 'digitex_top_sliders_container_start' );
		?>

		<?php
			echo digitex_get_top_main_slider();
		?>

		<?php
			/**
			* digitex_top_sliders_container_end hook.
			*
			*/
			do_action( 'digitex_top_sliders_container_end' );
		?>
	</div>
	<?php
	/**
	* digitex_after_top_sliders_container hook.
	*
	*/
	do_action( 'digitex_after_top_sliders_container' );
	?>
