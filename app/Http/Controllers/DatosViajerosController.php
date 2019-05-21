<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pasajeros;

class DatosViajerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datosViajeros');
    }
    public function indexPagar()
    {
        return view('pagar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $numeroPasajeros = $request->input('NumeroDePasajeros');
        
        
        if ($request->input('IdBilleteVuelta')) {
            $i=1;
            while ( $i<= $numeroPasajeros) {

                $NombrePasajero = $request->input('NombrePasajero'.$i);
                $PrimerApellido = $request->input('Papellido'.$i);
                $SegundoApellido = $request->input('Sapellido'.$i);
                $NumeroDocumento = $request->input('NumeroDocumento'.$i);
                $SelectSexo = $request->input('SelectSexo'.$i);


                Pasajeros::create([
                    'Nombre'=>$NombrePasajero, 
                    'PrimerApellido'=>$PrimerApellido,
                    'SegundoApellido'=>$SegundoApellido,
                    'NumeroDocumento'=>$NumeroDocumento,
                    'Sexo'=>$SelectSexo
                ]);

                $i=$i+1;    
            }
            //dd($numeroPasajeros, $NombrePasajero , $PrimerApellido, $SegundoApellido ,$NumeroDocumento , $SelectSexo);
        }

        
        return view('pagar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
