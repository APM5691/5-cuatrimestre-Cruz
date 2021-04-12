<?php

use App\Http\Controllers\Api\DetallesMaterialesController;
use App\Http\Controllers\Api\DetallesVentasController;
use App\Http\Controllers\Api\DireccionesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\AuthenticationException;
use App\Http\Controllers\Api\UsuariosController;
use App\Http\Controllers\Api\ProductosController;
use App\Http\Controllers\Api\VentasController;
use App\Http\Controllers\Api\MaterialesController;
use App\Http\Controllers\Api\TipoDeJoyaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
});


Route::post('/tokens/create', function (Request $request) {
        $request->validate([
                'email' => 'required|email', 'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
                throw new AuthenticationException();
        }

        return [
                'token' => auth()->user()->createToken('test')->plainTextToken
        ];
});

Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('usuarios', UsuariosController::class)->except(['create', 'edit']);
        Route::apiResource('productos', ProductosController::class)->except(['create', 'edit']);
        Route::apiResource('ventas', VentasController::class)->except(['create', 'edit']);
        Route::apiResource('materiales', MaterialesController::class)->except(['create', 'edit']);
        Route::apiResource('direcciones', DireccionesController::class)->except(['create', 'edit']);
//falta
        Route::apiResource('tipo_de_joya',  TipoDeJoyaController::class)->except(['create', 'edit']);
        Route::apiResource('detalle_material', DetallesMaterialesController::class)->except(['create', 'edit']);
        Route::apiResource('detalle_ventas', DetallesVentasController::class)->except(['create', 'edit']);
});

