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

Route::get('/', 'CusromerController@index')->name('list');

Route::get('/delete/{id}', 'CusromerController@delete')->name('delete');

Route::get('/update/{id}', 'CusromerController@getDataId')->name('getDataId');

Route::post('/update/{id}', 'CusromerController@update')->name('update');