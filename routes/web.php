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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CoronaController@chart');

Route::get('/data-corona', 'CoronaController@getDataCorona')->name('get_data_corona');

// Route::group(['prefix' => 'data'], function () {

   Route::get('/tuban', 'TubanController@index');

// });

