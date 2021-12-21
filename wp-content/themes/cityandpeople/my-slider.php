<?php
/*function my_register_blocks()
{

echo " gyduri: " . get_template_directory_uri() . '/blocks/slider/slider.php';
// check function exists.
if (function_exists('acf_register_block_type')) {

// register a testimonial block.
acf_register_block_type(array(
'name' => 'slider',
'title' => __('Slider'),
'description' => __('A custom slider block.'),
'render_template' => get_template_directory_uri() . '/blocks/slider/slider.php',
'category' => 'formatting',
'icon' => 'images-alt2',
'align' => 'full',
'enqueue_assets' => function () {
wp_enqueue_style('slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
wp_enqueue_style('slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');
wp_enqueue_script('slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

wp_enqueue_style('block-slider', get_template_directory_uri() . '/blocks/slider/slider.min.css', array(), '1.0.0');
wp_enqueue_script('block-slider', get_template_directory_uri() . '/blocks/slider/slider.min.js', array(), '1.0.0', true);
},
));
}
}*/

function mab_register_acf_block_types()
{
    acf_register_block_type([
        'name' => 'summery',
        'title' => __('Summery'),
        'description' => __('People and object decription.'),
        'render_template' => dirname(__file__) . '/blocks/summery/summery.php',
        'category' => 'formatting',
        'icon' => 'spreadsheet',
        //'enqueue_style' => plugin_dir_url(__FILE__) . '/blocks/summery/summery.css',
    ]);
}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'mab_register_acf_block_types');
}
