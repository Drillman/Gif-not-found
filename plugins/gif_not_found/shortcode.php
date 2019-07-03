<?php
function default_short_code()
{
    return '<img src="https://www.kizoa.fr/img/e8nZC.gif" alt="Bruuuuuh">';
}

add_shortcode('gif_not_found', 'default_short_code');
add_shortcode('gif_not_found_slider', 'gif_not_found_slider');

function gif_not_found_slider($attributes)
{
    $attributes = shortcode_atts([
        'tag' => 'cat',
        'width' => '30vh',
        'height' => '30vh',
        'name' => 'slide-left'   
    ], $attributes);
    
    return "<div id='gif_not_found_slider'></div><input id='gif_not_found_slider_data' type='hidden' data-tag='{$attributes["tag"]}' data-width='{$attributes["width"]}' data-height='{$attributes["height"]}' data-name='{$attributes["name"]}'/>";
}
