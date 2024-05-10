import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    publicDir: './assets',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/scss/app.scss','resources/js/app.js'],
            refresh: true,
        }),
    ],
});
