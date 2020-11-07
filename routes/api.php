<?php

use App\Http\Controllers\CotizarController;
use App\Http\Controllers\CotizaruserController;
use App\Http\Controllers\EmpleoController;
use App\Http\Controllers\EmpleouserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SucursalController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getsucursales', [SucursalController::class, 'index']);

Route::get('empleos', [EmpleoController::class, 'index']);

//Route::get('departamentos', [SucursalController::class, 'depas']);

Route::post('postular_empleo', [EmpleouserController::class, 'postular_empleo']);

Route::post('cotizacion', [CotizaruserController::class, 'cotizacion']);

Route::get('gettitulosucursal', [SucursalController::class, 'titulo_sucursal']);
