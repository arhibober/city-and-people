<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <?php wp_head();?>

</head>

<body <?php body_class();?>>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <?php
if (has_nav_menu('primary')) {

    // wp_nav_menu(array(
    //     'theme_location' => 'primary',
    //     'depth' => 3,
    //     'container' => false,
    //     'menu_class' => 'navbar-nav ml-auto',
    //     'fallback_cb' => false,
    //     'walker' => new Bootkit_Nav_Walker(),
    // ));
    wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 3,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
}
?>
            </div>
        </div>
        <!-- Top Social ============================================= -->
        <div id="top-social">
            <ul>
                <?php

if (get_theme_mod('bootkit_facebook_handle')) {
    ?>
                <li><a href="<?php echo get_theme_mod('bootkit_facebook_handle'); ?>" target="_blank"><i
                            class="fa fa-facebook"></i></a>
                </li><?php
}
if (get_theme_mod('bootkit_instagram_handle')) {
    ?>
                <li><a href="<?php echo get_theme_mod('bootkit_instagram_handle'); ?>" target="_blank"><i
                            class="fa fa-instagram"></i></a>
                </li><?php
}
if (get_theme_mod('bootkit_email')) {
    ?><li><a href="mailto:<?php echo get_theme_mod('bootkit_email'); ?>"><i
                            class="fa fa-envelope"></i><?php echo get_theme_mod('bootkit_email'); ?></a></li><?php
}

if (get_theme_mod('bootkit_phone_number')) {
    ?><li><a href="tel:+<?php echo get_theme_mod('bootkit_phone_number'); ?>"><i
                            class="fa fa-phone"></i>+<?php echo get_theme_mod('bootkit_phone_number'); ?></a></li><?php
}
?>
            </ul>
        </div><!-- #top-social end -->
    </nav>


    <?php if (is_front_page()) {?>
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->

                <div class="carousel-item active">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/slide1.jpg" class="d-block w-100"
                        alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->

                <div class="carousel-item">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/slide2.jpg" class="d-block w-100"
                        alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->

                <div class="carousel-item">
                    <img src="<?php bloginfo('template_directory')?>/assets/images/slide3.jpg" class="d-block w-100"
                        alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

<!-- ----------------WP_Bootstrap_Navwalker------------------------ -->
<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Navbar</a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 3,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>
<!-- -------------------------------------------------- -->

    <?php }?>
    <?php //breadcrumbs();?>
    <div class="container">
        <?php if (get_theme_mod('bootkit_header_show_search')) {?>
        <!-- Top Search  ============================ -->
        <div class="col-md-4 mt-4 mb-2 pl-0">
            <form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">

                <div class="input-group">
                    <input type="text" class="search-field form-control" name="s" placeholder="Search"
                        value="<?php echo get_search_query(); ?>">

                    <button type="submit" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div><!-- #top-search end -->
        <?php }?>
    </div>