<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pasajeros;
use App\BilletesRegistro;

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

                $idUsuario = auth()->user()->id;
                $NombrePasajero = $request->input('NombrePasajero'.$i);
                $PrimerApellido = $request->input('Papellido'.$i);
                $SegundoApellido = $request->input('Sapellido'.$i);
                $NumeroDocumento = $request->input('NumeroDocumento'.$i);
                $SelectSexo = $request->input('SelectSexo'.$i);
                
                
                Pasajeros::create([
                    'Nombre'=>$NombrePasajero,
                    'IdUser'=>$idUsuario, 
                    'PrimerApellido'=>$PrimerApellido,
                    'SegundoApellido'=>$SegundoApellido,
                    'NumeroDocumento'=>$NumeroDocumento,
                    'Sexo'=>$SelectSexo
                ]);
                
                $i=$i+1;    
            }

            $idPasajeros= Pasajeros::select('id')->where('IdUser',$idUsuario)->get();
            $NumeroDeIdsPasajeros = count($idPasajeros);
            
            $idBilleteIda=$request->input('IdBilleteIda');
            $DatosBilleteIda=DB::table('billetesVentas')->select('CiudadOrigen','CiudadDestino','Fecha','HoraIda','Precio')->where('id',$idBilleteIda)->get();

            $idBilleteVuelta=$request->input('IdBilleteVuelta');

            $DatosBilleteVuelta=DB::table('billetesVentas')->select('Fecha','HoraIda','Precio')->where('id',$idBilleteVuelta)->get();

            $PrecioDosBilletes=$DatosBilleteIda[0]->Precio+$DatosBilleteVuelta[0]->Precio;

            $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
            
            $ComisionTotal = $comisionActual[0]->comision *2;
            
            $PrecioConComision=$PrecioDosBilletes+$ComisionTotal;
            


            $j=0;
            
            while ($j <= $NumeroDeIdsPasajeros-1) {

                BilletesRegistro::create([
                    'idUser'=>$idUsuario,
                    'idPasajeros'=>$idPasajeros[$j]->id,
                    'CiudadOrigen'=>$DatosBilleteIda[0]->CiudadOrigen,
                    'CiudadDestino'=>$DatosBilleteIda[0]->CiudadDestino,
                    'FechaIda'=>$DatosBilleteIda[0]->Fecha,
                    'FechaVuelta'=>$DatosBilleteVuelta[0]->Fecha,
                    'HoraIda'=>$DatosBilleteIda[0]->HoraIda,
                    'HoraVuelta'=>$DatosBilleteVuelta[0]->HoraIda,
                    'EstadoBillete'=>'Emitido',
                    'EstadoPago'=>'Pagado',
                    'ComisionPrecio'=>$ComisionTotal,
                    'Precio'=>$PrecioDosBilletes,
                    'PrecioTotal'=>$PrecioConComision
                ]);
                $j=$j+1;
                
            }
        
        }
        else{
            $i=1;
            while ( $i<= $numeroPasajeros) {

                $idUsuario = auth()->user()->id;
                $NombrePasajero = $request->input('NombrePasajero'.$i);
                $PrimerApellido = $request->input('Papellido'.$i);
                $SegundoApellido = $request->input('Sapellido'.$i);
                $NumeroDocumento = $request->input('NumeroDocumento'.$i);
                $SelectSexo = $request->input('SelectSexo'.$i);
                
                
                Pasajeros::create([
                    'Nombre'=>$NombrePasajero,
                    'IdUser'=>$idUsuario, 
                    'PrimerApellido'=>$PrimerApellido,
                    'SegundoApellido'=>$SegundoApellido,
                    'NumeroDocumento'=>$NumeroDocumento,
                    'Sexo'=>$SelectSexo
                ]);
                
                $i=$i+1;    
            }

            $idPasajeros= Pasajeros::select('id')->where('IdUser',$idUsuario)->get();
            $NumeroDeIdsPasajeros = count($idPasajeros);
            
            $idBilleteIda=$request->input('IdBilleteIda');
            $DatosBilleteIda=DB::table('billetesVentas')->select('CiudadOrigen','CiudadDestino','Fecha','HoraIda','Precio')->where('id',$idBilleteIda)->get();

            $idBilleteVuelta=$request->input('IdBilleteVuelta');

            $DatosBilleteVuelta=DB::table('billetesVentas')->select('Fecha','HoraIda','Precio')->where('id',$idBilleteVuelta)->get();

            $PrecioDosBilletes=$DatosBilleteIda[0]->Precio;

            $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
            
            $ComisionTotal = $comisionActual[0]->comision;

            $PrecioConComision=$PrecioDosBilletes+$ComisionTotal;

            $j=0;
            //dd($DatosBilleteIda[0]->Fecha);
            while ($j <= $NumeroDeIdsPasajeros-1) {

                BilletesRegistro::create([
                    'idUser'=>$idUsuario,
                    'idPasajeros'=>$idPasajeros[$j]->id,
                    'CiudadOrigen'=>$DatosBilleteIda[0]->CiudadOrigen,
                    'CiudadDestino'=>$DatosBilleteIda[0]->CiudadDestino,
                    'FechaIda'=>$DatosBilleteIda[0]->Fecha,
                    'FechaVuelta'=>null,
                    'HoraIda'=>$DatosBilleteIda[0]->HoraIda,
                    'HoraVuelta'=>'',
                    'EstadoBillete'=>'Emitido',
                    'EstadoPago'=>'Pagado',
                    'ComisionPrecio'=>$ComisionTotal,
                    'Precio'=>$PrecioDosBilletes,
                    'PrecioTotal'=>$PrecioConComision
                ]);
                $j=$j+1;
                
            }
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
