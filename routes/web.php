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
Route::get('/', 'homeController@index');


Route::get('/pbms', 'pbmsController@index');
Route::get('/pbms/{pbm}', 'pbmsController@show');
Route::get('/pbms/create', 'pbmsController@create');
Route::post('/pbms', 'pbmsController@store');
Route::get('/pbms/{pbm}/edit', 'pbmsController@edit');
Route::patch('/pbms/{pbm}', 'pbmsController@update');

Route::get('/users', 'usersController@index');
Route::get('/users/{pbm}', 'usersController@show');
Route::get('/users/create', 'usersController@create');
Route::post('/users', 'usersController@store');
Route::get('/users/{pbm}/edit', 'usersController@edit');
Route::patch('/users/{pbm}', 'usersController@update');

Route::get('/leveranciers', 'leveranciersController@index');
Route::get('/leveranciers/{pbm}', 'leveranciersController@show');
Route::get('/leveranciers/create', 'leveranciersController@create');
Route::post('/leveranciers', 'leveranciersController@store');
Route::get('/leveranciers/{pbm}/edit', 'leveranciersController@edit');
Route::patch('/leveranciers/{pbm}', 'leveranciersController@update');














