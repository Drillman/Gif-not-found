<?php
/*
Plugin Name: Gif not found
Plugin URI: https://motoriders.fr/
Description: Display a gif on the 404 page
Author: Bruuuuuh
Version: 1.0
Author URI: https://motoriders.fr/
*/
function default_short_code()
{
    echo "<h1>Ton père la saucisse</h1>";
    // return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
}

add_shortcode('gif_not_found', '<h1>Weeeeshshhshshshshsh</h1>');
// require(plugin_dir_path(__FILE__).'shortcode.php');


add_action('wp_enqueue_scripts', 'gif_not_found_scripts');

function gif_not_found_scripts()
{
    wp_enqueue_script('gif_not_found_script', plugins_url('/index.js', __FILE__));
    wp_enqueue_script('gif_not_found_vuejs', plugins_url('/vue.js', __FILE__));
}
