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

Route::get('/', ['uses'=>'postController@allPost']);

Route::get('/about', function(){
    return view('about-me');
});

Route::get('/post/{id}',['uses'=>'postController@viewPost']);

Route::get('/search', ['uses'=>'searchController@search']);
