<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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

Route::get('barang', [MahasiswaController::class, 'index']);
Route::post('barang', [MahasiswaController::class, 'store']);
Route::get('barang/{item}', [MahasiswaController::class, 'show']);
Route::put('barang/{item}', [MahasiswaController::class, 'update']);
Route::delete('barang/{item}', [MahasiswaController::class, 'destroy']);
