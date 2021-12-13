<?php get_header("v2");?>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <?php if (have_posts()) {
    while (have_posts()) {
        the_post();

        global $post;
        $author_ID = $post->post_author;
        $author_URL = get_author_posts_url($author_ID);

        ?>
            <!-- Title -->
            <h1 class="mt-4"><?php the_title()?></h1>

            <!-- Post category: -->
            <h2 class="mt-4"><?php the_category(" ")?></h2>

            <!-- Author -->
            <p class="lead">
                by
                <a href="<?php echo $author_URL; ?>"><?php the_author();?></a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p><?php the_time(get_option('date_format'));
        echo " ";
        the_time(get_option('time_format'));?></p>

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



            <!-- Post Author Info -->
            <div class="card">
                <div class="card-header">
                    <strong>
                        Posted by
                        <a href="<?php echo $author_URL; ?>"><?php the_author();?></a>
                    </strong>
                </div>
                <div class="card-body">
                    <div class="author-image">
                        <?php echo get_avatar($author_ID, 90, '', false, ['class' => 'img-circle']); ?>
                    </div>
                    <?php echo nl2br(get_the_author_meta('description')); ?>
                </div>
            </div><!-- Post Single - Author End -->
            <h4>culpa-officiis</h4>
            <?php
//------------------
        // $query = new WP_Query(['category_name' => 'culpa-officiis']);
        // //print_r($query);

        // while ($query->have_posts()) {
        //     $query->the_post();

        //     the_title();
        //     the_content();
        // }

        // $args = array(
        //     'posts_per_page' => 5,
        //     'orderby' => 'comment_count',
        // );

        // $query = new WP_Query($args);
        // if ($query->have_posts()) {
        //     while ($query->have_posts()) {
        //         $query->the_post();
        //         echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
        //     }
        // } else {
        //     // Постов не найдено
        // }
        // // Сбрасываем до оригинальных данных поста.
        // wp_reset_postdata();

        // $categories = get_terms('category', 'orderby=name&hide_empty=0');

        // if ($categories) {
        //     echo '<ul>';
        //     foreach ($categories as $cat) {
        //         // term_id - ID рубрики, а $cat->name - название рубрики
        //         echo "<li value='{$cat->term_id}'>{$cat->name}</li>";
        //     }
        //     echo '</ul>';
        // }
        //---------------------
        ?>

            <h4>Related Posts:</h4>

            <div class="related-posts clearfix">

                <?php

        $categories = get_the_category();

        $rp_query = new WP_Query([
            'posts_per_page' => 2,
            'post__not_in' => [$post->ID],
            'cat' => !empty($categories) ? $categories[0]->term_id : null,
        ]);

        if ($rp_query->have_posts()) {
            while ($rp_query->have_posts()) {
                $rp_query->the_post();

                ?>
                <div class="mpost clearfix">
                    <?php

                if (has_post_thumbnail()) {
                    ?>
                    <div class="entry-image">
                        <a href="<?php the_permalink();?>">
                            <?php the_post_thumbnail('thumbnail');?>
                        </a>
                    </div>
                    <?php
}

                ?>

                    <div class="entry-c">
                        <div class="entry-title">
                            <h4>
                                <a href="<?php the_permalink();?>">
                                    <?php the_title();?>
                                </a>
                            </h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> <?php echo get_the_date(); ?></li>
                            <li><i class="icon-comments"></i> <?php comments_number('0');?></li>
                        </ul>
                        <div class="entry-content">
                            <?php the_excerpt();?>
                        </div>
                    </div>
                </div>
                <?php
}

            wp_reset_postdata();
        }

        ?>
            </div>



            <?php

        if (comments_open() || get_comments_number()) {
            comments_template();
        }

        ?>

            <?php
}
}?>
        </div>
        <?php get_sidebar();?>

        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<?php
//if (in_category('Culpa officiis')) {

?>

<?php

// $true_args = array(
//     'meta_query' => array(
//         array(
//             'key' => 'Mood',
//             'value' => 'Happy',
//         ),
//     ),
// );
// $true_query = new WP_Query($true_args);

// print_r($true_query->parse_query_vars($true_args));

//the_meta();

//print_r($true_query->get_post_custom());
//}
?>
<div class="container">
    <div class="row">
        <h5>Post meta data:</h5>
        <?php
$arr = get_post_custom();
foreach ($arr as $key => $fields) {
    if (!is_protected_meta($key, 'post')) {
        print_r("<strong>{$key}</strong> :");
        foreach ($fields as $field) {
            print_r($field . " ");
        }
        echo "<br>";
    }
}
?>
        <ul>
            <li><strong>Director:</strong> <?php the_field('movie_director');?></li>
            <li><strong>Release Year:</strong> <?php the_field('release_year');?></li>
            <li><strong>Movie Rating:</strong> <?php the_field('movie_rating');?>/10</li>
        </ul>
    </div>
</div>

<?php get_footer();?>