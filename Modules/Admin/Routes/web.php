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

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@index')->name('admin.home');

    Route::prefix('category')->group(function(){
       Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
       Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
       Route::post('/create', 'AdminCategoryController@store');
       Route::get('/update/{id?}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
       Route::post('/update/{id?}', 'AdminCategoryController@update');
       Route::get('/{action}/{id?}', 'AdminCategoryController@action')->name('admin.get.action.category');
    });

    Route::prefix('product')->group(function () {
        Route::get('/','AdminProductController@index')->name('admin.get.list.product');
        Route::get('/create', 'AdminProductController@create')->name('admin.get.create.product');
        Route::post('/create', 'AdminProductController@store');
        Route::get('/update/{id?}', 'AdminProductController@edit')->name('admin.get.update.product');
        Route::post('/update/{id?}', 'AdminProductController@update');
        Route::get('/{action}/{id?}', 'AdminProductController@action')->name('admin.get.action.product');

    });

    Route::prefix('article')->group(function () {
        Route::get('/','AdminArticleController@index')->name('admin.get.list.article');
        Route::get('/create', 'AdminArticleController@create')->name('admin.get.create.article');
        Route::post('/create', 'AdminArticleController@store');
        Route::get('/update/{id}', 'AdminArticleController@edit')->name('admin.get.update.article');
        Route::post('/update/{id}', 'AdminArticleController@update');
        Route::get('/{action}/{id}', 'AdminArticleController@action')->name('admin.get.action.article');

    });

    //quanlydonhang
    Route::prefix('transaction')->group(function () {
        Route::get('/','AdminTransactionController@index')->name('admin.get.list.transaction');
        Route::get('/view/{id}', 'AdminTransactionController@viewOrder')->name('admin.get.view.order');
        Route::get('/delete/{id}', 'AdminTransactionController@deleteOrder')->name('admin.get.delete.order');
    });

    //quanlythanhvien
    Route::prefix('user')->group(function () {
        Route::get('/','AdminUserController@index')->name('admin.get.list.user');
    });

     //quanlydanhgia
     Route::prefix('rating')->group(function () {
        Route::get('/','AdminRatingController@index')->name('admin.get.list.rating');
    });
});
