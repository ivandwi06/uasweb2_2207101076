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

Route::get('/listrik', 'ListrikController@index');

Route::get('/listrik/create', 'ListrikController@create'); 
Route::post('/listrik', 'ListrikController@store');

Route::get('listrik/{id}/edit', 'ListrikController@edit'); 
Route::patch('listrik/{id}', 'ListrikController@update');

Route::delete('listrik/{id}', 'ListrikController@destroy');

Route::get('/listrikk/search', 'ListrikController@search')->name('search');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
