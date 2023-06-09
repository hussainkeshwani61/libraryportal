<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
Route::get('/borrow', 'App\Http\Controllers\DashboardController@borrow')->name('borrow');
Route::get('/return', 'App\Http\Controllers\DashboardController@return')->name('return');
Route::post('/borrow-book', 'App\Http\Controllers\DashboardController@borrow_book')->name('borrow-book');
Route::post('/return-book', 'App\Http\Controllers\DashboardController@return_book')->name('return-book');
Route::get('/myaccount', 'App\Http\Controllers\DashboardController@myaccount')->name('myaccount');
