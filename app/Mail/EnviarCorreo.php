<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

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

       
        $pdf=PDF::loadView('factura');

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
