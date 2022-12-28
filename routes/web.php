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

Route::get('/', 'GreetController@welcome');
Route::get('/greetings/hello/gomez', 'GreetController@hello');

Route::get('/sum/num1/num2', 'CalcController@plus');
Route::get('/average/num1/num2/num3/num4/num5', 'CalcController@avg');

Route::get('/form', 'GreetController@porm');