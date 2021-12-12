<?php

// Setup
define('CITYANDPEOPLE_DEV_MODE', true);

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/setup.php');
include get_theme_file_path('includes/widgets.php');
include get_theme_file_path('includes/custom-nav-walker.php');

// Hooks
add_action('wp_enqueue_scripts', 'cityandpeople_enqueue');
add_action('after_setup_theme', 'cityandpeople_setup_theme');
add_action('widgets_init', 'cityandpeople_widgets');

// Shortcodes