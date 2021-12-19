<?php
function cityandpeople_register_post_type_init()
{
    $labels = array(
        'name' => __('High school'),
        'singular_name' => __('High school'), // show in admin panel add->Movie
        'add_new' => __('Add high school'),
        'add_new_item' => __('Add new high school'), // <title>
        'edit_item' => __('Edit high school'),
        'new_item' => __('New high school'),
        'all_items' => __('All high schools'),
        'view_item' => __('View high school'),
        'search_items' => __('Search high school'),
        'not_found' => __('High schools not found.'),
        'not_found_in_trash' => __('High schools not found in trash.'),
        'menu_name' => __('High schools'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true, //for all users - true
        'show_ui' => true, // show in admin panel
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail'),
    );
    register_post_type('high-school', $args);
}

function cityandpeople_register_human_init()
{
    $labels = array(
        'name' => __('Human'),
        'singular_name' => __('Human'), // show in admin panel add->Movie
        'add_new' => __('Add human'),
        'add_new_item' => __('Add new human'), // <title>
        'edit_item' => __('Edit human'),
        'new_item' => __('New human'),
        'all_items' => __('All people'),
        'view_item' => __('View human'),
        'search_items' => __('Search human'),
        'not_found' => __('People not found.'),
        'not_found_in_trash' => __('People not found in trash.'),
        'menu_name' => __('People'),
    );
    $args = array(
        'labels' => $labels,
        'public' => true, //for all users - true
        'show_ui' => true, // show in admin panel
        'has_archive' => true,
        'menu_icon' => get_stylesheet_directory_uri() . '/img/function_icon.png', // иконка в меню
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'comments', 'author', 'thumbnail'),
    );
    register_post_type('human', $args);
}