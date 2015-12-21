var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/* FRONT */
elixir(function(mix) {

    /* Theme CSS */
    mix.styles([
        '../global/plugins/font-awesome/css/font-awesome.min.css',
        '../global/plugins/simple-line-icons/simple-line-icons.min.css',
        '../global/plugins/bootstrap/css/bootstrap.min.css',
        '../global/plugins/uniform/css/uniform.default.css',
        '../global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'
    ], 'public/css/front/main.css');

    /* Global CSS */
    mix.styles([
        '../global/css/components.min.css',
        '../global/css/plugins.min.css',
        '../global/css/custom.css'
    ], 'public/css/front/global.css');

    /* Plugin CSS */
    mix.styles([
        '../global/plugins/bootstrap-toastr/toastr.min.css',
        '../global/plugins/select2/css/select2.min.css',
        '../global/plugins/select2/css/select2-bootstrap.min.css'
    ], 'public/css/front/plugins.css');

    /* Layout CSS */
    mix.styles([
        '../layouts/layout3/css/layout.min.css',
        '../layouts/layout3/css/themes/default.min.css',
        '../layouts/layout3/css/custom.min.css'
    ], 'public/css/front/layout.css');

    /* Theme Scripts */
    mix.scripts([
        '../global/plugins/jquery.min.js',
        '../global/plugins/bootstrap/js/bootstrap.min.js',
        '../global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        '../global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        '../global/plugins/jquery.blockui.min.js',
        '../global/plugins/uniform/jquery.uniform.min.js',
        '../global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'
    ], 'public/js/front/main.js');

    /* Global Scripts */
    mix.scripts([
        '../global/scripts/app.min.js'
    ], 'public/js/front/global.js');

    /* Plugin Scripts */
    mix.scripts([
        '../global/plugins/jquery-validation/js/jquery.validate.min.js',
        '../global/plugins/jquery-validation/js/additional-methods.min.js',
        '../global/plugins/morris/morris.min.js',
        '../global/plugins/counterup/jquery.waypoints.min.js',
        '../global/plugins/counterup/jquery.counterup.min.js',
        '../global/plugins/bootstrap-toastr/toastr.min.js',
        '../global/plugins/select2/js/select2.full.min.js',
        '../global/plugins/jquery.countdown/jquery.countdown.min.js'
    ], 'public/js/front/plugins.js');

    /* Layout Scripts */
    mix.scripts([
        '../layouts/layout3/scripts/layout.min.js',
        '../layouts/layout3/scripts/demo.min.js'
    ], 'public/js/front/layout.js');

});

/* ADMIN */
elixir(function(mix) {

    /* Theme CSS */
    mix.styles([
        '../global/plugins/font-awesome/css/font-awesome.min.css',
        '../global/plugins/simple-line-icons/simple-line-icons.min.css',
        '../global/plugins/bootstrap/css/bootstrap.min.css',
        '../global/plugins/uniform/css/uniform.default.css',
        '../global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'
    ], 'public/css/admin/main.css');

    /* Global CSS */
    mix.styles([
        '../global/css/components.min.css',
        '../global/css/plugins.min.css',
        '../global/css/admin_custom.css'
    ], 'public/css/admin/global.css');

    /* Plugin CSS */
    mix.styles([
        '../global/plugins/bootstrap-toastr/toastr.min.css',
        '../global/plugins/select2/css/select2.min.css',
        '../global/plugins/select2/css/select2-bootstrap.min.css',
        '../global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        '../global/plugins/bootstrap-summernote/summernote.css'
    ], 'public/css/admin/plugins.css');

    /* Layout CSS */
    mix.styles([
        '../layouts/layout/css/layout.min.css',
        '../layouts/layout/css/themes/default.min.css',
        '../layouts/layout/css/custom.min.css'
    ], 'public/css/admin/layout.css');

    /* Theme Scripts */
    mix.scripts([
        '../global/plugins/jquery.min.js',
        '../global/plugins/bootstrap/js/bootstrap.min.js',
        '../global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        '../global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        '../global/plugins/jquery.blockui.min.js',
        '../global/plugins/uniform/jquery.uniform.min.js',
        '../global/plugins/bootstrap-switch/js/bootstrap-switch.min.js'
    ], 'public/js/admin/main.js');

    /* Global Scripts */
    mix.scripts([
        '../global/scripts/app.min.js'
    ], 'public/js/admin/global.js');

    /* Plugin Scripts */
    mix.scripts([
        '../global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        '../global/plugins/bootstrap-summernote/summernote.min.js'
    ], 'public/js/admin/plugins.js');

    /* Layout Scripts */
    mix.scripts([
        '../layouts/layout/scripts/layout.min.js',
        '../layouts/layout/scripts/demo.min.js'
    ], 'public/js/admin/layout.js');

});
