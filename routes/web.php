<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

