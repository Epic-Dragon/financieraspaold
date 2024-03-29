<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/clients', 'ClientsController@index');
Route::middleware('auth:sanctum')->post('/clients', 'ClientsController@store');
Route::middleware('auth:sanctum')->post('/clients/{id}', 'ClientsController@update');
Route::middleware('auth:sanctum')->post('/clients/{id}', 'ClientsController@destroy');

Route::middleware('auth:sanctum')->get('/prestamos', 'PrestamosController@index');
Route::middleware('auth:sanctum')->post('/prestamos', 'PrestamosController@store');
Route::middleware('auth:sanctum')->get('/prestamos/names', 'PrestamosController@select');
Route::middleware('auth:sanctum')->post('/prestamos/{id}', 'PrestamosController@destroy');

Route::middleware('auth:sanctum')->get('/pagos', 'PagosController@index');