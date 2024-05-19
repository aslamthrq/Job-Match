import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js',
            'resources/css/styleLandingPage.css',
            'resources/css/menu.css',
            'resources/js/counterup.js',
            'resources/js/swiper-bundle.min.js',
            'resources/js/fslightbox.js',
            'resources/js/jos.min.js',
            'resources/js/menu.js',
            'resources/js/main.js',
            'resources/fonts/stylesheet.css',
            ],
            refresh: true,
        }),
    ],
});
