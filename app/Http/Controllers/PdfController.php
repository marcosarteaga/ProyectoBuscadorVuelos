<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function descargarPDF(){
    	$pdf = PDF::loadView('factura');
		return $pdf->download('archivo.pdf');
    }
}
