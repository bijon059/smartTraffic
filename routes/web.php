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
<<<<<<< HEAD
Route::get('/signup', 'TrafficController@register')->name('register');
=======
// Route::get('/', 'DataController@index')->name('login');
// Route::get('/', 'TrafficsController@index');
>>>>>>> 3c687df6040613f8208b337ee758bac9d3b6eb19

Route::get('/rfidData', 'DataController@rfidData')->name('getuid');

Route::get('/home', 'TrafficController@index')->name('index');

