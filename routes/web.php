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

Route::get('/', 'AplicacaoController@index');
Route::get('/cadastroloja', 'LojaController@cadastroloja');
Route::post('/Salvar', 'LojaController@salvarloja');
Route::get('/lojas', 'LojaController@listalojas');
Route::post('/buscar', 'LojaController@buscar');
Route::get('/ip', 'IpController@ipbuscar');
Route::post('/listaip', 'IpController@insereip');
Route::post('/listaip/alterar', 'IpController@alterarip');
Route::post('/listaip/salvar', 'IpController@updateip');







