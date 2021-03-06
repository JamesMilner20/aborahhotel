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

    // 'resources/css/blog-post.css',
    'resources/css/bootstrap.css',
    'resources/css/bootstrap.min.css',
    // 'resources/css/metisMenu.css',
    // 'resources/css/jquery.css',
    'resources/css/jquery-ui.min.css',
    'resources/css/bootstrap-grid.css',
    'resources/css/bootstrap-reboot.css',
    'resources/css/all.min.css',
    'resources/css/agency.css',
    // 'resources/css/sb-admin-2.css',
    'resources/css/styles.css'

],'public/css/libs.css');

mix.scripts([

    'resources/js/jquery-3.3.1.min.js',
    'resources/js/jquery-ui.js',
    'resources/js/mentisMenu.js',
    'resources/js/ab-admin.js',
    'resources/js/contact_me.js',
    'resources/js/jqBootstrapValidation.js',
    'resources/js/easing.min.js',
    'resources/js/bootstrap.bundle.js',
    // 'resources/js/bootstrap.js',
    'resources/js/scripts.js',
    'resources/js/agency.js'




],'public/js/libs.js');