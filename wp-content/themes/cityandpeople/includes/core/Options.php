<?php
class Options
{
    public function __construct()
    {
    }
    public function options()
    {
        acf_add_options_page(
            [
                'page_title' => 'My options',
                'menu_title' => 'My options',
                'menu_slug' => 'my-options',
                'capability' => 'edit_posts',
                'redirect' => false,
            ]
        );
        the_field('Header logo', 'option');
        the_field('Footer logo', 'option');
        the_field('Contact phone', 'option');
    }
}