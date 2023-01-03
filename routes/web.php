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

Route::get('/', 'ContactController@home');
Route::post('/home/save', 'ContactController@contact_save');


Route::get('/edit/{id}', 'ContactController@contact_edit');
Route::post('/update/{id}', 'ContactController@contact_update');

// Route::get('/hello', 'GreetController@hello');

// Route::get('/form', 'GreetController@porm');