<?php

function filter_rating($query)
{
    if (isset($_GET["rating"]) && is_archive()) {
        $query->set('post_type', ['high-school']);
        $current_meta = $query->get('meta_query') ? $query->get('meta_query') : [];
        $current_meta[] = array(
            'key' => 'rating',
            'value' => $_GET['rating'],
            'compare' => '=',
        );
        $query->set('meta_query', $current_meta);
        // $args = array(
        //     'post_type' => 'high-school',
        //     'meta_query' => array(
        //         array(
        //             'key' => 'rating',
        //             'value' => $_GET["rating"],
        //             'compare' => '=',
        //         ),
        //     ),
        // );
        // $query = new WP_Query($args);
    }
}
add_action('pre_get_posts', 'filter_rating');