<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class filtro extends Controller
{
    public function buscar(Request $request){
        $busqueda = $request->input('busqueda');
        $arrayClientes = DB::table('pasajeros')->where('Nombre','like','%'.$busqueda.'%')->orwhere('PrimerApellido','like','%'.$busqueda.'%')->orwhere('SegundoApellido','like','%'.$busqueda.'%')->paginate(5);

        $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
            
        return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);

    }
}
