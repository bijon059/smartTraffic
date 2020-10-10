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

Route::get('/ridersignup', 'TrafficController@riderRegister')->name('ridersignup');


Route::get('/', 'TrafficController@index')->name('traffic');
Route::get('/traffic', 'TrafficController@showIndex')->name('index');
Route::post('/trafficInsert', 'TrafficController@insertFromTraffic')->name('insert.traffic');
Route::get('/rfidData', 'TrafficController@rfidData')->name('getuid');

