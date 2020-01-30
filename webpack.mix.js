let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


mix.styles([
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/fonts/font-awesome.min.css',
    'resources/assets/fonts/icon-font.min.css',
    'resources/assets/css/libs/animate.css',
    'resources/assets/css/libs/hamburgers.min.css',
    'resources/assets/css/libs/select2.min.css',
    'resources/assets/css/libs/login/util.css',
    'resources/assets/css/libs/login/main.css',

], 'public/css/adminlogin.css');

mix.styles([
    'resources/assets/css/libs/bootstrap.min.css',
    'resources/assets/fonts/font-awesome.min.css',
    'resources/assets/fonts/icon-font.min.css',
    'resources/assets/fonts/material-design-iconic-font.min.css',
    'resources/assets/css/libs/animate.css',
    'resources/assets/css/libs/hamburgers.min.css',
    'resources/assets/css/libs/animsition.min.css',
    'resources/assets/css/libs/select2.min.css',
    'resources/assets/css/libs/daterangepicker.css',
    'resources/assets/css/libs/register/util.css',
    'resources/assets/css/libs/register/main.css',

], 'public/css/adminregister.css');

mix.styles([
    'resources/assets/css/libs/all.min.css',
    'resources/assets/css/libs/tempusdominus-bootstrap-4.min.css',
    'resources/assets/css/libs/icheck-bootstrap.min.css',
    'resources/assets/css/libs/jqvmap.min.css',
    'resources/assets/css/libs/adminlte.min.css',
    'resources/assets/css/libs/OverlayScrollbars.min.css',
    'resources/assets/css/libs/bootstrap-datepicker.min.css',
    'resources/assets/css/libs/summernote-bs4.css',

], 'public/css/dashboard.css');

mix.scripts([
    'resources/assets/js/libs/jquery-3.2.1.min.js',
    'resources/assets/js/libs/popper.js',
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/select2.min.js',
    'resources/assets/js/libs/login/main.js',
    
], 'public/js/adminlogin.js');

mix.scripts([
    'resources/assets/js/libs/jquery-3.2.1.min.js',
    'resources/assets/js/libs/animsition.min.js',
    'resources/assets/js/libs/popper.js',
    'resources/assets/js/libs/bootstrap.min.js',
    'resources/assets/js/libs/select2.min.js',
    'resources/assets/js/libs/moment.min.js',
    'resources/assets/js/libs/daterangepicker.js',
    'resources/assets/js/libs/countdowntime.js',
    'resources/assets/js/libs/register/main.js',
    
], 'public/js/adminregister.js');

mix.scripts([
    'resources/assets/js/libs/jquery.min.js',
    'resources/assets/js/libs/jquery-ui.min.js',
    'resources/assets/js/libs/bootstrap.bundle.min.js',
    'resources/assets/js/libs/Chart.min.js',
    'resources/assets/js/libs/sparkline.js',
    'resources/assets/js/libs/jquery.vmap.min.js',
    'resources/assets/js/libs/jquery.vmap.usa.js',
    'resources/assets/js/libs/jquery.knob.min.js',
    'resources/assets/js/libs/moment.min.js',
    'resources/assets/js/libs/bootstrap-datepicker.min.js',
    'resources/assets/js/libs/tempusdominus-bootstrap-4.min.js',
    'resources/assets/js/libs/summernote-bs4.min.js',
    'resources/assets/js/libs/jquery.overlayScrollbars.min.js',
    'resources/assets/js/libs/adminlte.js',
    
], 'public/js/dashboard.js');