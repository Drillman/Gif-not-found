<?php

add_shortcode('gif_not_found_slider', 'gif_not_found_slider');

// generate the gif slider
function gif_not_found_slider($attributes)
{
    $attributes = shortcode_atts([
        'tag' => 'cat',
        'width' => '30vh',
        'height' => '30vh'
    ], $attributes);

    return "<div id='gif_not_found_slider'></div><input id='gif_not_found_slider_data' type='hidden' data-tag='{$attributes["tag"]}' data-width='{$attributes["width"]}' data-height='{$attributes["height"]}' />";
}
