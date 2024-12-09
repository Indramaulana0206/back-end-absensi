<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AbsensiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::resource('/absensi', AbsensiController::class);
Route::get('/absensi', [AbsensiController::class, 'index']); // Get all data
Route::post('/absensi', [AbsensiController::class, 'store']); // Add new data
Route::get('/absensi/{id}', [AbsensiController::class, 'show']); // Get data by ID
Route::put('/absensi/{id}', [AbsensiController::class, 'update']); // Update data by ID
Route::delete('/absensi/{id}', [AbsensiController::class, 'destroy']); // Delete data by ID