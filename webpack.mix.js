const mix = require('laravel-mix');
const minifier = require('minifier');


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

mix
    .scripts([
		'resources/js/navigation.js',
		'resources/js/countdown.js',
		'resources/js/init.js'
	], 'public/js/app.js');
mix
   .js('resources/js/maps.js', 'public/js/')
   .js('resources/js/vendor/bootstrap.js', 'public/js/')
   .sass('resources/sass/app.scss', 'public/css', {
       precision: 5,
       sourceComments: true
   }).sourceMaps();
mix.copyDirectory('resources/img', 'public/img');

mix.then(() => {
	minifier.minify('public/css/app.css'),
		minifier.minify('public/js/app.js'),
		minifier.minify('public/js/maps.js'),
		minifier.minify('public/js/bootstrap.js')
})
