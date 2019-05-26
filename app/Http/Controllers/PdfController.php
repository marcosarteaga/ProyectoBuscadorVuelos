<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Pasajeros;
use DB;

class PdfController extends Controller
{	

    public function descargarPDF(){

    	$today = new \DateTime();
        $today->format('Y-m-s H:i:s');
        $idUsuario = auth()->user()->id;
        $idPasajero =  Pasajeros::select('id')->where('IdUser',$idUsuario)->get();
        
        $arrayPasajeros= Pasajeros::select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento','Sexo')->where('IdUser',$idUsuario)->whereDate('created_at',$today)->get();
        $arrayFechas = DB::table('billetes')->select('CiudadOrigen','CiudadDestino','FechaIda','FechaVuelta','HoraIda','HoraVuelta')->where('IdUser',$idUsuario)->get();

        $origen = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadOrigen)->get();
        $destino = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadDestino)->get();

       


    	$pdf = PDF::loadView('vistaFacturaPDF',['arrayPasajeros'=> $arrayPasajeros,'origen'=> $origen,'destino'=> $destino,'arrayFechas'=>$arrayFechas]);
        //$pdf->setPaper('A4', 'landscape');

		return $pdf->download('Billetes.pdf');
    }
}
