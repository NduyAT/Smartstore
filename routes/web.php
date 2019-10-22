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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', function(){
	return view('index');
});
Route::get('/admin', 'AdminController@index')->name('admins.index')->middleware(['can:admin']);

Route::get('/admin/categories','CategoryController@index')->name('categories.index')->middleware(['can:admin']);
Route::post('/admin/categories','CategoryController@store')->name('categories.store')->middleware(['can:admin']);
Route::get('/admin/categories/create','CategoryController@create')->name('categories.create')->middleware(['can:admin']);
Route::delete('/admin/categories/{category}','CategoryController@destroy')->name('categories.destroy')->middleware(['can:admin']);
Route::get('/admin/products','ProductController@index')->name('products.index')->middleware(['can:admin']);