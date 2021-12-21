<?php
class custom_fields_type
{
    public function __constructor()
    {
    }

    public function true_custom_fields()
    {
        add_post_type_support('high-school', 'custom-fields');
    }

    public static function is_post_type($type)
    {
        global $wp_query;
        if ($type == get_post_type($wp_query->post->ID)) {
            return true;
        }
        return false;
    }
}
