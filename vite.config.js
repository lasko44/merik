import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

import fs from 'fs';
import { resolve } from 'path';
import { homedir } from 'os';

let host = 'merik.test';
let homeDir = homedir();

let serverConfig = {};

if (homeDir) {
    serverConfig = {
        https: {
            key: fs.readFileSync(resolve(homeDir, `.config/valet/Certificates/${host}.key`)),
            cert: fs.readFileSync(resolve(homeDir, `.config/valet/Certificates/${host}.crt`)),
        },
        hmr: {
            host: 'merik.test',
        },
        host: 'merik.test',
    };
}

export default defineConfig({
    resolve:{
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    },
    plugins: [
        laravel(['resources/js/app.js']),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],

    server: serverConfig,
});
