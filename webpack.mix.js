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
    
    .styles(
        [
            //'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'resources/assets/css/home.css',
            'resources/assets/css/mainv3.css',
        ],
        'public/css/style.min.css'
    )
    
    .copyDirectory('resources/assets/images', 'public/images');
