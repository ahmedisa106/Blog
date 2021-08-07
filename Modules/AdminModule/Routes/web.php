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

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->middleware('guest:admin')->group(function () {
    Route::get('/login', 'Auth\AuthController@login');
    Route::post('/login', 'Auth\AuthController@doLogin')->name('login');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::prefix('admin')->name('admin.')->middleware('admin:admin')->group(function () {
        Route::get('/', 'AdminModuleController@index');

        Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
    });
});






