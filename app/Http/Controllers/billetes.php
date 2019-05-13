<?php

namespace App\Http\Controllers;
use App\billetesVendidos;
use Illuminate\Http\Request;
use DB;
use App\PrimeraOferta;
use App\SegundaOferta;
use App\TerceraOferta;
use Validator;

class billetes extends Controller
{


  public function __construct(){
    $this->middleware('auth');
  }
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

    function storeOfertaImage(Request $request){

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
                $arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
                return view('backend',array('arrayClientes'=> $arrayClientes));
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
                $arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
                return view('backend',array('arrayClientes'=> $arrayClientes));
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
                $arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
                return view('backend',array('arrayClientes'=> $arrayClientes));
            }

      }



      else{
            $arrayClientes = DB::table('ventasClientes')->select('Nombre','Apellidos','CodiBillete','Pasaporte','Telefono','Ciudad','Pais')->get();
            return view('backend',array('arrayClientes'=> $arrayClientes));
        }
    }

}
