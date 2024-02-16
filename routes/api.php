<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\{BodegaController,DispositivoController,MarcaController,ModeloController};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('dispositivos')->group(function(){

    Route::get('/ObtenerDispositivosPorBodega',[DispositivoController::class,'getDispositivos']);

});

Route::prefix('bodegas')->group(function(){

    Route::get('/ObtenerBodega',[BodegaController::class,'getBodegas']);

});

Route::prefix('marcas')->group(function(){

    Route::get('/ObtenerMarcas',[MarcaController::class,'getMarcas']);

});

Route::prefix('modelos')->group(function(){

    Route::get('/ObtenerModelosPorMarca',[ModeloController::class,'getModelo']);

});
