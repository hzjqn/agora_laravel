const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
   //.react('resources/js/app.js', 'public/js')
   .js('resources/js/main.js', 'public/js')
   .js('resources/js/solid.js', 'public/js')
   .js('resources/js/article.js', 'public/js')
   .js('resources/js/editor.js', 'public/js')
   .js('resources/js/mainfeed.js', 'public/js')
   .js('resources/js/comments.js', 'public/js')
   .js('resources/js/navbar.js', 'public/js')
   .sass('resources/sass/app.sass', 'public/css').disableSuccessNotifications();
