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

Route::get('/', 'DataController@index')->name('login');
Route::get('/signup', 'TrafficController@register')->name('register');


Route::get('/traffic', 'TrafficController@index')->name('traffic');
Route::get('/rfidData', 'TrafficController@rfidData')->name('getuid');

