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
        bowersPath + 'gsap/src/uncompressed/TweenMax.js',
        'app.js'
      ], 'public/js/app.js')

      .styles([
        bowersPath + 'video.js/dist/video-js.css',
      ], 'public/css/video.css')

   	  .scripts([
   			bowersPath + 'video.js/dist/ie8/videojs-ie8.js',
   			bowersPath + 'video.js/dist/video.js',
   	    	'video.js',
   		], 'public/js/video.js')

      .styles([
        bowersPath + 'flexslider/flexslider.css',
      ], 'public/css/carousel.css')

      .scripts([
        bowersPath + 'flexslider/jquery.flexslider.js',
        'carousel.js'
      ], 'public/js/carousel.js')

      .scripts([
          'map.js',
      ], 'public/js/map.js')

      .scripts([
        'modernizr.custom.js',
        'classie.js',
        'uiMorphingButton_fixed.js',
        'morphing-button.js'
      ], 'public/js/morphing-button.js')

      .copy('bower_components/bootstrap/dist/fonts', 'public/build/css/fonts')
       
       .version([
       		'public/css/app.css',
       		'public/js/app.js',
       		'public/css/video.css',
          'public/js/video.js',
          'public/css/carousel.css',
          'public/js/carousel.js',
          'public/js/map.js',
       		'public/js/morphing-button.js',
       ]);
});