<?php
function acf_filter_year($query)
{
    if (isset($_GET["o-year"]) && is_archive()) {

        $query->set('post_type', ['high-school']);

        $query->set('numberposts', -1);
        $query->set('meta_key', ['o-year']);
        $query->set('meta_value', $_GET['o-year']);
        $query->set('type', 'NUMERIC');
        $query->set('compare', "=");
    }
}
