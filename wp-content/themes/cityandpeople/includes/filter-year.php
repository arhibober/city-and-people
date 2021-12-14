<?php
function archive_meta_query($query)
{
    if (($query->is_archive) && (isset($_GET["year"]))) {
        $query->query_vars["meta_key"] = 'year';
        $query->query_vars["meta_value"] > $_GET["year"];
    }
}
add_action('pre_get_posts', 'archive_meta_query', 1);