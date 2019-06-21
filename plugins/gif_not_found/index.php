<?php
/*
Plugin Name: Gif not found
Plugin URI: https://motoriders.fr/
Description: Display a gif on the 404 page
Author: Bruuuuuh
Version: 1.0
Author URI: https://motoriders.fr/
*/

require(plugin_dir_path(__FILE__).'shortcode.php');
require(plugin_dir_path(__FILE__).'settings.php');


add_action('wp_enqueue_scripts', 'gif_not_found_scripts');

function gif_not_found_scripts()
{
    wp_enqueue_script('gif_not_found_vuejs', plugins_url('/vue.js', __FILE__));
    wp_enqueue_script('gif_not_found_script', plugins_url('/index.js', __FILE__));
}
