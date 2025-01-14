<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/tambah-tugas', [DashboardController::class, 'addTugas'])->name('tugas');
Route::get('/edit-tugas/{id}', [DashboardController::class, 'editTugas'])->name('edit-tugas');
Route::post('/update-tugas/{id}', [DashboardController::class, 'updateTugas'])->name('update-tugas');
Route::get('/delete-tugas/{id}', [DashboardController::class, 'deleteTugas'])->name('delete-tugas');
