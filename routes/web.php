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
    return redirect('/b3');
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/b3');
})->name('home');

Route::get('/profile', 'AccountController@getMyAccount');
Route::post('/profile', 'AccountController@postMyAccount');
