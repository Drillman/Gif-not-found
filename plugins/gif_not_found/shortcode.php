<?php
<<<<<<< HEAD
function default_short_code(){
  return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
=======
function default_short_code()
{
    echo "<h1>Ton père la saucisse</h1>";
    // return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
>>>>>>> 1cc2790dece166a290dabb25aa781d16bdc7b22c
}

add_shortcode('gif_not_found', 'default_short_code');
