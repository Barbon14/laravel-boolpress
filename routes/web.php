<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home')->name('home');
Route::get('/list', 'GuestController@viewPostList')-> name('postList');
Route::get('/list/post/create', 'GuestController@create') ->name('create');
Route::post('/list/post/store', 'GuestController@store')-> name('store');
Route::get('/list/post/show/{id}', 'GuestController@show')->name('show');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/register', 'Auth\RegisterController@register')->name('register');