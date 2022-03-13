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

Route::get('/','PostController@index')->middleware('auth');
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}/edit','PostController@edit');
Route::get('/posts/{post}','PostController@show'); //{post}は何が入ってもいい変数
Route::put('/posts/{post}','PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::post('/posts','PostController@store');
Route::get('/categories/{category}','CategoryController@index');
Route::get('/users/{user}','UserController@index');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();