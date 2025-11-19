<?php

use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/usuarios', [UsuariosController::class, 'index']);

Route::post('/usuarios', [UsuariosController::class, 'store']);


Route::get('/ejer2', [PedidosController::class, 'consulta2']);

Route::get('/ejer3', [PedidosController::class, 'consulta3']);

Route::get('/ejer4', [PedidosController::class, 'consulta4']);

Route::get('/ejer5', [UsuariosController::class, 'consulta5']);

Route::get('/ejer6', [PedidosController::class, 'consulta6']);

Route::get('/ejer7', [PedidosController::class, 'consulta7']);

Route::get('/ejer8', [PedidosController::class, 'consulta8']);

Route::get('/ejer9', [PedidosController::class, 'consulta9']);

Route::get('/ejer10', [PedidosController::class, 'consulta10']);

