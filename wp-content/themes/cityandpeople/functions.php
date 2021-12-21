<?php

// Setup
define('CITYANDPEOPLE_DEV_MODE', true);

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/setup.php');
include get_theme_file_path('includes/widgets.php');
include get_theme_file_path('includes/Cityandpeople_nav_walker.php');
include get_theme_file_path('includes/custom_post_types.php');
include get_theme_file_path('includes/custom_fields_type.php');
//include get_theme_file_path('includes/acf-fields.php');
//include get_theme_file_path('includes/filter_rating.php');
//include get_theme_file_path('includes/filter_year.php');
//include get_theme_file_path('includes/acf-slider.php');
include get_theme_file_path('includes/my_slider.php');
// Hooks
add_action('wp_enqueue_scripts', [new enqueue(), 'cityandpeople_enqueue']);
add_action('after_setup_theme', [new setup(), 'cityandpeople_setup_theme']);
add_action('widgets_init', [new widgets(), 'cityandpeople_widgets']);
add_action('init', [new custom_post_type(), 'cityandpeople_register_post_type_init']);
add_action('init', [new custom_post_type(), 'cityandpeople_register_human_init']);
add_action('init', [new custom_post_type(), 'cityandpeople_register_theatre_init']);
add_action('init', [new custom_post_type(), 'cityandpeople_register_museum_init']);
//add_action('pre_get_posts', 'filter_rating', 1);
//add_action('pre_get_posts', 'filter_year', 1);
add_action('acf/init', [new my_slider(), 'my_register_blocks']);
//add_action('init', [new custom_fields_type(), 'is_post_type']);

// Shortcodes