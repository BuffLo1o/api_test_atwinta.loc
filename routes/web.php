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

Route::get('/', 'HomeController@index')->name(@user);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/LOD', 'ListOfDepartmetsController@index')->name('LOD');

Route::get('/User', 'UserController@index')->name('User');

Route::get('/edit', 'EditController@index')->name('Edit');

Route::post('/edit','subEditController@index')->name('subEdit');





