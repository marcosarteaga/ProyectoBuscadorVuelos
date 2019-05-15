<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BilletesVentas extends Model
{
    protected $table = 'billetesVentas';
    protected $fillable = [
        'id','Fecha','HoraIda','HoraLlegada','Precio','CiudadOrigen','CiudadDestino'
    ];
}
