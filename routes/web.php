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

// index route
Route::get('/', 'ProductController@index');
// end

// insert route
Route::get('productcreate/', 'ProductController@create');
Route::post('addProduct/', 'ProductController@store');
// end

// update route
Route::get('productEdit/{id}', 'ProductController@edit');
Route::post('updateProduct/{id}', 'ProductController@update');
// end

// delete route
Route::get('productDelete/{id}', 'ProductController@destroy');
// end

// show route
Route::get('productShow/{id}', 'ProductController@show');
// end

