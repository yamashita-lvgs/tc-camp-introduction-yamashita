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
    return view('welcome');
});

Route::get('users', 'UserController@index');
Route::get('users/create', 'UserController@showCreateScreen');
Route::post('users/create', 'UserController@create');
Route::get('users/{id}/edit', 'UserController@showEditScreen');
Route::post('users/{id}/edit', 'UserController@edit');
Route::get('users/{id}/delete/', 'UserController@delete');
Route::get('users/{id}/physicalDelete', 'UserController@physicalDelete');

