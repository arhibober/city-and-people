<article class="not-found">
    <?php if (current_user_can('edit_posts')): ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php _e('Нет записей для отображения.', '');?></h1>
    </header>
    <div class="entry-content">
        <p><?php printf(__('Готовы опубликовать свою первую запись? <a href="%s">Тогда перейдите по этой ссылке.</a>.'), admin_url('post-new.php'));?>
        </p>
    </div><!-- .entry-content -->
    <?php else: ?>
    <header class="entry-header">
        <h1 class="entry-title"><?php _e('Ничего не найдено');?></h1>
    </header>
    <div class="entry-content">
        <p><?php _e('Ничего не найдено, воспользуйтесь поиском.');?></p>
        <?php get_search_form();?>
    </div><!-- .entry-content -->
    <?php endif;?>
</article>