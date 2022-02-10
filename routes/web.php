<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'GuestController@home')->name('home');
Route::get('/posts', 'GuestController@viewPostList')-> name('postList');
Route::get('/posts/show/{id}', 'GuestController@show')->name('show');

Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::middleware('auth') -> group(function() {
    Route::get('/posts/create', 'GuestController@create') ->name('create');
    Route::post('/posts/store', 'GuestController@store')-> name('store');
    Route::get('/posts/edit/{id}', 'GuestController@edit')->name('edit');
    Route::post('/posts/update/{id}', 'GuestController@update')->name('update');
    Route::get('/posts/delete/{id}', 'GuestController@delete')->name('delete');
});