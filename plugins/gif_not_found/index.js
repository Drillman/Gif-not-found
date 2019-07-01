'use strict';

const GifNotFoundSlider = {
    data() {
        return {
            giphy: {
                api: {
                    endpoint: 'https://api.giphy.com/v1/gifs/random?api_key=Wk4vDI46cIETosiA8b71u8FoSqOSXqVN&tag='
                },
                image: {
                    url: '',
                    alt: '',
                    style: {
                        width: '30vw',
                        height: '30vh'
                    }
                }
            }
        };
    },

    methods: {
        loadGif() {
            const tag = document.getElementById('gif_not_found_tag').dataset.tag || 'cat';

            fetch(this.giphy.api.endpoint + tag).then(function(response) {
                if (response.ok) {
                    return response.json();
                }
            }).then((data) => {
                this.giphy.image.url = data.data.image_original_url;
                console.log(data.data.image_original_url);
            }).catch(function(error) {
                console.error(error); 
            });
        }
    },

    mounted() {
        const gifNotFoundParameters = document.getElementById('gif_not_found_tag').dataset;

        this.loadGif();
        this.giphy.image.style.width = gifNotFoundParameters.width || '30vw';
        this.giphy.image.style.height = gifNotFoundParameters.height || '30vh';
    },

    template: `
        <transition name='slide-left' mode='out-in' appear>
            <img
                @click='loadGif'
                :key='giphy.image.url'
                :src='giphy.image.url'
                :alt='giphy.image.alt'
                :style='giphy.image.style' />
        </transition>
    `
};

window.addEventListener('load', function() {
    new Vue({
        el: '#gif_not_found_slider',
        render: h => h(GifNotFoundSlider)
    });
});
