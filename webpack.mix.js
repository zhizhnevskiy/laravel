const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
// ]);

mix.styles([
    'resources/bootstrap5/css/bootstrap.css',
    'resources/css/app.css'
], 'public/css/bootstrap.css');

mix.scripts([
    'resources/bootstrap5/js/bootstrap.js'
], 'public/js/bootstrap.js');

mix.copyDirectory('resources/bootstrap5/img', 'public/img');
