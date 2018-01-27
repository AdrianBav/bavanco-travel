let mix = require('laravel-mix');

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
mix.sass('resources/assets/sass/front/src/main.scss', 'public/css/front.css').options({
        processCssUrls: false
    })
    .sass('resources/assets/sass/front/src/ie8.scss', 'public/css/ie')
    .sass('resources/assets/sass/front/src/ie9.scss', 'public/css/ie')
    .copyDirectory('resources/assets/sass/front/fonts', 'public/fonts')
    .copyDirectory('resources/assets/sass/front/src/images', 'public/css/images');

// Scripts
mix.copy('resources/assets/js/front/main-gallery.js', 'public/js/main-gallery.js')
    .copy('resources/assets/js/front/camera-gallery.js', 'public/js/camera-gallery.js')
    .copy('resources/assets/js/front/ie/html5shiv.js', 'public/js/ie/html5shiv.js')
    .copy('resources/assets/js/front/ie/respond.js', 'public/js/ie/respond.js')
    .scripts([
        'resources/assets/js/front/vendor/jquery-1.11.3.js',
        'resources/assets/js/front/vendor/jquery.poptrox.js',
        'resources/assets/js/front/vendor/skel.js',
        'resources/assets/js/front/vendor/util.js'
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

mix.js('resources/assets/js/back/app.js', 'public/js/back.js')
   .sass('resources/assets/sass/back/app.scss', 'public/css/back.css');
