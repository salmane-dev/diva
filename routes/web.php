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



Route::get('/', 'HelloController@index');

Route::get('/work', 'WorkController@index');

Route::post('/work', 'WorkController@store');

Route::get('/about', 'HelloController@about');

Route::get('/contact', 'HelloController@contact');

Route::get('/service', 'ServiceController@index');

Route::post('/service', 'ServiceController@store');

