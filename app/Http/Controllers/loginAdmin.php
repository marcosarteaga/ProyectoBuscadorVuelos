<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginAdmin extends Controller
{
    
    
    public function validarUser(Request $request){
    	$user = $request->input('user');
    	$password = $request->input('password');
    	$datosUser=DB::table('users')->select('name','password')->get();
    	if ($user == $datosUser[0]->Nombre && password_verify($password , $datosUser[0]->Password)) {
    		$arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(1);
        return view('/backend',array('arrayClientes'=> $arrayClientes));
    	}else{
    		return view('/backend');
    	}

    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend');
    }
    
}
