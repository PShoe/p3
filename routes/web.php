<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lorem-ipsum', 'p3Controller@index')->name('lorem-ipsum.index');
Route::get('/lorem-ipsum/create', 'p3Controller@create')->name('lorem-ipsum.create');
Route::post('/lorem-ipsum', 'p3Controller@store')->name('lorem-ipsum.store');
Route::get('/lorem-ipsum/{book}', 'p3Controller@show')->name('lorem-ipsum.show');
Route::get('/lorem-ipsum/{book}/edit', 'p3Controller@edit')->name('lorem-ipsum.edit');
Route::put('/lorem-ipsum/{book}', 'p3Controller@update')->name('lorem-ipsum.update');
Route::delete('/lorem-ipsum/{book}', 'p3Controller@destroy')->name('lorem-ipsum.destroy');
