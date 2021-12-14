<?php

function bootkit_register_post_type_init()
{
    $labels = array(
        'name' => __('Movies'),
        'singular_name' => __('Movie'), // show in admin panel add->Movie
        'add_new' => __('Add movie'),
        'add_new_item' => __('Add new movie'), // <title>
        'edit_item' => __('Edit movie'),
        'new_item' => __('New movie'),
        'all_items' => __('All movies'),
        'view_item' => __('View movies'),
        'search_items' => __('Search movies'),
        'not_found' => __('Movies not found.'),
        'not_found_in_trash' => __('Movies not found in trash.'),
        'menu_name' => __('Movies'),
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
    register_post_type('movies', $args);
}
