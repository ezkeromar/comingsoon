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
Route::get('sendmail', 'ContactController@contact');

Route::get('/{locale?}', function ($locale = null) {
    if (!empty($locale)) {
        App::setLocale($locale);
    } else {
        App::setLocale('en');
    }
    return view('welcome');
});