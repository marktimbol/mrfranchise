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


Route::get('our-brands', 'BrandsController@index');
Route::get('our-process', 'PagesController@ourProcess');
Route::get('just-sold', 'PagesController@justSold');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('faq', 'PagesController@faq');
Route::get('/brands/queens-chips', 'PagesController@queensChips');
Route::get('/brands/als-beef', 'PagesController@alsBeef');
Route::get('/brands/krush-burger', 'PagesController@krushBurger');
Route::get('/brands/nancys-pizza', 'PagesController@nancysPizza');
Route::get('/brands/eyescream-and-friends', 'PagesController@eyescream');

// Route::resource('brands', 'BrandsController', [
// 	'only'	 => ['index', 'show']
// ]);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function() {
	Route::get('/', 'Dashboard\DashboardController@index');
	Route::resource('brands', 'Dashboard\BrandsController');
});
