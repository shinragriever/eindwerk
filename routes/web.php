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

Route::get('/','Front@index')->name('home');

Route::get('/shop', function(){
	return view('product');
});

Auth::routes();

 Route::get('/admin','AdminController@index')->name('admin');
 
Route::group(['middleware'=>'auth', 'middleware'=>'isAdmin','prefix' => 'admin'],function(){
    Route::resource('users','AdminUserController');
    Route::resource('categories','CategoryController');
    Route::resource('products','ProductController');
    Route::resource('genres','GenreController');
    
});

Route::get('test', function(){
    
    return view ('test');
});


Route::view('dropzone','dropzone');
Route::get('test/{id}','ProductImageController');