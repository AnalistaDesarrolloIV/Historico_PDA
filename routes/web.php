<?php

use App\Http\Controllers\HistoricoController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('filtro');
});


// Route::get('/hitoricoFiltro',[HistoricoController::class,'index'])->name('histotico.filtro');
Route::post('/hitoricoFiltro',[HistoricoController::class,'filtro'])->name('histotico.filtro');