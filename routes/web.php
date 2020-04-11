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

//Read

Route::get('/', function () {
    return view('welcome');
});
Route::get('/authors','AuthorController@index')->name('authors.index');
Route::get('/authors/latest','AuthorController@latest')->name('authors.latest');
Route::get('/authors/show/{id}','AuthorController@show')->name('authors.show');
Route::get('/authors/search/{word}','AuthorController@search')->name('authors.search');

//  Create

Route::get('/authors/create','AuthorController@create')->name('authors.create');
Route::post('/authors/store','AuthorController@store')->name('authors.store');