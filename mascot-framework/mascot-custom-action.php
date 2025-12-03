<?php

// Custom Action for this theme
add_action('after_setup_theme', 'digitex_custom_action_init', 0);

function digitex_custom_action_init() {

	do_action('digitex_before_custom_action');

	do_action('digitex_custom_action');

	do_action('digitex_after_custom_action');
}