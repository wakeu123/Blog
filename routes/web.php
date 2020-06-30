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


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Front')->group(function () {

    Route::get('/', [
        'as' => 'root_path',
        'uses' => 'AccueilController@index'
    ]);
});
