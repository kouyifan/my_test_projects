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


Route::resource('user', 'UserController');

Route::namespace('Front')->group(function () {
    Route::get('/','IndexController@home')->name('home');
    //登录、登出
    Route::get('/login','LoginController@login')->name('login');
    Route::post('/login','LoginController@store')->name('login');
    Route::get('/logout','LoginController@logout')->name('logout');
});