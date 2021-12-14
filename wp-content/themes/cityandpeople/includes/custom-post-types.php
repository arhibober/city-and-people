<?php
function cityandpeople_register_post_type_init()
{
    $labels = array(
        'name' => __('High school'),
        'singular_name' => __('High school'), // show in admin panel add->Movie
        'add_new' => __('Add high school'),
        'add_new_item' => __('Add new high school'), // <title>
        'edit_item' => __('Edit high schooln'),
        'new_item' => __('New high school'),
        'all_items' => __('All high school'),
        'view_item' => __('View high school'),
        'search_items' => __('Search high school'),
        'not_found' => __('High school not found.'),
        'not_found_in_trash' => __('High school not found in trash.'),
        'menu_name' => __('High school'),
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