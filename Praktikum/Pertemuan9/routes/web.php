<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Ketika mengakses url beranda dengan method get,
// Maka akan diarahkan ke controller


// Laravel 7
// Route::get('/beranda', 'myController@index');

// Penulisan di laravel 8
Route::get('/beranda', [myController::class, 'index']);

// Langsung ke view
//Route::view('/beranda', 'beranda');

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store']);
Route::get('/student/{$id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{$id}/edit', [StudentController::class, 'update']);
Route::delete('/student/hapus/{$id}', [StudentController::class, 'destroy']);
