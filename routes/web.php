<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}/edit','PostController@edit');
Route::get('/posts/{post}','PostController@show'); //{post}は何が入ってもいい変数
Route::delete('posts/{post}', 'PostController@delete');
Route::post('/posts','PostController@store');
Route::get('/image','PostController@photo');
Route::post('/image/posts','ImageController@store');
Route::get('/sure','PostController@dubug');