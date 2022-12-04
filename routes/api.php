<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\MahasiswaController;
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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::post('mahasiswa/create', [MahasiswaController::class, 'store']);
Route::put('mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('mahasiswa/read/{nim}', [MahasiswaController::class, 'show']);
Route::delete('mahasiswa/delete/{nim}', [MahasiswaController::class, 'destroy']);
//
Route::middleware('auth:sanctum')->group(function () {
    Route::post('mahasiswa/create2', [MahasiswaController::class, 'store']);
    Route::put('mahasiswa/update2', [MahasiswaController::class, 'update']);
    Route::get('mahasiswa/read2/{nim}', [MahasiswaController::class, 'show']);
    Route::delete('mahasiswa/delete2/{nim}', [MahasiswaController::class, 'destroy']);
});
