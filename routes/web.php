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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' =>'auth'], function() {
    Route::get('processSheet/create','Admin\ProcessSheetController@add');
    Route::post('processSheet/create', 'Admin\ProcessSheetController@create');
    Route::get('construction/create','Admin\ConstructionController@add');
    Route::post('construction/create', 'Admin\ConstructionController@create');
});