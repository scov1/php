<?php

use Illuminate\Support\Facades\Route;



Route::get('/','CarController@index')
    ->name('index');
Route::post('/cars/create','CarController@storeCar')
    ->name('cars.store');
