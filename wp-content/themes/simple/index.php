<?php get_header();
get_sidebar();?>
<div class="site-content">
    <?php if (have_posts()): ?>
    <!-- Начало цикла WordPress -->
    <?php while (have_posts()): the_post();?>
    <?php get_template_part('template-parts/content/content');?>
    <?php endwhile;?>
    <!-- Конец цикла WordPress -->
    <?php if ($wp_query->max_num_pages > 1): ?>
    <nav id="nav-below">
        <div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav"><</span> Предыдущая запись'));?>
        </div>
        <div class="nav-next"><?php previous_posts_link(__('следующая запись <span class="meta-nav">></span>'));?>
        </div>
    </nav><!-- #nav-below .navigation -->
    <?php endif;?>
    <!-- Записей для отображения нет, тогда выводим сообщение об этом -->
    <?php else: ?>
    <?php get_template_part('template-parts/content/content', 'none');?>
    <!--.not-found -->
    <?php endif; // конец have_posts() проверки ?>
</div><!-- .site-content -->
<?php get_footer();?>