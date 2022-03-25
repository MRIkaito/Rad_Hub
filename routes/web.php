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

Auth::routes();
Route::get('/','PostController@index');//インデックスを見るのは誰でも自由．->middleware('auth')
Route::group(['middleware' => ['auth']], function(){
Route::get('/posts/create','PostController@create');
Route::get('/posts/{post}','PostController@show'); //{post}は何が入ってもいい変数．見るのは誰でも自由．
Route::get('/posts/{post}/edit','PostController@edit');
Route::put('/posts/{post}','PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::post('/posts','PostController@store');
Route::get('/categories/{category}','CategoryController@index');//カテゴリごとのインデックスは自由
Route::get('/users/{user}','UserController@index');//ユーザーごとのインデックスは自由に見れる
Route::get('/home', 'HomeController@index')->name('home');
});
// Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');