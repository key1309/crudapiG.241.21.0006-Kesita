<?php

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

Route::post('mahasiswa/create', [MahasiswaController::class, 'store']);
Route::put('mahasiswa/update', [MahasiswaController::class, 'update']);
Route::get('mahasiswa/read/{nim}', [MahasiswaController::class, 'show']);
Route::delete('mahasiswa/delete/{nim}', [MahasiswaController::class, 'destroy']);
