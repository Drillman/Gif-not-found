<?php
function default_short_code()
{
    return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
}

add_shortcode('gif_not_found', 'default_short_code');
add_shortcode('gif_not_found_slider', 'gif_not_found_slider');

function gif_not_found_slider()
{
    return '<div id="gif_not_found_slider"></div>';
}
