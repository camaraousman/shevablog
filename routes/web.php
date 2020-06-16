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

Route::get('/', 'GeneralController@index')->name('index.home');

Route::get('/shevablog', 'GeneralController@shevablog')->name('shevablog');

Route::get('/test', 'GeneralController@test')->name('test');

//Home routes

Route::get('login', 'GeneralController@login')->name('login');
Route::get('register', 'GeneralController@register')->name('register');
Route::get('forgotPassword', 'GeneralController@forgotPassword')->name('forgotPassword');
Route::get('about', 'GeneralController@about')->name('about');
Route::get('contact', 'GeneralController@contact')->name('contact');

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
