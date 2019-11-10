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

Route::get('/.well-known/acme-challenge/qt9KpE4Qk_AN4oK-zJjs9mFKdESh28ODuD6vzOGywnM', function () {
    return ('qt9KpE4Qk_AN4oK-zJjs9mFKdESh28ODuD6vzOGywnM');
});

Route::get('/.well-known/acme-challenge/YXSlmIDF6-rWzO0Ioc9t5GRO0xSwsw0qSQLThbGotac', function () {
    return ('YXSlmIDF6-rWzO0Ioc9t5GRO0xSwsw0qSQLThbGotac');
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
