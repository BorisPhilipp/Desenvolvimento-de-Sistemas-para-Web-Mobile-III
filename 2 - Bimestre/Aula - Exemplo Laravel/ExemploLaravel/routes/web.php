<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

//rota pra lista produtos
Route::get('/produtos', [ProdutoController::class, 'index']);

//rota que recebe um parametro (ID do produto)
Route::get('/produtos/{id}', [ProdutoController::class, 'show']);