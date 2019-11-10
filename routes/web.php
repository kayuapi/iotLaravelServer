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

Route::get('/.well-known/acme-challenge/qrTlNCnQnutH7cQg6PnyOkSOjmnmtJjuFuPuUxSHOyU', function () {
    return ('qrTlNCnQnutH7cQg6PnyOkSOjmnmtJjuFuPuUxSHOyU.Extf3OQO4-z_Lt01P8paCuy9K21GFytuGNT3-3sS53Q');
});

Route::get('/.well-known/acme-challenge/a5xUmNRWmcz5PngkZrrEAfl8pxluAEZQigCxIqy5Y_E', function () {
    return ('a5xUmNRWmcz5PngkZrrEAfl8pxluAEZQigCxIqy5Y_E.Extf3OQO4-z_Lt01P8paCuy9K21GFytuGNT3-3sS53Q');
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
