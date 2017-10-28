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

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);
Route::get('/about/',['uses'=>'Admin\AboutController@show','as'=>'about']);
Route::get('/article/',['uses'=>'Core@getArticles','as'=>'article']);
Route::resource('/pages','CoreResource');


//Route::controller('/w', 'PagesController');