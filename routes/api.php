<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/paciente', 'App\Http\Controllers\api\PacienteController@index');
Route::get('/paciente/{id}', 'App\Http\Controllers\api\PacienteController@show');
Route::post('/paciente', 'App\Http\Controllers\api\PacienteController@store');
