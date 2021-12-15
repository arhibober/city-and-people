<?php

function featured_show($query)
{
    if (is_archive()) {
        if (isset($_GET["rating"])) {
            $query->set('post_type', ['high-school']);
            $current_meta = $query->get('meta_query') ? $query->get('meta_query') : [];
            $current_meta[] = array(
                'key' => 'rating',
                'value' => $_GET['rating'],
                'compare' => '=',
            );
            $query->set('meta_query', $current_meta);
        }
    }
}
add_action('pre_get_posts', 'featured_show');
