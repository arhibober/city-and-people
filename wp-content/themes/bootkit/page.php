<?php get_header("v2");?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-12">
            <?php
while (have_posts()) {
    the_post();

    ?>
            <!-- Title -->
            <h1 class="mt-4 mb-3"><?php the_title()?></h1>

            <hr>

            <!-- Preview Image -->
            <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->
            <?php
if (has_post_thumbnail()) {
        the_post_thumbnail("full", ["class" => "card-img-top"]);
    }
    ?>

            <hr>

            <!-- Post Content -->
            <?php the_content();
    $defaults = array(
        'before' => '<div class="row justify-content-center align-items-center">' . __('Pages:'),
        'after' => '</div>',
    );

    wp_link_pages($defaults);

    edit_post_link();
    ?>

            <hr>

            <?php

    if (comments_open() || get_comments_number()) {
        comments_template();
    }

    ?>

            <?php
}
?>
        </div>

        <!-- /.row -->
    </div>
    <h5>Post meta data:</h5>
    <?php the_meta();?>
    <!-- /.container -->
</div>
<?php get_footer();?>