<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\IntervensiController;
use App\Http\Controllers\TipeController;
use App\Http\Controllers\UraianController;
use App\Models\Diagnosa;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

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

//akun
Route::get('akun', [AkunController::class, 'index']);
Route::post('akun', [AkunController::class, 'store']);
Route::put('/akun/{id}', [AkunController::class, 'update']);
Route::delete('/akun/{id}', [AkunController::class, 'destroy']);

//data
Route::get('data', [DataController::class, 'index']);
Route::post('data', [DataController::class, 'store']);
Route::put('/data/{id}', [DataController::class, 'update']);
Route::delete('/data/{id}', [DataController::class, 'destroy']);

//diagnosa
Route::get('diagnosa', [DiagnosaController::class, 'index']);
Route::post('diagnosa', [DiagnosaController::class, 'store']);
Route::put('/diagnosa/{id}', [DiagnosaController::class, 'update']);
Route::delete('/diagnosa/{id}', [DiagnosaController::class, 'destroy']);

//intervensi
Route::get('intervensi', [IntervensiController::class, 'index']);
Route::post('intervensi', [IntervensiController::class, 'store']);
Route::put('/intervensi/{id}', [IntervensiController::class, 'update']);
Route::delete('/intervensi/{id}', [IntervensiController::class, 'destroy']);

//Tipe
Route::get('tipe', [TipeController::class, 'index']);
Route::post('tipe', [TipeController::class, 'store']);
Route::put('/tipe/{id}', [TipeController::class, 'update']);
Route::delete('/tipe/{id}', [TipeController::class, 'destroy']);

//uraian
Route::get('uraian', [UraianController::class, 'index']);
Route::post('uraian', [UraianController::class, 'store']);
Route::put('/uraian/{id}', [UraianController::class, 'update']);
Route::delete('/uraian/{id}', [UraianController::class, 'destroy']);
