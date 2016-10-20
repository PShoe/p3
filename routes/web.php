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
    return view('layouts.masterView');
});

Route::get('/lorem', 'LoremController@lorem');
Route::get('/user', 'UserController@user');

Route::get('/debugbar', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::info('Current environment: '.App::environment());
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Just demoing some of the features of Debugbar';

});

Route::get('/random', function() {

    $random = new Rych\Random\Random();
    return $random->getRandomString(8);

});

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
