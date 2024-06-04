import laravel from "laravel-vite-plugin";

// import { viteStaticCopy } from 'vite-plugin-static-copy';
import { defineConfig } from "vite";

export default defineConfig({

    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/scss/app.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
        // viteStaticCopy({
        //     targets: [
        //       {
        //         src: 'resources/webAssets/**',
        //         dest: '../webAssets'
        //       }
        //     ]
        //   }),

        //auto refresh blade file when change
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
        //auto refresh blade file when change



    ],

    // build: {
    //     copyPublicDir: true,
    // },
});
