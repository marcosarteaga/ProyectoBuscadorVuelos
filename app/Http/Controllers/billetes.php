<?php

namespace App\Http\Controllers;
use App\billetesVendidos;
use Illuminate\Http\Request;
use DB;
use App\PrimeraOferta;
use App\SegundaOferta;
use App\TerceraOferta;
use Validator;
use App\pasajeros;
use Illuminate\Support\Facades\Auth;

class billetes extends Controller
{

  
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function showClientes()
    {	

    	$arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
      $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();

      $idUsuario = auth()->user()->id;
      
      $isAdmin = DB::table('users')->select('isAdmin')->where('id',$idUsuario)->get();
      if ($isAdmin[0]->isAdmin==1) {
        return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
      }
      else{
        return view('/login');
      }
      

    }

    public function showBillete($id)
    {	
    	$CiudadOrigen = DB::table('billetes')->select('CiudadOrigen')->where('idPasajeros', $id)->get();
    	$CiudadDestino = DB::table('billetes')->select('CiudadDestino')->where('idPasajeros', $id)->get();
    	
    	$origen = DB::table('ciudades')->select('Nombre')->where('id',$CiudadOrigen[0]->CiudadOrigen)->get();
    	$destino = DB::table('ciudades')->select('Nombre')->where('id',$CiudadDestino[0]->CiudadDestino)->get();
    	$arrayBilletes = DB::table('billetes')->select('HoraIDa','HoraVuelta','EstadoBillete','EstadoPago','ComisionPrecio','FechaIda','FechaVuelta','Precio')->where('idPasajeros', $id)->get();
    	return view('billetesPasajero',['arrayBilletes'=> $arrayBilletes,'origen'=> $origen,'destino'=> $destino]);
    }


    public function indexComision(){
      $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
      $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
      
      return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
    }

    public function updateComision(Request $request){
      $comision=$request->input('ComisionInput');
      //dd($comision);
      DB::table('comision')->where('id',1)->update(['comision'=>$comision]);
      $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
        return back();
      
    }

    public function storeOfertaImage(Request $request){

        if ($request->hasFile('archivoMultimedia1')) {
            $NumeroOferta = $request->input('ofertaSeleccionada');

            if ($NumeroOferta == 'oferta1') {

                $validation = Validator::make($request->all(), [
                'archivoMultimedia1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);
                if($validation->passes()){
                    $image = $request->file('archivoMultimedia1');
                    $new_name = time().$image->getClientOriginalName();
                    $image->move(public_path().'/oferta1/', $new_name);
                    $oferta1 = new PrimeraOferta;
                    $oferta1->nombre = $new_name;
                    $oferta1->save();
                    return response()->json([
                       'message'   => 'Imagen subida correctamente',
                       'class_name'  => 'alert-success'
                      ]);
                }
                else
                {
                return response()->json([
                   'message'   => $validation->errors()->all(),
                   'class_name'  => 'alert-danger'
                  ]);
                }
            }

            else{
                $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
                $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
                
                return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
            }

      }


      elseif ($request->hasFile('archivoMultimedia2')) {
            $NumeroOferta = $request->input('ofertaSeleccionada');

            if ($NumeroOferta == 'oferta2') {

                $validation = Validator::make($request->all(), [
                'archivoMultimedia2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);
                if($validation->passes()){
                    $image = $request->file('archivoMultimedia2');
                    $new_name = time().$image->getClientOriginalName();
                    $image->move(public_path().'/oferta2/', $new_name);
                    $oferta2 = new SegundaOferta;
                    $oferta2->nombre = $new_name;
                    $oferta2->save();
                    return response()->json([
                       'message'   => 'Imagen subida correctamente',
                       'class_name'  => 'alert-success'
                      ]);
                }
                else
                {
                return response()->json([
                   'message'   => $validation->errors()->all(),
                   'class_name'  => 'alert-danger'
                  ]);
                }
            }

            else{
                $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
                $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
                
                return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
            }

      }
      elseif ($request->hasFile('archivoMultimedia3')) {
            $NumeroOferta = $request->input('ofertaSeleccionada');

            if ($NumeroOferta == 'oferta3') {

                $validation = Validator::make($request->all(), [
                'archivoMultimedia3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
                ]);
                if($validation->passes()){
                    $image = $request->file('archivoMultimedia3');
                    $new_name = time().$image->getClientOriginalName();
                    $image->move(public_path().'/oferta3/', $new_name);
                    $oferta3 = new TerceraOferta;
                    $oferta3->nombre = $new_name;
                    $oferta3->save();
                    return response()->json([
                       'message'   => 'Imagen subida correctamente',
                       'class_name'  => 'alert-success'
                      ]);
                }
                else
                {
                return response()->json([
                   'message'   => $validation->errors()->all(),
                   'class_name'  => 'alert-danger'
                  ]);
                }
            }

            else{
                $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
                $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
                
                return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
            }

      }



      else{
            $arrayClientes = DB::table('pasajeros')->select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento')->paginate(5);
            $comisionActual = DB::table('comision')->select('comision')->where('id',1)->get();
            
            return view('backend',['arrayClientes'=> $arrayClientes,'comisionActual'=>$comisionActual]);
        }
    }

     public function showBilleteUser($id)
    { 

      $idPasajero = DB::table('pasajeros')->select('id')->where('IdUser', $id)->get();
      
      $CiudadOrigen = DB::table('billetes')->select('CiudadOrigen')->where('idPasajeros', $idPasajero[0]->id)->get();
      $CiudadDestino = DB::table('billetes')->select('CiudadDestino')->where('idPasajeros', $idPasajero[0]->id)->get();
      $origen = DB::table('ciudades')->select('Nombre')->where('id',$CiudadOrigen[0]->CiudadOrigen)->get();
      $destino = DB::table('ciudades')->select('Nombre')->where('id',$CiudadDestino[0]->CiudadDestino)->get();
      $arrayBilletes = DB::table('billetes')->select('HoraIDa','HoraVuelta','EstadoBillete','EstadoPago','FechaIda','FechaVuelta','Precio')->where('idUser', $id)->get();
      
      return view('verBilletesUser',['arrayBilletes'=> $arrayBilletes,'origen'=> $origen,'destino'=> $destino]);
    }









}
