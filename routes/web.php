<?php

use App\Http\Controllers\VistasController;
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
Route::get('/', [VistasController::class, 'index']);
Route::get('/particulas', [VistasController::class, 'particulas'] );
Route::get('/alta', [VistasController::class, 'alta'] );
Route::get('/particula/{idparticula}', [VistasController::class, 'particula'] );
