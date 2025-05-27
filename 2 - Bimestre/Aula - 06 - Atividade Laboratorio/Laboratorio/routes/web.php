<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabsController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/exames',[LabsController::class, 'index'])->name('exames.index');
Route::get('/exames/create',[LabsController::class, 'create'])->name('exames.create');
Route::post('/exames',[LabsController::class, 'store'])->name('exames.store');
Route::get('/exames/{exame}/edit',[LabsController::class, 'edit'])->name('exames.edit');
Route::put('/exames/{exame}',[LabsController::class, 'update'])->name('exames.update');
Route::delete('/exames/{exame}',[LabsController::class, 'destroy'])->name('exames.destroy');