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

Route::get('/profile/{username}', 'ProfileController@profile');
Route::get('/home/hum', 'SubjectController@hum');
Route::get('/home/ssp', 'SubjectController@ssp');
Route::get('/home/mst', 'SubjectController@mst');
Route::get('/home/dpsm', 'SubjectController@dpsm');

Route::get('/home', 'HomeController@index');
Route::get('/subjects', 'SubjectController');