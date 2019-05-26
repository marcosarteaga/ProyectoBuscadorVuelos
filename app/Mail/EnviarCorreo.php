<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;
use DB;
use App\Pasajeros;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $archivoPDF)
    {
        $this->archivoPDF = $archivoPDF;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $today = new \DateTime();
        $today->format('Y-m-s H:i:s');
        $idUsuario = auth()->user()->id;
        $idPasajero =  Pasajeros::select('id')->where('IdUser',$idUsuario)->get();
        
        $arrayPasajeros= Pasajeros::select('id','Nombre','PrimerApellido','SegundoApellido','NumeroDocumento','Sexo')->where('IdUser',$idUsuario)->whereDate('created_at',$today)->get();
        $arrayFechas = DB::table('billetes')->select('CiudadOrigen','CiudadDestino','FechaIda','FechaVuelta','HoraIda','HoraVuelta')->where('IdUser',$idUsuario)->get();

        $origen = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadOrigen)->get();
        $destino = DB::table('ciudades')->select('Nombre')->where('id',$arrayFechas[0]->CiudadDestino)->get();

       
        $pdf=PDF::loadView('vistaFacturaPDF',['arrayPasajeros'=> $arrayPasajeros,'origen'=> $origen,'destino'=> $destino,'arrayFechas'=>$arrayFechas]);

        //$pdf->setPaper('A4', 'landscape');
        
        $nameUsuario = auth()->user()->name;
        //Donde guardar el documento
        $rutaGuardado = public_path().'/billetesPDF/';

        //Nombre del Documento.
        $nombreArchivo = time()."_".$nameUsuario.".pdf";     

        //Guardalo en una variable
        $output = $pdf->output();

        file_put_contents( $rutaGuardado.$nombreArchivo, $output);

        $ruta = $rutaGuardado.$nombreArchivo;
        
        return $this->view('mail.correopdf')
                    ->attach($ruta);
                    
                
    }
}
