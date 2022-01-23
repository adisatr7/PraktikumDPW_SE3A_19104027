<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentApiController;

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

// Menampilkan data siswa melalui API
Route::get('/student', [studentApiController::class, 'index']);
Route::get('/student/{id}', [studentApiController::class, 'getById']);
Route::get('/student/by_nim/{nim}', [studentApiController::class, 'getByNim']);

// Menambah data siswa melalui API
Route::post('/student', [studentApiController::class, 'save']);

// Mengubah data siswa melalui API
Route::put('/student/{id}', [studentApiController::class, 'update']);

// Menghapus data siswa melalui API
Route::delete('/student/{id}', [studentApiController::class, 'delete']);
