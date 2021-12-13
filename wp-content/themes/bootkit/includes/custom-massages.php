<?php
function bootkit_post_type_messages($messages)
{
    //global $post, $post_ID;
    $messages['movies'] = array( // movies - название созданного нами типа записей
        0 => '', // Данный индекс не используется.
        1 => sprintf('Movie updated. <a href="%s">View</a>', esc_url(get_permalink($post_ID))),
        2 => 'Parameter updated.',
        3 => 'Parameter removed.',
        4 => 'Movie updated',
        5 => isset($_GET['revision']) ? sprintf('Movie restored from revision: %s', wp_post_revision_title((int) $_GET['revision'], false)) : false,
        6 => sprintf('Movie published on the site. <a href="%s">View</a>', esc_url(get_permalink($post_ID))),
        7 => 'Movie saved.',
        8 => sprintf('Submitted for review. <a target="_blank" href="%s">Preview</a>', esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
        9 => sprintf('Scheduled for publication: <strong>%1$s</strong>. <a target="_blank" href="%2$s">View</a>', date_i18n(__('M j, Y @ G:i'), strtotime($post->post_date)), esc_url(get_permalink($post_ID))),
        10 => sprintf(' Draft updated. <a target="_blank" href="%s">Preview</a>', esc_url(add_query_arg('preview', 'true', get_permalink($post_ID)))),
    );
    return $messages;
}