const mix = require('laravel-mix');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const imageminMozjpeg = require('imagemin-mozjpeg');
const minifier = require('minifier');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const imageminPngcrush = require('imagemin-pngcrush');

// mix.webpackConfig({
// 	plugins: [
// 		new CopyWebpackPlugin([{
// 			from: 'resources/img',
// 			to: 'img' // Laravel mix will place this in 'public/img'
// 		}]),
// 		new ImageminPlugin({
// 			test: /\.(jpe?g|png|gif|svg)$/i,
// 			plugins: [
// 				imageminMozjpeg({
// 					quality: 80
// 				}),
// 				imageminPngcrush()
// 			]
// 		})
// 	]
// });

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

mix.scripts([
		'resources/js/navigation.js',
		'resources/js/maps.js',
		'resources/js/imageslider.js',
		'resources/js/init.js'
	], 'public/js/app.js')
	.js('resources/js/vendor/bootstrap.js', 'public/js/')
	.sass('resources/sass/app.scss', 'public/css', {
		outputStyle: 'nested'
	});


mix.then(() => {
	minifier.minify('public/css/app.css'),
		minifier.minify('public/js/app.js'),
		minifier.minify('public/js/bootstrap.js')
})
