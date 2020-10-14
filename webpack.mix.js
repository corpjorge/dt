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

mix.js('resources/js/material-dashboard.js', 'public/material/js/')
    .sass('resources/sass/material-dashboard.scss', 'public/material/css')
    .scripts([
      'resources/js/core/jquery.min.js',
      'resources/js/core/popper.min.js',
      'resources/js/core/bootstrap-material-design.min.js',
      'resources/js/plugins/perfect-scrollbar.jquery.min.js',
      'resources/js/plugins/moment.min.js',
      'resources/js/plugins/sweetalert2.js',
      'resources/js/plugins/jquery.bootstrap-wizard.js',
      'resources/js/plugins/bootstrap-selectpicker.js',
      'resources/js/plugins/bootstrap-datetimepicker.min.js',
      'resources/js/plugins/jquery.dataTables.min.js',
      'resources/js/plugins/bootstrap-tagsinput.js',
      'resources/js/plugins/jasny-bootstrap.min.js',
      'resources/js/plugins/fullcalendar.min.js',
      'resources/js/plugins/jquery-jvectormap.js',
      'resources/js/plugins/nouislider.min.js',
      'resources/js/plugins/arrive.min.js',
      'resources/js/plugins/chartist.min.js',
      'resources/js/plugins/bootstrap-notify.js'
    ], 'public/material/js/all.js');
