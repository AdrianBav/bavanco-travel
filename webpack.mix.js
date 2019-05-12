const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Front End
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Styles
mix.sass('resources/sass/front/src/main.scss', 'public/css/front.css').options({
        processCssUrls: false
    })
    .sass('resources/sass/front/src/ie8.scss', 'public/css/ie')
    .sass('resources/sass/front/src/ie9.scss', 'public/css/ie')
    .copyDirectory('resources/sass/front/fonts', 'public/fonts')
    .copyDirectory('resources/sass/front/src/images', 'public/css/images');

// Scripts
mix.copy('resources/js/front/main-gallery.js', 'public/js/main-gallery.js')
    .copy('resources/js/front/camera-gallery.js', 'public/js/camera-gallery.js')
    .copy('resources/js/front/ie/html5shiv.js', 'public/js/ie/html5shiv.js')
    .copy('resources/js/front/ie/respond.js', 'public/js/ie/respond.js')
    .scripts([
        'resources/js/front/vendor/jquery-1.11.3.js',
        'resources/js/front/vendor/jquery.poptrox.js',
        'resources/js/front/vendor/skel.js',
        'resources/js/front/vendor/util.js'
    ], 'public/js/vendor.js');


/*
 |--------------------------------------------------------------------------
 | Back End
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/back/app.js', 'public/js/back.js')
   .sass('resources/sass/back/app.scss', 'public/css/back.css');
