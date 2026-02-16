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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', 'NewsController@index');
Route::get('/news/create', 'NewsController@create');
Route::get('/news/update', 'NewsController@update');
Route::get('/news/delete', 'NewsController@delete');
Route::get('/news/first_or_create', 'NewsController@firstOrCreate');
Route::get('/news/update_or_create', 'NewsController@updateOrCreate');