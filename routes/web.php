<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/member', 'MemberController@member');
Route::get ('/settings','SettingsController@settings');
Route::get('/home', 'HomeController@index');

Route::get('/payment', 'PaymentController@index');

Route::group(['prefix' => 'api/v1'], function () {
	Route::get('users', 'UserController@users');
});
