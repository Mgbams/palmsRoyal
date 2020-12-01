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
    .js('resources/js/modernizr1-custom.js', 'public/js')
    .js('resources/js/gnmenu.js', 'public/js')

    .js('resources/js/header-effects-modernizr-custom.js', 'public/js')
    .js('resources/js/availability-calendar.js', 'public/js')

    .sass('resources/sass/app.scss', 'public/css')

    .sass('resources/sass/style1.scss', 'public/css')
    .sass('resources/sass/style2.scss', 'public/css')
    .sass('resources/sass/normalize.scss', 'public/css')
    
    .sass('resources/sass/header-effects-component.scss', 'public/css')
    .sass('resources/sass/pdf.scss', 'public/css')
    .sass('resources/sass/daterangepicker.scss', 'public/css')
    .sass('resources/sass/availability-calendar.scss', 'public/css')
    .sass('resources/sass/header-effects-normalize.scss', 'public/css');
    