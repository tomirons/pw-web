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
        'font-awesome/css/font-awesome.min.css',
        'simple-line-icons/simple-line-icons.min.css',
        'bootstrap/css/bootstrap.min.css',
        'uniform/css/uniform.default.css',
        'bootstrap-switch/css/bootstrap-switch.min.css'
    ], 'public/css/front/main.css', 'resources/assets/vendor');

    /* Global CSS */
    mix.styles([
        'front/components.min.css',
        'front/plugins.min.css',
        'front/custom.css'
    ], 'public/css/front/global.css');

    /* Plugin CSS */
    mix.styles([
        'bootstrap-toastr/toastr.min.css',
        'select2/css/select2.min.css',
        'select2/css/select2-bootstrap.min.css'
    ], 'public/css/front/plugins.css', 'resources/assets/vendor');

    /* Layout CSS */
    mix.styles([
        'front/layout.min.css',
        'front/default.min.css'
    ], 'public/css/front/layout.css');

    /* Theme Scripts */
    mix.scripts([
        'jquery.min.js',
        'bootstrap/js/bootstrap.min.js',
        'bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'jquery-slimscroll/jquery.slimscroll.min.js',
        'jquery.blockui.min.js',
        'uniform/jquery.uniform.min.js',
        'bootstrap-switch/js/bootstrap-switch.min.js'
    ], 'public/js/front/main.js', 'resources/assets/vendor');

    /* Global Scripts */
    mix.scripts([
        'app.min.js'
    ], 'public/js/front/global.js');

    /* Plugin Scripts */
    mix.scripts([
        'jquery-validation/js/jquery.validate.min.js',
        'jquery-validation/js/additional-methods.min.js',
        'morris/morris.min.js',
        'counterup/jquery.waypoints.min.js',
        'counterup/jquery.counterup.min.js',
        'bootstrap-toastr/toastr.min.js',
        'select2/js/select2.full.min.js',
        'jquery.countdown/jquery.countdown.min.js'
    ], 'public/js/front/plugins.js', 'resources/assets/vendor');

    /* Layout Scripts */
    mix.scripts([
        'front/layout.min.js'
    ], 'public/js/front/layout.js');

});

/* ADMIN */
elixir(function(mix) {

    /* Theme CSS */
    mix.styles([
        'font-awesome/css/font-awesome.min.css',
        'simple-line-icons/simple-line-icons.min.css',
        'bootstrap/css/bootstrap.min.css',
        'uniform/css/uniform.default.css',
        'bootstrap-switch/css/bootstrap-switch.min.css'
    ], 'public/css/admin/main.css', 'resources/assets/vendor');

    /* Global CSS */
    mix.styles([
        'admin/components.min.css',
        'admin/plugins.min.css',
        'admin/custom.css'
    ], 'public/css/admin/global.css');

    /* Plugin CSS */
    mix.styles([
        'bootstrap-toastr/toastr.min.css',
        'select2/css/select2.min.css',
        'select2/css/select2-bootstrap.min.css',
        'bootstrap-switch/css/bootstrap-switch.min.css',
        'bootstrap-summernote/summernote.css'
    ], 'public/css/admin/plugins.css', 'resources/assets/vendor');

    /* Layout CSS */
    mix.styles([
        'admin/layout.min.css',
        'admin/default.min.css'
    ], 'public/css/admin/layout.css');

    /* Theme Scripts */
    mix.scripts([
        'jquery.min.js',
        'bootstrap/js/bootstrap.min.js',
        'bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'jquery-slimscroll/jquery.slimscroll.min.js',
        'jquery.blockui.min.js',
        'uniform/jquery.uniform.min.js',
        'bootstrap-switch/js/bootstrap-switch.min.js'
    ], 'public/js/admin/main.js', 'resources/assets/vendor');

    /* Global Scripts */
    mix.scripts([
        'app.min.js'
    ], 'public/js/admin/global.js');

    /* Plugin Scripts */
    mix.scripts([
        'bootstrap-switch/js/bootstrap-switch.min.js',
        'bootstrap-summernote/summernote.min.js',
        'jquery-inputmask/jquery.inputmask.bundle.min.js',
        'counterup/jquery.waypoints.min.js',
        'counterup/jquery.counterup.min.js',
        'jquery.input-ip-address-control-1.0.min.js'
    ], 'public/js/admin/plugins.js', 'resources/assets/vendor');

    /* Layout Scripts */
    mix.scripts([
        'admin/layout.min.js'
    ], 'public/js/admin/layout.js');

});
