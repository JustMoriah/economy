<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductosController;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('/product',[ProductController::class,'index']);
Route::get('/product/create',[ProductController::class,'create']);
Route::get('/product/{product}',[ProductController::class,'show']);
Route::post('/product',[ProductController::class,'store']);
Route::get('/product/{product}/editar',[ProductController::class,'edit']);
Route::put('/product/{product}',[ProductController::class,'update']);
Route::delete('/product/{product}',[ProductController::class,'destroy']);
