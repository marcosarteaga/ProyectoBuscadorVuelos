<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrimeraOferta extends Model
{
    protected $table = 'oferta1';
    protected $fillable = [
        'id', 'nombre', 'ruta','created_at','updated_at'
    ];
}
