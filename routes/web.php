<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin','Admin\DashboardController@index')->name('admin');

Route::prefix('/admin')->namespace('Admin')->name('category.')->group(function(){
	Route::get('/category','CategoryController@index')->name('index');
	Route::get('/category/create','CategoryController@create')->name('create');
});
