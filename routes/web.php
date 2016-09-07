<?php

use App\Brand;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/add', function() {
	Brand::create([
		'name'	=> 'Sample brand',
		'slug'	=> 'sample-brand',
		'website'	=> 'http://google.com'
	]);

	return 'Done';
});

Route::resource('brands', 'BrandsController', [
	'only'	 => ['index', 'show']
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
