<?php

namespace App\Http\Controllers;
use App\billetesVendidos;
use Illuminate\Http\Request;
use DB;
use App\PrimeraOferta;
use App\SegundaOferta;
use App\TerceraOferta;

class billetes extends Controller
{
    public function showClientes()
    {	
    	$arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
        return view('backend',array('arrayClientes'=> $arrayClientes));

    }

    public function showBillete($id)
    {
    	$arrayBilletes = DB::table('billetes')->select('Origen','Destino','FechaIda','FechaVuelta','Precio')->where('id', $id)->get();

    }

    public function storeOferta(Request $request){
    	if ($request->hasFile('archivoMultimedia')) {
    		

    		$NumeroOferta = $request->input('ofertaSeleccionada');

    		if ($NumeroOferta == 'oferta1') {
    			$file = $request->file('archivoMultimedia');
    			$name = time().$file->getClientOriginalName();
    			$file->move(public_path().'/oferta1/', $name);
    			$oferta1 = new PrimeraOferta;
	    		$oferta1->nombre = $name;
	    		$oferta1->ruta = $name;
	    		$oferta1->save();	
    		}
    		elseif ($NumeroOferta == 'oferta2') {
    			$file = $request->file('archivoMultimedia');
    			$name = time().$file->getClientOriginalName();
    			$file->move(public_path().'/oferta2/', $name);
    			$oferta1 = new SegundaOferta;
	    		$oferta1->nombre = $name;
	    		$oferta1->ruta = $name;
	    		$oferta1->save();
    		}
    		elseif ($NumeroOferta == 'oferta3') {
    			$file = $request->file('archivoMultimedia');
    			$name = time().$file->getClientOriginalName();
    			$file->move(public_path().'/oferta3/', $name);
    			$oferta1 = new TerceraOferta;
	    		$oferta1->nombre = $name;
	    		$oferta1->ruta = $name;
	    		$oferta1->save();
    		}

    		

    		$arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
        	return view('backend',array('arrayClientes'=> $arrayClientes));
    	}
    	else{
    		$arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
        	return view('backend',array('arrayClientes'=> $arrayClientes));
    	}
    }



}
