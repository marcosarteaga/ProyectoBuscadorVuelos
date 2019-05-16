<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class filtro extends Controller
{
    public function buscar(Request $request){
        $busqueda = $request->input('busqueda');
        $arrayClientes = DB::table('pasajeros')->where('Nombre','like','%'.$busqueda.'%')->orwhere('Apellidos','like','%'.$busqueda.'%')->paginate(1);

    	return view('backend',array('arrayClientes'=> $arrayClientes));

    }
}
