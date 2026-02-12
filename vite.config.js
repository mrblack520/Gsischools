import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import path from 'path';

export default defineConfig({
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
            '@': path.resolve(__dirname, 'resources'),
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/style.css',
                'resources/js/app.js',
                'resources/js/script.js',
                'resources/js/partials/register-script.js',
                'resources/js/partials/university-form.js',
                'resources/js/partials/profession-form.js',
                'resources/js/partials/university-profession-form.js',
                'resources/js/partials/optional-profession-form.js',
                'resources/js/partials/optional-university-form.js',
                'resources/js/partials/optional-university-profession-form.js'
            ],
            refresh: true,
        }),
        vue(),
    ],
});
