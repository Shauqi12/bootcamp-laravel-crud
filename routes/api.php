<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use app\Http\Controllers;
use App\Http\Controllers\ProductController;

Route::get('/list',[ProductController::class, 'index']);
Route::get('/detail/{id}',[ProductController::class, 'show']);
Route::post('/add',[ProductController::class, 'add']);
Route::put('/edit/{id}',[ProductController::class, 'edit']);
Route::delete('/delete/{id}',[ProductController::class, 'delete']);
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
