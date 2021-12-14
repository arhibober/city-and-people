<?php
echo "<h2>See also</h2>";
$myposts = get_posts();
foreach ($myposts as $post) {
    setup_postdata($post);
    get_template_part('partials/posts/content', 'excerpt');
    the_post();
}