<?php
function cityandpeople_register_post_type_init()
{
    $labels = array(
        'name' => 'High school',
        'singular_name' => 'High school', // show in admin panel add->Movie
        'add_new' => 'Add high school',
        'add_new_item' => 'Add new high school', // <title>
        'edit_item' => 'Edit high schooln',
        'new_item' => 'New high school',
        'all_items' => 'All high school',
        'view_item' => 'View high school',
        'search_items' => 'Search high school',
        'not_found' => 'High school not found.',
        'not_found_in_trash' => 'High school not found in trash.',
        'menu_name' => 'High school',
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