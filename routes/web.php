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


Route::get( '/', 'pages@home');
Route::get('/contact' , 'pages@contact');
Route::post('/contact' , 'pages@postContact');
Route::get('/about' , 'pages@about');

Auth::routes();
Route::resource('posts' , 'postController');
Route::resource('categories' , 'categoriesController')->except(['create' , 'show']);
Route::resource('tags' , 'tagsController')->except(['create' , 'show']);

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/blogs','blogsController@index');
Route::get('/blogs/{slug}' ,'blogsController@single');
