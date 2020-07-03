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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@store');

Route::get('/signup', function () {
    return view('user.form');
});
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/show/{pertanyaanId}', 'PertanyaanController@show');
Route::get('/pertanyaan/edit/{pertanyaanId}', 'PertanyaanController@edit');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::get('/jawaban/{pertanyaanId}/create', 'JawabanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/jawaban/{pertanyaanId}', 'JawabanController@index');
Route::post('/jawaban/{pertanyaanId}', 'JawabanController@store');
