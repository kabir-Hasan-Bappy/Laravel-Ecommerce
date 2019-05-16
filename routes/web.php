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

Auth::routes(['verify'=> true]);

Route::get('/', 'HomeController@showWelcome')->name('home');



Route::get('/register', 'AuthController@showRegisterForm')->name('register');
Route::post('/register', 'AuthController@register');

Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');



Route::group(['middleware'=>'auth'], function(){
Route::get('/dashboard', 'DashboardController@showDashboard')->name('dashboard');

Route::get('/logout', 'AuthController@logout')->name('logout');

});



Route::get('/category/{slug}', 'HomeController@showCategory')->name('category.products');



