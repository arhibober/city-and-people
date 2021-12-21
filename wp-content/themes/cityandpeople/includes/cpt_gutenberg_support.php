<?php
/*Register WordPress Gutenberg CPT */
function custom_post_type()
{
    register_post_type('high-school',

        array(
            'labels' => array(
                'name' => __('High school'),
                'singular_name' => __('High_school'),
            ),
            'has_archive' => true,
            'public' => true,
            'rewrite' => array('slug' => 'high-school'),
            'show_in_rest' => true,
            'supports' => array('editor'),
        )
    );
}