<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\OtrosController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteController::class, 'clientesGet']);

Route::get('/clientes/{cedula}', [ClienteController::class, 'clienteGetCedula']);

Route::post('/clientes/ins', [ClienteController::class, 'clienteInsert']);
Route::get('/formulario/cins', function () {return view('postcliente');});

Route::post('/clientes/upd', [ClienteController::class, 'clienteUpdate']);
Route::get('/formulario/cupd', function () {return view('updcliente');});

Route::delete('/clientes/del', [ClienteController::class, 'eliminarCliente']);
Route::get('/formulario/cdel', function () {return view('deletecliente');});



Route::get('/productos', [ProductoController::class, 'productosGet']);

Route::get('/productos/{id_prod}', [ProductoController::class, 'productosGetID']);

Route::post('/productos/ins', [ProductoController::class, 'productosInsert']);
Route::get('/formulario/pins', function () {return view('postproducto');});

Route::post('/productos/upd', [ProductoController::class, 'productosUpdate']);
Route::get('/formulario/pupd', function () {return view('updproducto');});

Route::delete('/productos/del', [ProductoController::class, 'eliminarProducto']);
Route::get('/formulario/pdel', function () {return view('deleteproducto');});



Route::get('/promociones', [PromocionController::class, 'promocionesGet']);

Route::get('/promociones/{id_prom}', [PromocionController::class, 'promocionesGetID']);

Route::post('/promociones/ins', [PromocionController::class, 'promocionesInsert']);
Route::get('/formulario/oins', function () {return view('postpromocion');});

Route::post('/promociones/upd', [PromocionController::class, 'promocionesUpdate']);
Route::get('/formulario/oupd', function () {return view('updpromocion');});

Route::delete('/promociones/del', [PromocionController::class, 'eliminarpromocion']);
Route::get('/formulario/odel', function () {return view('deletepromocion');});



Route::get('/historial/{cedula}', [OtrosController::class, 'getHistorialVisita']);


