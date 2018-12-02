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

/* Contains all routes for the webpages */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/profile', 'PagesController@profile')->name('profile');
Route::get('/diet', 'PagesController@diet')->name('diet');
Route::get('/calculator', 'PagesController@calculator')->name('calculator');
Route::get('/dissBoard', 'PagesController@dissBoard')->name('dissBoard');
Route::get('/programs', 'PagesController@programs')->name('programs');

/* Groups all admins routes together */
Route::prefix('admin')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.LoginForm');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'PagesController@admin')->name('admin.dashboard');
});