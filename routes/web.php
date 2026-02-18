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

Route::get('/', 'NewsController@index')->name('home.index');
Route::get('/news', 'NewsController@index')->name('news.index');
Route::get('/news/category/{category}', 'NewsController@category')->name('news.category');
Route::get('/categories', 'CategoryController@index')->name('categories.index');

Route::get('/news/create', 'NewsController@create')->name('news.create');
Route::post('/news', 'NewsController@store')->name('news.store');
Route::get('/news/{news}', 'NewsController@show')->name('news.show');
Route::get('/news/{news}/edit', 'NewsController@edit')->name('news.edit');
Route::patch('/news/{news}', 'NewsController@update')->name('news.update');
Route::delete('/news/{news}', 'NewsController@destroy')->name('news.delete');



Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts.index');
