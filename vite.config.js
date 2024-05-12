
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import  {copy}  from 'vite-plugin-copy.js';

export default defineConfig({
  publicDir: './assets',
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/scss/app.scss','resources/js/app.js'],
      refresh: true,
    }),

    //auto refresh blade file when change
    {
      name: 'blade',
      handleHotUpdate({ file, server }) {
          if (file.endsWith('.blade.php')) {
              server.ws.send({
                  type: 'full-reload',
                  path: '*',
              });
          }
      },
  },
//auto refresh blade file when change
    copy({ // Corrected function call
      targets: [
        {
          // Copy from "resource/assets" to "public/assets"
          src: 'resource/assets',
          dest: 'public/assets',
        },
      ],
    }),
  ],

});
