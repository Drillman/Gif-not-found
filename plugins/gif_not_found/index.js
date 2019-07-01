'use strict';

const GifNotFoundSlider = {
    props: {
        dataId: {
            type: String,
            default: 'gif_not_found_slider_data'
        }
    },
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
            const tag = document.getElementById(this.dataId).dataset.tag || 'cat';

            fetch(this.giphy.api.endpoint + tag).then(function(response) {
                if (response.ok) {
                    return response.json();
                }

                throw new Error('Impossible de charger le GIF.');
            }).then((data) => {
                console.log(data.data);
                const image = new Image();
                image.src = data.data.images.downsized.url;

                image.addEventListener('load', () => {
                    this.giphy.image.url = image.src;
                });

            }).catch(function(error) {
                console.error(error); 
            });
        }
    },

    mounted() {
        const gifNotFoundParameters = document.getElementById(this.dataId).dataset;

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
    const gifNotFoundSlider = document.getElementById('gif_not_found_slider');

    if (gifNotFoundSlider instanceof HTMLElement) {
        new Vue({
            el: `#${gifNotFoundSlider.id}`,
            components: {
                GifNotFoundSlider
            },
            template: `
                <gif-not-found-slider data-id='gif_not_found_slider_data' />
            `
        });
    }
    
    const gifNotFoundSliderWidget = document.getElementById('gif_not_found_slider_widget');

    if (gifNotFoundSliderWidget instanceof HTMLElement) {
        new Vue({
            el: `#${gifNotFoundSliderWidget.id}`,
            components: {
                GifNotFoundSlider
            },
            template: `
                <gif-not-found-slider data-id='gif_not_found_slider_widget_data' />
            `
        });
    }
});
