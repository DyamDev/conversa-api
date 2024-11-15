<?php

use App\Http\Controllers\Api\DatosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('mapa', [DatosController::class, 'mapa']);

Route::post('zonasegura', [DatosController::class, 'zonasegura']);

Route::post('miclima', [DatosController::class, 'obtenerClimaMiUbicacion']);

Route::post('microfono', [DatosController::class, 'microfono']);


/* 
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum'); */
