<?php
function cityandpeople_post_type_messages($messages)
{
    //global $post, $post_ID;
    $messages['high schools'] = array( // heih school - название созданного нами типа записей
        0 => '', // Данный индекс не используется.
        1 => sprintf(__('High school updated. <a href="%s">View</a>', esc_url(get_permalink($post_ID)))),
        2 => __('Parameter updated.'),
        3 => __('Parameter removed.'),
        4 => __('High school updated'),
        5 => isset($_GET['revision']) ? sprintf(__('High school restored from revision: %s'), wp_post_revision_title((int) $_GET['revision'], false)) : false,
        6 => sprintf(__('High school published on the site. <a href="%s">View</a>'), esc_url(get_permalink($post_ID))),
        7 => __('High school saved.'),
        8 => sprintf(__('Submitted for review. <a target="_blank" href="%s">Preview</a>'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
        9 => sprintf(__('Scheduled for publication: <strong>%1$s</strong>. <a target="_blank" href="%2$s">View</a>'), date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
        10 => sprintf(__(' Draft updated. <a target="_blank" href="%s">Preview</a>'), esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
    );
    return $messages;
}
