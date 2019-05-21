<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginAdmin extends Controller
{
    public function validarUser(Request $request){
    	$user = $request->input('user');
    	$password = $request->input('password');
    	$datosUser=DB::table('admin')->select('Nombre','Password')->get();
    	if ($user == $datosUser[0]->Nombre && $password == $datosUser[0]->Password) {
    		$arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(1);
        return view('backend',array('arrayClientes'=> $arrayClientes));
    	}else{
    		return view('/loginAdmin');
    	}

    }
}
