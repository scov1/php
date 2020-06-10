<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();


Route::redirect('/','/cars');
Route::resource('cars','CarController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
