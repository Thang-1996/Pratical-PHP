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

Route::get('/',"WebController@index");
Route::post('/search',"WebController@searchBox");
Route::get("/new-book","WebController@newBook");
Route::post("/save-book","WebController@saveBook");
Route::get("/edit-book/{id}","WebController@editBook");
Route::put("/update-book/{id}","WebController@updateBook");
Route::delete("/delete-book/{id}","WebController@deleteBook");
