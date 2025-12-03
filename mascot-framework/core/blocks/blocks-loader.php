<?php

/* Loads all blocks located in blocks folder
================================================== */
if( !function_exists('digitex_load_all_template_parts') ) {
	function digitex_load_all_template_parts() {
		foreach( glob(DIGITEX_FRAMEWORK_DIR.'/core/blocks/*/loader.php') as $each_template_part_loader ) {
			require_once $each_template_part_loader;
		}
	}
	add_action('digitex_before_custom_action', 'digitex_load_all_template_parts');
}