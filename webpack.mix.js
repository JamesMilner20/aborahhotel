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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');


mix.styles([

    'resources/css/agency.css',
    'resources/css/bootstrap.css',
    'resources/css/all.min.css',
    'resources/css/jquery-ui.min.css',
    'resources/css/jquery.css'

],'public/css/libs.css');

mix.scripts([

    'resources/js/bootstrap.js',
    'resources/js/easing.min.js',
    'resources/js/bootstrap.bundle.min.js',
    'resources/js/agency.js',
    'resources/js/contact_me.js',
    'resources/js/jqBootstrapValidation.js',
    'resources/js/jquery-3.3.1.min.js',
    'resources/js/jquery-ui.min.js'

],'public/js/libs.js');