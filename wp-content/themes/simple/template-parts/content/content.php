<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <?php if (is_sticky() && is_home() && !is_paged()): ?>
    <div class="featured-post">
        <?php _e('Избранная запись');?>
    </div>
    <?php endif;?>
    <header class="entry-header">
        <!-- Если это запись -->
        <?php if (is_single() || is_sticky()): ?>
        <h1 class="entry-title"><?php the_title();?></h1>
        <?php else: ?>
        <h1 class="entry-title">
            <a href="<?php the_permalink();?>" rel="bookmark"><?php echo get_the_title(); ?></a>
        </h1>
        <?php endif;?>
        <a href="<?php the_permalink();?> " title=" <?php the_title();?> ">
            <?php the_post_thumbnail('thumbnail');?></a>
        <!-- Вывод рубрик и тегов -->
        <?php echo get_the_category_list(); ?>
        <?php echo get_the_tag_list('', ', '); ?>
    </header>
    <!-- .entry-header -->
    <?php if (is_search()): // Показывать только краткое описание записи, если это результаты поиска?>
    <div class="entry-summary">
        <?php the_excerpt();?>
    </div><!-- .entry-summary -->
    <?php else: ?>
    <div class="entry-content">
        <?php the_content(__('Читать дальше... <span class="meta-nav">></span>'));?>
        <?php wp_link_pages(array('before' => '<div class="page-links">' . __('Страницы:'), 'after' => '</div>'));?>
    </div><!-- .entry-content -->
    <?php endif;?>
    <footer class="entry-meta">
        <?php printf(
    __('Эта запись была опубликована %1$s автором %2$s.'),
    esc_html(get_the_date()),
    esc_html(get_the_author())
);
?>
        <?php edit_post_link(__('Редактировать', ''), '<span class="edit-link">', '</span>');?>
    </footer><!-- .entry-meta -->
</article>
<!-- #post -->