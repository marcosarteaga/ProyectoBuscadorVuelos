<?php

namespace App\Http\Controllers;
use App\billetesVendidos;
use Illuminate\Http\Request;
use DB;

class billetes extends Controller
{
    public function showClientes()
    {	
    	$arrayClientes = DB::table('ventasClientes')->select('id','Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
        return view('backend',array('arrayClientes'=> $arrayClientes));

    }

    public function showBillete($id)
    {
    	$arrayBilletes = DB::table('billetes')->select('Origen','Destino','FechaIda','FechaVuelta','Precio')->where('idCliente', $id)->get();
    	return view('backend',array('arrayBilletes'=> $arrayBilletes));
    }



}
