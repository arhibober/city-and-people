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
<p><label><input type="text" name="extra[title]" value="<?php echo get_post_meta($post->ID, 'title', 1); ?>"
            style="width:50%" /> ? Header title (title)</label></p>

<p>Description:
    <textarea type="text" name="extra[description]"
        style="width:100%;height:50px;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
</p>

<p>Visibility: <?php $mark_v = get_post_meta($post->ID, 'robotmeta', 1);?>
    <label><input type="radio" name="extra[robotmeta]" value="" <?php checked($mark_v, '');?> /> index,follow</label>
    <label><input type="radio" name="extra[robotmeta]" value="nofollow" <?php checked($mark_v, 'nofollow');?> />
        nofollow</label>
    <label><input type="radio" name="extra[robotmeta]" value="noindex" <?php checked($mark_v, 'noindex');?> />
        noindex</label>
    <label><input type="radio" name="extra[robotmeta]" value="noindex,nofollow"
            <?php checked($mark_v, 'noindex,nofollow');?> /> noindex,nofollow</label>
</p>

<p><select name="extra[select]">
        <?php $sel_v = get_post_meta($post->ID, 'year', 1);?>
        <option value="0">----</option>
        <option value="1" <?php selected($sel_v, '1')?>>1</option>
        <option value="2" <?php selected($sel_v, '2')?>>2</option>
        <option value="3" <?php selected($sel_v, '3')?>>3</option>
    </select> ? choose</p>

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