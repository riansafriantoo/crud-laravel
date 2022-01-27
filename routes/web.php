<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/data_diri','DataController@index');
Route::post('/data_diri/create','DataController@create');
Route::get('/data_diri/{id}/edit','DataController@edit');
Route::post('/data_diri/update','DataController@update');
Route::get('/data_diri/{id}/delete','DataController@delete');
