<?php
/**
 * Plugin Name: My ACF Block
 * Description: Add block Summery using ACF.
 * Version:.... 1.0.0
 */

function mab_register_acf_block_types()
{
    acf_register_block_type([
        'name' => 'summery',
        'title' => __('Summery'),
        'description' => __('People and object decription.'),
        'render_template' => dirname(__file__) . '/blocks/summery/summery.php',
        'category' => 'formatting',
        'icon' => 'spreadsheet',
        'enqueue_style' => plugin_dir_url(__FILE__) . '/blocks/summery/summery.css',
    ]);
}

if (function_exists('acf_register_block_type')) {
    add_action('acf/init', 'mab_register_acf_block_types');
}
