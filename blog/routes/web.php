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

Route::get('page', 'IndexController@index');

Route::get('page/{id}', 'IndexController@show')->name('gaben');

Route::get('article/add', 'AddController@add');
Route::post('article/add', 'SaveController@save')->name('article');

Route::delete('article/delete/{article}', 'DeleteController@delete')->name('del');
