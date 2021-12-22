<?php
function acf_filter_rating($query)
{
    if (isset($_GET["rating"]) && is_archive()) {

        $query->set('post_type', ['high-school']);

        $query->set('numberposts', -1);
        $query->set('meta_key', ['rating']);
        $query->set('meta_value', $_GET['rating']);
        $query->set('type', 'NUMERIC');
        $query->set('compare', "=");
    }
}
