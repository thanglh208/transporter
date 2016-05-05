<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/', function () {
	return view('welcome');
});
Route::get('/register', function() {
	return view('register');
});
Route::post('/register', 'UserController@register');
Route::get('/login', function() {
	return view('/auth/login');
});

Route::group(['middleware' => 'auth'], function() {

	Route::get('/orders', function() {
		return view('orders');
	});
	Route::post('/orders', 'UserController@order');
	//Route::get('/history', 'UserController@history');
});
Route::controller('history', 'UserController', [
    'getOrders'  => 'history.data',
    'getIndex' => 'history',
]);