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


//Rotas API Paciente
Route::get('/paciente', 'App\Http\Controllers\api\PacienteController@index'); //Exibi todas os pacientes
Route::get('/paciente/{id}', 'App\Http\Controllers\api\PacienteController@show'); //Exibi paciente por id os pacientes
Route::post('/paciente', 'App\Http\Controllers\api\PacienteController@store'); //Cadastra Paciente

//Rotas API Prontuario
Route::get('/consulta/{id}', 'App\Http\Controllers\api\ConsultaController@show'); //Exibi consulta por id Consulta
Route::get('/consulta', 'App\Http\Controllers\api\ConsultaController@index'); //Exibi Carregar todas as Consultas
Route::put('/consulta', 'App\Http\Controllers\api\ConsultaController@update'); //Atualiza a consulta
Route::post('/consulta', 'App\Http\Controllers\api\ConsultaController@store'); //Cadastra consulta
