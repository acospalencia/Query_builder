<?php

use App\Http\Controllers\PedidosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Ruta generada automáticamente por Laravel (usada si se maneja autenticación con tokens)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Ruta para el ejercicio 2: Obtener pedidos del usuario con ID 2
Route::get('/ejer2', [PedidosController::class, 'consulta2']);

// Ruta para el ejercicio 3: Información detallada de pedidos y usuarios
Route::get('/ejer3', [PedidosController::class, 'consulta3']);

// Ruta para el ejercicio 4: Pedidos cuyo total esté entre 100 y 250
Route::get('/ejer4', [PedidosController::class, 'consulta4']);

// Ruta para el ejercicio 5: Usuarios cuyo nombre empieza con R
Route::get('/ejer5', [UsuariosController::class, 'consulta5']);

// Ruta para el ejercicio 6: Número de pedidos del usuario con ID 5
Route::get('/ejer6', [PedidosController::class, 'consulta6']);

// Ruta para el ejercicio 7: Pedidos ordenados de mayor a menor total
Route::get('/ejer7', [PedidosController::class, 'consulta7']);

// Ruta para el ejercicio 8: Suma total del campo "total" de la tabla pedidos
Route::get('/ejer8', [PedidosController::class, 'consulta8']);

// Ruta para el ejercicio 9: Pedido más económico con nombre del usuario
Route::get('/ejer9', [PedidosController::class, 'consulta9']);

// Ruta para el ejercicio 10: Pedidos agrupados por usuario
Route::get('/ejer10', [PedidosController::class, 'consulta10']);
