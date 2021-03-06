<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BilletesVentas;

class BuscadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('/resultado');
    }


    public function resultadoBusqueda(Request $request)
    {

        $TipodDeViaje = $request->input('tipoViaje');

        $ciudadorigen = $request->input('ciudadOrigen');
        $ciudaddestino = $request->input('ciudadDestino');
        $fechaida = $request->input('fechaIda');
       

        if ($TipodDeViaje[0]=='Ida') {
            
            $resultadoBusqueda = BilletesVentas::select('id','Fecha','HoraIda','HoraLlegada','Precio','CiudadOrigen','CiudadDestino')->where('Fecha',$fechaida)->where('CiudadOrigen',$ciudadorigen)->where('CiudadDestino',$ciudaddestino)->get();
            $ciudadOrigenResultado = DB::table('ciudades')->select('Nombre')->where('id',$resultadoBusqueda[0]->CiudadOrigen)->get();
            $ciudadDestinoResultado = DB::table('ciudades')->select('Nombre')->where('id',$resultadoBusqueda[0]->CiudadDestino)->get();
            $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
            return view('/resultado',['resultadoBusquedaFinal'=>$resultadoBusqueda,'ciudaOrigenBusqueda'=>$ciudadOrigenResultado,'ciudadDestinoBusqueda'=>$ciudadDestinoResultado,'comisionActual'=>$comisionActual]);
        }
        else{
                 
            $fechavuelta = $request->input('fechaVuelta');

            $resultadoBusquedaIda = BilletesVentas::select('id','Fecha','HoraIda','HoraLlegada','Precio','CiudadOrigen','CiudadDestino')->where('Fecha',$fechaida)->where('CiudadOrigen',$ciudadorigen)->where('CiudadDestino',$ciudaddestino)->get();

            $resultadoBusquedaVuelta = BilletesVentas::select('id','Fecha','HoraIda','HoraLlegada','Precio','CiudadOrigen','CiudadDestino')->where('Fecha',$fechavuelta)->where('CiudadOrigen',$ciudaddestino)->where('CiudadDestino',$ciudadorigen)->get();

            $ciudadOrigenResultado = DB::table('ciudades')->select('Nombre')->where('id',$resultadoBusquedaIda[0]->CiudadOrigen)->get();
            $ciudadDestinoResultado = DB::table('ciudades')->select('Nombre')->where('id',$resultadoBusquedaIda[0]->CiudadDestino)->get();

            $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
            
            return view('/resultado',['resultadoBusquedaIda'=>$resultadoBusquedaIda,'resultadoBusquedaVuelta'=>$resultadoBusquedaVuelta,'ciudaOrigenBusqueda'=>$ciudadOrigenResultado,'ciudadDestinoBusqueda'=>$ciudadDestinoResultado,'comisionActual'=>$comisionActual]);
        }


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $oferta1 = DB::table('oferta1')->select('nombre')->latest()->first();
        $oferta2 = DB::table('oferta2')->select('nombre')->latest()->first();
        $oferta3 = DB::table('oferta3')->select('nombre')->latest()->first();
        $ciudades = DB::table('ciudades')->select('Nombre','id')->orderBy('Nombre','ASC')->get();
        return view('/home',['arrayOferta1'=> $oferta1,'arrayOferta2'=> $oferta2,'arrayOferta3'=> $oferta3,'ciudades'=>$ciudades]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
