<?php

// Setup
define('CITYANDPEOPLE_DEV_MODE', true);

// Includes
include get_theme_file_path('includes/Enqueue.php');
include get_theme_file_path('includes/Setup.php');
include get_theme_file_path('includes/Widgets.php');
include get_theme_file_path('includes/Cityandpeople_Nav_Walker.php');
include get_theme_file_path('includes/Custom_Post_Types.php');
include get_theme_file_path('includes/Custom_Fields_Type.php');
//include get_theme_file_path('includes/acf-fields.php');
//include get_theme_file_path('includes/filter_rating.php');
include get_theme_file_path('includes/Acf_Filter_Rating.php');
include get_theme_file_path('includes/Acf_Filter_Year.php');
//include get_theme_file_path('includes/filter_year.php');
//include get_theme_file_path('includes/acf-slider.php');
include get_theme_file_path('includes/My_Slider.php');
include get_theme_file_path('includes/Cpt_Gutenberg_Support.php');
include get_theme_file_path('includes/Gutenberg_Template_To_Single_Post.php');
// Hooks
add_action('wp_enqueue_scripts', [new Enqueue(), 'cityandpeople_enqueue']);
add_action('after_setup_theme', [new Setup(), 'cityandpeople_setup_theme']);
add_action('widgets_init', [new Widgets(), 'cityandpeople_widgets']);
add_action('init', [new Custom_Post_Types(), 'cityandpeople_register_post_type_init']);
add_action('init', [new Custom_Post_Types(), 'cityandpeople_register_human_init']);
add_action('init', [new custom_Post_Types(), 'cityandpeople_register_theatre_init']);
add_action('init', [new custom_Post_Types(), 'cityandpeople_register_museum_init']);
//$rating_object = new acf_filter_rating($query);
//echo " ro: ";
//print_r($rating_object);
add_action('pre_get_posts', /*[new acf_filter_rating($query), */'acf_filter_rating', 1);
add_action('pre_get_posts', /*[new acf_filter_year($query), */'acf_filter_year', 1);
//add_action('pre_get_posts', 'filter_year', 1);
add_action('acf/init', [new My_Slider(), 'my_register_blocks']);
add_action('init', [new Custom_Fields_Type(), 'is_post_type']);
add_action('init', [new Cpt_Gutenberg_Support(), 'custom_post_types']);
add_action('init', [new Gutenberg_Template_To_Single_Post(), 'gutenberg_template_to_single_post']);

// Shortcodes