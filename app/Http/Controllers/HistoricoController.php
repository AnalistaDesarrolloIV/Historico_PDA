<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoController extends Controller
{
    
    public function filtro( Request $request)
    {
        $inp = $request->all();
        // dd($inp['fecha']);

        $histo = DB::select('
            SELECT 
            *
            FROM [dbo].[Historico_2]
            WHERE [FECHA_OPERACION] >= '."'". $inp['fecha']."'
            ORDER BY [MES] DESC, [DIA] DESC, [HORA] DESC"
            
        
        );
        // dd($histo);

        return view('Lista', compact('histo'));


    }
    public function filtro2( Request $request)
    {
        $inp = $request->all();
        // dd($inp);

        $histo = DB::select('
            SELECT 
            *
            FROM [dbo].[Historico_2]
            WHERE [FECHA_OPERACION] >= '."'". $inp['fecha']."'
            AND [CODIGO_ARTICULO] = '".$inp['producto']."'"
            
        
        );
        // dd($histo);

        return view('Lista', compact('histo'));


    }
    public function filtro3( Request $request)
    {
        $inp = $request->all();
        // dd($inp);

        $histo = DB::select('
            SELECT 
            *
            FROM [dbo].[Historico_2]
            WHERE [PEDIDO] = '."'". $inp['pedido']."'"
            
        
        );
        // dd($histo);

        return view('Lista', compact('histo'));


    }
}
