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
// HOME ROUTES
Route::get('/', function () {
    return view('layouts.masterView');
});

// LOREM ROUTES
#show form to create lorem text
Route::get('/lorem/create', 'loremController@create')->name('lorem.create');
#process form to create lorem text & display text
Route::post('/lorem', 'loremController@store')->name('lorem.store');

// USER ROUTES
#show form to create user info
Route::get('/user/create', 'userController@create')->name('user.create');
#process form to create user info & display generated users
Route::post('/user', 'userController@store')->name('user.store');

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
