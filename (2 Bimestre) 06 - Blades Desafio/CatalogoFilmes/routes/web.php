<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/filmes',[FilmeController::class,'index'])->name('filmes.index');
Route::post('/filmes',[FilmeController::class,'store'])->name('filmes.store');
Route::delete('/filmes/{titulo}',[FilmeController::class,'destroy'])->name('filmes.delete'); //Rota para exclusão do filme
