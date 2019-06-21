'use strict';

const GifNotFoundSlider = {
    template: `
        <h1>
            Gif not found slider
        </h1>
    `
};

window.addEventListener('load', function() {
    new Vue({
        el: '#gif_not_found_slider',
        render: h => h(GifNotFoundSlider)
    });
});