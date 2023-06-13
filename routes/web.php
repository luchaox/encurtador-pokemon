<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudantes', 'EstudanteController@index');
Route::get('/estudantes/create', 'EstudanteController@create');
Route::post('/estudantes', 'EstudanteController@store');
Route::get('/estudantes/{id}', 'EstudanteController@show');
Route::get('/estudantes/{id}/edit', 'EstudanteController@edit');
Route::put('/estudantes/{id}', 'EstudanteController@update');
Route::delete('/estudantes/{id}', 'EstudanteController@destroy');
Route::post('/estudantes', 'EstudanteController@store')->name('estudantes.store');
