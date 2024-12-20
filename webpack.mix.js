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

mix.js([
    'resources/js/app.js'
], 'public/js')
    .sourceMaps()
    .version();

mix.styles([
    'resources/css/app.css'
], 'public/css/app.min.css')
    .sourceMaps()
    .version();

mix.css('resources/css/signinup.css', 'public/css/signinup.min.css')
    .sourceMaps()
    .version();

