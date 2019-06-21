<?php
/**
* Plugin Name: Gif not found
* Plugin URI: https://github.com/Drillman/Gif-not-found
* Description: Add gifs to your app!
* Version: 1.0
* Author: ESGI WordPress Team
* Author URI: https://github.com/Drillman/Gif-not-found
**/

add_action('wp_enqueue_scripts','gif_not_found_scripts');

function gif_not_found_scripts() {
    wp_enqueue_script( 'gif_not_found_script', plugins_url( '/index.js', __FILE__ ));
    wp_enqueue_script( 'gif_not_found_vuejs', plugins_url( '/vue.js', __FILE__ ));
}