let mix = require('laravel-mix');

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

// SASS
mix.sass('resources/assets/sass/front/src/main.scss', 'public/css').options({
        processCssUrls: false
    })
    .sass('resources/assets/sass/front/src/ie8.scss', 'public/css')
    .sass('resources/assets/sass/front/src/ie9.scss', 'public/css')
    .copyDirectory('resources/assets/sass/front/fonts', 'public/fonts')
    .copyDirectory('resources/assets/sass/front/src/images', 'public/css/images');

// JS
mix.copyDirectory('resources/assets/js/front', 'public/js');
