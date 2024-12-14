<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\EvaluasiController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ChartController;

Route::get("/", function () {
    return view('login');
});

Route::get("/home", [HomeController::class, 'index']);

Route::get("/materi", [MateriController::class, 'index']);
Route::get("/video-pembelajaran", [MateriController::class, 'videoPembelajaran']);
Route::get("/materi-pembelajaran", [MateriController::class, 'materiPembelajaran']);

Route::get("/evaluasi", [EvaluasiController::class, 'index']);
Route::get("/soal-evaluasi", [EvaluasiController::class, 'soalEvaluasi']);
Route::get("/soal-evaluasi-2", [EvaluasiController::class, 'soalEvaluasi2']);
Route::get("/soal-evaluasi-3", [EvaluasiController::class, 'soalEvaluasi3']);

Route::get("/game", [GameController::class, 'index']);
Route::get("/game-proto", [GameController::class, 'game']);

Route::get("/chart", [ChartController::class, 'index']);

