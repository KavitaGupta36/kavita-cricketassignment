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

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/team','TeamController@index' );
Route::get('/players/{id?}', 'PlayerController@index')->name('players');
Route::get('/matchs', 'MatchController@index');
Route::get('/points', 'PointController@index');
Auth::routes();