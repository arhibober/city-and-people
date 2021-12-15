<?php
// function archive_meta_query($query)
// {
//     if (($query->is_archive) && (isset($_GET["year"]))) {
//         $query->query_vars["meta_key"] = 'year';
//         $query->query_vars["meta_value"] > $_GET["year"];
//     }
// }

function cityandpeople_meta_query($query)
{
    echo "kkk";
    /*if (is_admin()) {
    return;
    }
    if (!$query->is_main_query()) {
    return;
    }

    if (!is_post_type_archive('actions')) {
    return;
    }*/

    if (is_archive()) {
        if (isset($_GET["rating"])) {

            $meta_query[] = array(
                'key' => 'rating',
                'value' => $_GET['rating'],
                'compare' => '=',
            );

            $query->set('meta_query', $meta_query);
            $query->set('meta_key', 'rating');
            $query->set('meta_value', $_GET['rating']);
            $query->set('meta_compare', '=');
            echo " q: ";
            print_r($query);
        }
    }
    return $query;
    // return;
}

function featured_show($query)
{
    if (!$query->is_main_query() && is_archive()) {
        $query->set('post_type', ['high-school']);
        // print_r($query);
        $current_meta = $query->get('meta_query') ? $query->get('meta_query') : [];
        // $current_meta = $query->get('meta_query');
        $current_meta[] = array(
            'key' => 'rating',
            'value' => '4-5',
            'compare' => '=',
        );
        echo '!!!';
        print_r($current_meta);
        // $meta_query = $current_meta[] = $custom_meta;
        // $query->set('meta_query', array($meta_query));
        $query->set('meta_query', $current_meta);
        //return $query;
    }
}
add_action('pre_get_posts', 'featured_show');
