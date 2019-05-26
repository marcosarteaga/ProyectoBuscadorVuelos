<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EnviarCorreo;
use DB;
use PDF;
use App\Pasajeros;
class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mailUsuario = auth()->user()->email;
        $mail = "prueba";
        \Mail::to($mailUsuario)->send(new EnviarCorreo($mail));
        return view('/factura');

    }

    public function generarFactura(){
        //$today = new \DateTime();
        //$today->format('Y-m-s H:i:s');
        $today=date("H");
        $today=(string)$today;
        $todayMayor=$today.':59';
        $todayMenor=$today.':00';
        $idUsuario = auth()->user()->id;
        $idPasajero =  Pasajeros::select('id')->where('IdUser',$idUsuario)->get();
        
        $arrayPasajeros= Pasajeros::select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento','Sexo')->where('IdUser',$idUsuario)->whereTime('created_at','>', \Carbon\Carbon::parse($todayMenor))->whereTime('created_at','<', \Carbon\Carbon::parse($todayMayor))->get();
        $arrayFechas = DB::table('billetes')->select('CiudadOrigen','CiudadDestino','FechaIda','FechaVuelta','HoraIda','HoraVuelta')->where('IdUser',$idUsuario)->get();

        $origen = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadOrigen)->get();
        $destino = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadDestino)->get();

        $mailUsuario = auth()->user()->email;
        $mail = "prueba";
        \Mail::to($mailUsuario)->send(new EnviarCorreo($mail));
 
        
        
        
         return view('/factura',['arrayPasajeros'=> $arrayPasajeros,'origen'=> $origen,'destino'=> $destino,'arrayFechas'=>$arrayFechas]);

    }

    public function indexFacturaPDF(){
        $today = new \DateTime();
        $today->format('Y-m-s H:i:s');
        $idUsuario = auth()->user()->id;
        $idPasajero =  Pasajeros::select('id')->where('IdUser',$idUsuario)->get();
        
        $arrayPasajeros= Pasajeros::select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento','Sexo')->where('IdUser',$idUsuario)->whereDate('created_at',$today)->get();
        $arrayFechas = DB::table('billetes')->select('CiudadOrigen','CiudadDestino','FechaIda','FechaVuelta','HoraIda','HoraVuelta')->where('IdUser',$idUsuario)->get();

        $origen = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadOrigen)->get();
        $destino = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadDestino)->get();

        return view('/vistaFacturaPDF',['arrayPasajeros'=> $arrayPasajeros,'origen'=> $origen,'destino'=> $destino,'arrayFechas'=>$arrayFechas]);
    }

    


   
}
