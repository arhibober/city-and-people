<?php
function my_extra_fields()
{
// add_meta_box('extra_fields', 'Extra fields', 'extra_fields_box_func', 'post', 'normal', 'high');
    add_meta_box('location', 'Location', 'location_fields_box_highschool_func', 'high-school', 'normal', 'high');
}
add_action('add_meta_boxes', 'my_extra_fields', 1);

function location_fields_box_highschool_func($post)
{
    ?>
<p><label><input type="text" name="extra[location]" value="<?php echo get_post_meta($post->ID, 'location', 1); ?>"
            style="width:50%" /> ? Header location (location)</label></p>
<p><label><input type="text" name="extra[year]" value="<?php echo get_post_meta($post->ID, 'year', 1); ?>"
            style="width:50%" /> ? Header year (year)</label></p>

<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
<?php
}

add_action('save_post', 'my_extra_fields_update', 0);

function my_extra_fields_update($post_id)
{

    if (
        empty($_POST['extra'])
        || !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__)
        || wp_is_post_autosave($post_id)
        || wp_is_post_revision($post_id)
    ) {
        return false;
    }

    // ОК!  Save/update
    $_POST['extra'] = array_map('sanitize_text_field', $_POST['extra']);
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key);
            continue;
        }

        update_post_meta($post_id, $key, $value);
    }

    return $post_id;
}