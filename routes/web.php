<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome')->name('login');
});



Route::prefix('/admin')->middleware('auth')->namespace('Admin')->name('')->group(function(){
	Route::resource('/category','CategoryController');
	Route::get('/','DashboardController@index')->name('admin');
});

Route::prefix('/admin')->namespace('Admin')->group(function(){
	Route::get('/login', 'AuthController@login')->name('login');
	Route::post('/login-proceces', 'AuthController@loginProcces')->name('loginprocces');
	Route::get('/register', 'AuthController@register')->name('register');
	Route::post('/register-procces', 'AuthController@registerProcces')->name('registerprocces');
	Route::post('/logout', 'AuthController@logout')->name('logout');
});
