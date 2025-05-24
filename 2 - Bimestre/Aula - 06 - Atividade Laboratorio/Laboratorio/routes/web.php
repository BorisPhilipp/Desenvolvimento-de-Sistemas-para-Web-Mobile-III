<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exames',[LabsController::class, 'index'])->name('exames.index');
Route::post('/exames',[LabsController::class, 'store'])->name('exames.store');