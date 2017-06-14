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
use Illuminate\Http\Request;

Route::get('/', function () {
	return view('home');
});

Auth::routes();

Route::get('/backend', 'HomeController@index');
Route::get('/out', 'HomeController@out');


Route::get('/getAll/{cat}', 'PhotoController@getAll');
Route::post('/photos', 'PhotoController@store');