<?php
function true_custom_fields()
{
    add_post_type_support('high-school', 'custom-fields');
}

function is_post_type($type)
{
    global $wp_query;
    if ($type == get_post_type($wp_query->post->ID)) {
        return true;
    }

    return false;
}
