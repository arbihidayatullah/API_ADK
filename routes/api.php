<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\RiwayatController;

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

Route::get('akun', [AkunController::class, 'index']);
Route::post('akun', [AkunController::class, 'store']);
Route::put('/akun/{id}', [AkunController::class, 'update']);
Route::delete('/akun/{id}', [AkunController::class, 'destroy']);

Route::get('history/{id}', [RiwayatController::class, 'index']);