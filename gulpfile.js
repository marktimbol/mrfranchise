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
    		'app.css'
    	], 'public/css/app.css')

      .webpack('app.js')

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

      // .copy('bower_components/flexslider/fonts', 'public/build/css/fonts')
       
       .version([
       		'public/css/app.css',
       		'public/js/app.js',
       		'public/css/video.css',
          'public/js/video.js',
          'public/css/carousel.css',
          'public/js/carousel.js',
       		'public/js/map.js',
       ]);
});