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
    return view('index');
});
Route::get('/pchi', function () {
    return view('pchi');
});
Route::get('/pthc', function () {
    return view('pthc');
});
Route::get('/ihdc', function () {
    return view('ihdc');
});

// Route::post('contact_us', function () {
//     Alert::success('Sent', 'Sent Successfully');
//     return view('index');
// });

Route::post('/', 'ContactController@sent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
