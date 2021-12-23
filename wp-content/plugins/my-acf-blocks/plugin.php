<?php
/**
 * Plugin Name: My ACF Block
 * Description: Add block Summery using ACF.
 * Version:.... 1.0.0
 */

include dirname(__file__) . "\My_ACF_Block.php";

//if (function_exists('acf_register_block_type')) {
add_action('acf/init', [new My_Acf_Block(), 'mab_register_acf_block_types']);
//}