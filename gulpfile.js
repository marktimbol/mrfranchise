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
        bowersPath + 'raleway/raleway.css',
        bowersPath + 'fontawesome/css/font-awesome.css',
        bowersPath + 'bootstrap/dist/css/bootstrap.css',
    		'app.css'
    	], 'public/css/app.css')

      .scripts([
        bowersPath + 'jquery/dist/jquery.js',
        bowersPath + 'bootstrap/dist/js/bootstrap.js',
        'modernizr.custom.js',
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

      .styles([
        'jquery-jvectormap.css',
      ], 'public/css/map.css')

      .scripts([
          'jquery-jvectormap.min.js',
          'jquery-jvectormap-world-mill.js',
          'map.js',
      ], 'public/js/map.js')

      .styles([
        'brand/video.css',
        'brand/carousel.css',
      ], 'public/css/brand.css')

      .scripts([
        'brand/carousel.js',
        'brand/video.js',
      ], 'public/js/brand.js')

      .copy('bower_components/bootstrap/dist/fonts', 'public/css/fonts')
      .copy('bower_components/flexslider/fonts', 'public/css/fonts')
      .copy('bower_components/fontawesome/fonts', 'public/fonts')
      .copy('bower_components/raleway/fonts', 'public/css/fonts');
       
       // https://github.com/laravel/elixir/issues/253
       // .version([
       // 		'public/css/app.css',
       //    'public/js/app.js',
       //    'public/css/brand.css',
       // 		'public/js/brand.js',
       // ]);
});