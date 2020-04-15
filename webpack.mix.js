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
	.js('resources/js/navigation.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/reset.scss', 'public/css');

mix.styles([
	'public/css/app.css',
	'public/css/reset.css'],
	'public/css/all.css'
	);
mix.browserSync('127.0.0.1:8000');