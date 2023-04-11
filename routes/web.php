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
    $fecha_actual = date("Y-m-d");
    //sumo 1 día
    $fecha_limite = date("Y-m-d",strtotime($fecha_actual."-20  days"));

    $productos = DB::connection('sqlsrv2')->select('
        SELECT [ART_ARTICOLO] AS "CODIGO_ARTICULO"
        ,[ART_DES] AS "NOMBRE_ARTICULO"
        FROM [dbo].[DAT_ARTICOLI]
    ');

    // dd($productos);

    return view('filtro', compact('fecha_limite' , 'fecha_actual', 'productos'));
});


// Route::get('/hitoricoFiltro',[HistoricoController::class,'index'])->name('histotico.filtro');
Route::post('/hitoricoFiltro',[HistoricoController::class,'filtro'])->name('histotico.filtro');
Route::post('/hitoricoFiltro2',[HistoricoController::class,'filtro2'])->name('histotico.filtro2');
Route::post('/hitoricoFiltro3',[HistoricoController::class,'filtro3'])->name('histotico.filtro3');