<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultadoBilletes extends Model
{
    protected $table = 'consultabilletes';
    protected $fillable = [
        'id','FechaIda','FechaVuelta','HoraIda','HoraVuelta','Precio','CiudadOrigen','CiudadDestino'
    ];
}
