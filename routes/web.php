<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| General Contoroller routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', 'GeneralController@index')->name('index');

Route::get('/shevablog', 'GeneralController@shevablog')->name('shevablog');

Route::get('/test', 'GeneralController@test')->name('test');

/*
|
|
|--------------------------------------------------------------------------
| Admin User Contoroller routes
|--------------------------------------------------------------------------
|
|
*/

Route::resource('admin/', 'AdminUserController');

Route::get('admin/user', 'AdminUserController@user')->name('users');

/*
|
|
|--------------------------------------------------------------------------
| Admin Post Contoroller routes
|--------------------------------------------------------------------------
|
|
*/

Route::resource('admin/posts','AdminPostController');
