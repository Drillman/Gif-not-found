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


global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}options WHERE option_id = 1", OBJECT );
