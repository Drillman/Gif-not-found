<?php
/**
* Plugin Name: Gif not found
* Plugin URI: https://github.com/Drillman/Gif-not-found
* Description: Add gifs to your app!
* Version: 1.0
* Author: ESGI WordPress Team
* Author URI: https://github.com/Drillman/Gif-not-found
**/

global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}options WHERE option_id = 1", OBJECT );