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

Route::get('/test', 'Test\TestController@index');
Route::get('/create', 'Test\TestController@create');
Route::post('/store', 'Test\TestController@store');
Route::get('/edit', 'Test\TestController@edit');
Route::post('/update', 'Test\TestController@update');
Route::resource('/resource','resource\ResourceController');
Route::get('/table', 'table\TableController@index');
Route::get('/data', 'table\TableController@data');