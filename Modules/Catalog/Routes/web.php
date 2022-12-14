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

Route::prefix('catalog')->group(function () {
    Route::get('/', 'CatalogController@index');
    //Route::get('/{code}/{product?}', 'CatalogController@category')->name('product');
    Route::get('/{code}/{recipe?}', 'CatalogController@category')->name('product');
    Route::post('/{code}/{recipe?}', 'CatalogController@category')->name('filter');
    Route::post('/filter/{code?}', 'CatalogController@category')->name('ajax_filter');
});

Route::get('/search', 'CatalogController@search')->name('search');
