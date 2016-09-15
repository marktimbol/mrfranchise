const elixir = require('laravel-elixir');
const bowersPath = '../../../bower_components/';

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

elixir(mix => {
    mix.sass('app.scss', 'resources/assets/css/app.css')
    	.styles([
        bowersPath + 'bootstrap/dist/css/bootstrap.css',
    		'app.css'
    	], 'public/css/app.css')

      .scripts([
        bowersPath + 'jquery/dist/jquery.js',
        bowersPath + 'bootstrap/dist/js/bootstrap.js',
        'app.js'
      ], 'public/js/app.js')

      .styles([
        bowersPath + 'video.js/dist/video-js.css',
      ], 'resources/assets/css/brand/video.css')

   	  .scripts([
   			bowersPath + 'video.js/dist/ie8/videojs-ie8.js',
   			bowersPath + 'video.js/dist/video.js',
   	    	'video.js',
   		], 'resources/assets/js/brand/video.js')

      .styles([
        bowersPath + 'flexslider/flexslider.css',
      ], 'resources/assets/css/brand/carousel.css')

      .scripts([
        bowersPath + 'flexslider/jquery.flexslider.js',
        'carousel.js'
      ], 'resources/assets/js/brand/carousel.js')

      .scripts([
          'map.js',
      ], 'resources/assets/js/brand/map.js')

      .styles([
        'brand/video.css',
        'brand/carousel.css',
      ], 'public/css/brand.css')

      .scripts([
        'brand/carousel.js',
        'brand/video.js',
        'brand/map.js',
      ], 'public/js/brand.js')

      .copy('bower_components/bootstrap/dist/fonts', 'public/build/css/fonts')
      .copy('bower_components/flexslider/fonts', 'public/build/css/fonts')
       
       .version([
       		'public/css/app.css',
          'public/js/app.js',
          'public/css/brand.css',
       		'public/js/brand.js',
       ]);
});