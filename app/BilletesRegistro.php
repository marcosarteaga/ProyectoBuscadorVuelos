<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BilletesRegistro extends Model
{
    protected $table = 'billetes';
    protected $fillable = [
        'id','idUser','idPasajeros', 'CiudadOrigen','CiudadDestino','FechaIda','FechaVuelta','HoraIda','HoraVuelta','EstadoBillete','EstadoPago','ComisionPrecio','Precio','PrecioTotal'
    ];
}
