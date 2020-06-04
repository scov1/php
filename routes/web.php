<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MenuController@index');


Route::get('/about', 'MenuController@about');

Route::get('/users/{id}', function ($id) {
    return "This is a user" . $id;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
Route::resource('comments','CommentController');
Route::resource('tags','TagController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('comments/{post_id}',['uses'=>'CommentController@store','as'=>'comments.store']);
Route::put('comments/{id}',['uses'=>'CommentController@update','as'=>'comments.update']);
Route::get('comments/{id}/edit',['uses'=>'CommentController@edit','as'=>'comments.edit']);
//Route::delete('comments/{id}',['uses'=>'CommentController@destroy','as'=>'comments.destroy']);
//Route::get('comments/{id}/delete',['uses'=>'CommentController@delete','as'=>'comments.delete']);
