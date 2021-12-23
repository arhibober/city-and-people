<?php
class My_Acf_Block
{
    public function __construct()
    {
    }

    public function mab_register_acf_block_types()
    {
        if (function_exists('acf_register_block_type')) {
            acf_register_block_type(
                [
                    'name' => 'summery',
                    'title' => __('Summery'),
                    'description' => __('People and object decription.'),
                    'render_template' => dirname(__file__) . '/blocks/summery/summery.php',
                    'category' => 'formatting',
                    'icon' => 'spreadsheet',
                    'enqueue_style' => plugin_dir_url(__FILE__) . '/blocks/summery/summery.css',
                ]
            );
        }

    }
}