<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\JurusanController;
use App\Models\Mahasiswa;
use App\Models\Jurusan;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('mahasiswa', MahasiswaController::class);
Route::apiResource('jurusan', JurusanController::class);
Route::get('/backup/mahasiswa', function () {
    return Mahasiswa::with('jurusan')->get();
});
Route::get('/backup/jurusan', function () {
    return Jurusan::with('mahasiswas')->get();
});