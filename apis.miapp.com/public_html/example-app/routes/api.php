<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\v1\productoscontroller;

use app\http\controller\v1\productoscontroller;
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

Route::get('/v1/productos',[productoscontroller::class, 'getitem']);
Route::get('/v1/productos',[productoscontroller::class, 'tore']);
Route::get('/v1/productos',[productoscontroller::class, 'putupdate']);
Route::get('/v1/productos',[productoscontroller::class, 'patchupdate']);
Route::get('/v1/productos',[productoscontroller::class, 'delete']);


Route::get('/v1/productos',[productoscontroller::class, 'obtener listado']);
Route::get('/v1/productos/{id}',[productoscontroller::class, 'obtener elemento']);
Route::post('/v1/productos',[productoscontroller::class, 'guardar']);
Route::put('/v1/productos',[productoscontroller::class, 'editarput']);
Route::patch('/v1/productos',[productoscontroller::class, 'editarpatch']);

Route::delete('/v1/productos/{id}',[productoscontroller::class,'eliminar']);
s