<?php
/*
 * Template Name: Left Column Page
 * Template post type: post, page, movies
 */
get_header("v2");?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <?php get_sidebar();?>
        <!-- Post Content Column -->
        <div class="col-lg-8">
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
        the_post_thumbnail("full", ["class" => "img-fluid rounded"]);
    }
    ?>

            <!-- Page Content -->
            <?php the_content();

    ?>
            <hr>
            <!-- Post Author Info -->

            <?php
edit_post_link();

    ?>


            <!-- Tag cloud -->
            <?php the_tags('', ', ');?>


            <hr>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <?php previous_post_link();?>
                </li>
                <li class="page-item">
                    <?php next_post_link();?>
                </li>
            </ul>



            <!-- Comments -->

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
    <!-- /.container -->
</div>
<!-- <div class="container">
    <div class="row">
        <?php
$categories = get_terms('category', 'orderby=name&hide_empty=0');

if ($categories) {
    echo '<ul>';
    foreach ($categories as $cat) {
        // term_id - ID рубрики, а $cat->name - название рубрики
        echo "<li value='{$cat->term_id}'>{$cat->name}</li>";
    }
    echo '</ul>';
}

?>
    </div>
</div> -->


<div class="container">
    <div class="row">

        <?php
$arr = get_post_custom();

//print_r(get_field_objects());
foreach ($arr as $key => $fields) {
    if (!is_protected_meta($key, 'post')) {
        echo "<div class=\"col-lg-3\">";
        echo '<div class="card">';
        print_r("<div class=\"card-header\"><h4 class=\"card-title\">" . (get_field_object($key) ? get_field_object($key)["label"] : $key) . "</h4></div>");
        foreach ($fields as $field) {
            print_r("<div class=\"card-body\"><p class=\"card-text\">{$field}</p></div>");
        }
        echo "</div>";
        echo "</div>";
    }
}
// $arr = get_field_objects();
// foreach ($arr as $key => $fields) {
//     if (!is_protected_meta($key, 'post')) {
//         echo "<div class=\"col-lg-3\">";
//         echo '<div class="card">';
//         print_r("<div class=\"card-header\"><h4 class=\"card-title\">" . get_field_object($key)["label"] . "</h4></div>");
//         print_r("<div class=\"card-body\"><p class=\"card-text\">" . get_field_object($key)["value"] . "</p></div>");
//         echo "</div>";
//         echo "</div>";
//     }
// }

?>
        <ul>
            <li><strong>Director:</strong> <?php the_field('movie_director');?></li>
            <li><strong>Release Year:</strong> <?php the_field('release_year');?></li>
            <li><strong>Movie Rating:</strong> <?php the_field('movie_rating');?>/10</li>
        </ul>

    </div>

</div>
</div>


<?php get_footer();?>