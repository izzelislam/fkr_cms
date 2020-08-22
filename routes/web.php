<?php

use Illuminate\Support\Facades\Route;

Route::get('/','FrontPage\AllPostController@post')->name('index');
Route::get('/readmore/{id}/{slug}','FrontPage\AllPostController@readmore')->name('readmore');
Route::get('/koentar','FrontPage\CommentController@index')->name('comment.index');
Route::get('/koentar/{id}','FrontPage\CommentController@store')->name('comment.store');

Route::prefix('/admin')->middleware('auth')->namespace('Admin')->name('')->group(function(){
	Route::resource('/category','CategoryController');
	Route::resource('/article','ArticleController');
	Route::resource('/user','UserController');
	Route::get('/','DashboardController@index')->name('admin');
});

Route::prefix('/admin')->namespace('Admin')->group(function(){
	Route::get('/login', 'AuthController@login')->name('login');
	Route::post('/login-proceces', 'AuthController@loginProcces')->name('loginprocces');
	Route::get('/register', 'AuthController@register')->name('register');
	Route::post('/register-procces', 'AuthController@registerProcces')->name('registerprocces');
	Route::post('/logout', 'AuthController@logout')->name('logout');
});
