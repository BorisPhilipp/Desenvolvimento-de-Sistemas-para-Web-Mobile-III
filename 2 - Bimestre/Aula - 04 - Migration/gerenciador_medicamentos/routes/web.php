<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentoController;

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

Route::get('/medicamentos',[MedicamentoController::class, 'index'])->name('medicamentos.index');
Route::post('/medicamentos',[MedicamentoController::class, 'store'])->name('medicamentos.store');
Route::delete('/medicamentos/{quantidade}',[MedicamentoController::class, 'destry'])->name('medicamentos.destroy');
Route::post('/medicamentos/{quantidade}/edit',[MedicamentoController::class, 'edit'])->name('medicamentos.edit');