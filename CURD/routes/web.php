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
// View DS
Route::get('/', 'CategoryController@index');
// View Them
Route::get('/category/create', 'CategoryController@create');
//View Sua
Route::get('/category/{id}/edit','CategoryController@edit');
//View Xoa
Route::get('/category/{id}/delete','CategoryController@delete');

//Thao Tac Them
Route::post('/category','CategoryController@store');
//Thao Tac Sua
Route::post('/category/update/{id}','CategoryController@update');
//Thao Tac Xoa
Route::post('/category/destroy/{id}','CategoryController@destroy');


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
// View DS
Route::get('/product', 'ProductController@index');
// View Them
Route::get('/product/create', 'ProductController@create');
//View Sua
Route::get('/product/{id}/edit','ProductController@edit');
//View Xoa
Route::get('/product/{id}/delete','ProductController@delete');

//Thao Tac Them
Route::post('/product/store','ProductController@store');
//Thao Tac Sua
Route::post('/product/update/{id}','ProductController@update');
//Thao Tac Xoa
Route::post('/product/destroy/{id}','ProductController@destroy');
Route::post('/product/AddCart/{id}','ProductController@AddCart');
Route::get('/product/DeleteCart/{id}','ProductController@DeleteCart');



Route::get('/comment/{id}','CommentController@index');
Route::post('/comment/{id}/post','CommentController@post');

