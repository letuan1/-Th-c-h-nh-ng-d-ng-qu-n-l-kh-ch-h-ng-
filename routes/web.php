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

Route::group(['middleware' => 'locale'], function () {
    Route::get('change-language/{language}', 'CusromerController@changeLanguage')
        ->name('user.change-language');

    Route::get('/', 'CusromerController@index')->name('list');

    Route::get('/delete/{id}', 'CusromerController@delete')->name('delete');

    Route::get('/update/{id}', 'CusromerController@getDataId')->name('getDataId');

    Route::post('/update/{id}', 'CusromerController@update')->name('update');

    Route::post('/insert', 'CusromerController@insert')->name('insert');

    Route::get('/view-insert', 'CusromerController@viewInsert')->name('viewInsert');
});
