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
Route::group(['namespace'=>'Home'], function(){
    Route::get('/', 'IndexController')->name('home.index');
});

Route::group(['namespace'=>'News'], function(){

    Route::get('/news', 'IndexController')->name('news.index');
    Route::get('/news/create', 'CreateController')->name('news.create');
    Route::post('/news', 'StoreController')->name('news.store');
    Route::get('/news/{news}', 'ShowController')->name('news.show');
    Route::get('/news/{news}/edit', 'EditController')->name('news.edit');
    Route::patch('/news/{news}', 'UpdateController')->name('news.update');
    Route::delete('/news/{news}', 'DestroyController')->name('news.delete');
    Route::get('/news/category/{category}', 'CategoryController')->name('news.category');
});

Route::group(['namespace'=>'Category'], function(){
    Route::get('/categories', 'IndexController')->name('categories.index');
});

Route::group(['namespace'=>'Admin'], function(){
    Route::get('/admin', 'IndexController')->name('admin.index');
    Route::group(['namespace'=>'News'], function(){
        Route::get('/admin/news', 'IndexController')->name('admin.news.index');
    });
    Route::group(['namespace'=>'Category'], function(){
        Route::get('/admin/categories', 'IndexController')->name('admin.categories.index');
    });
});
