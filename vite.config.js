import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    plugins: [
        laravel({
            input: [
                "resources/scss/normalize.scss",
                "resources/scss/app.scss",
                "resources/js/app.js",
            ],
            refresh: [{
                paths: [
                    // 'resources/scss/**/**.scss', 
                    "resources/js/**/**.js"
                ],
            }],
        }),

    ]
});
