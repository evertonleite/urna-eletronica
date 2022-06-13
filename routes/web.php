<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\RegistrarVotoController;
use App\Http\Controllers\GerarRelatorioController;

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

Route::get('/', [CandidatoController::class, 'index']);
Route::get('/registrarVotoView', [CandidatoController::class, 'index']);
Route::get('/relatorio', [GerarRelatorioController::class, 'showAll']);
Route::get('/relatorio{id}',[RegistrarVotoController::class, 'votar'])->name('registrarVoto');