<?php
function default_short_code(){
  echo "<h1>Ton père la saucisse</h1>";
  // return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
}

add_shortcode('gif_not_found', 'default_short_code');
