<?php
/*
Plugin Name: Gif not found
Plugin URI: https://motoriders.fr/
Description: Display a gif on the 404 page
Author: Bruuuuuh
Version: 1.0
Author URI: https://motoriders.fr/
*/
function default_short_code(){
  echo "<h1>Ton père la saucisse</h1>";
  // return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
}

add_shortcode('gif_not_found', '<h1>Weeeeshshhshshshshsh</h1>');
// require(plugin_dir_path(__FILE__).'shortcode.php');
