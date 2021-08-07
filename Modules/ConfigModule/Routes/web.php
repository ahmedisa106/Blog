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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {

    Route::prefix('admin')->name('admin.')->middleware('admin:admin')->group(function () {
        Route::get('/data', 'LanguagesController@data')->name('languages.data');
        Route::post('/languages/active', 'LanguagesController@active')->name('languages.changeActive');
        Route::resource('languages', 'LanguagesController');
    });
});
