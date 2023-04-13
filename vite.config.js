import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/adminlte.min.css',
                'resources/css/main.css',

                'resources/js/app.js',
                'resources/js/adminlte.js',
                'resources/js/vendors/bootstrap.bundle.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
