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

Route::get('/welcome', function () {
    return view('welcome');
});

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

/*
|
|
|--------------------------------------------------------------------------
| Login  Routes
|--------------------------------------------------------------------------
|Also handles social logins
|
|
*/

Route::get('/login/{provider}', 'SocialiteController@redirect');
Route::get('/login/{provider}/callback', 'SocialiteController@callback');


/*
|
|
|--------------------------------------------------------------------------
| Login  Routes
|--------------------------------------------------------------------------
|Handles tradition login system
|
|
*/

Route::get('/login', 'LoginController@login')->name('login');
Route::post('/login', 'LoginController@loginPost');
Route::get('/register', 'LoginController@register')->name('register');
Route::post('/register', 'LoginController@registerPost');

