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
    return view('chmboxWelcome');
});

Route::get('/contact-us', function () {
    return view('chmboxContactUs');
});

Route::get('/demo', function () {
    return view('chmboxLogin');
});

Route::get('/.well-known/acme-challenge/MXnh3rf9A6Mhj-nlJkXS11aedfxKp9ThgAjlY6a7RyI', function () {
    return ('MXnh3rf9A6Mhj-nlJkXS11aedfxKp9ThgAjlY6a7RyI');
});

Route::get('/.well-known/acme-challenge/a5xUmNRWmcz5PngkZrrEAfl8pxluAEZQigCxIqy5Y_E', function () {
    return ('a5xUmNRWmcz5PngkZrrEAfl8pxluAEZQigCxIqy5Y_E');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/passcode', 'ShowPasscode')->name('showPasscode');

Route::post('/compartments/borrow', 'CompartmentsController@borrow')->name('compartments.borrow');


//Route::post('/compartments/borrow',
//    [ 'as' => 'compartments.borrow',
//      'uses' => 'CompartmentsController@borrow'
//    ]);

Route::resource('compartments', 'CompartmentsController');
Route::resource('records', 'RecordsController');
