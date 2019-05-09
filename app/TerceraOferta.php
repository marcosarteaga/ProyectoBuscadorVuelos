<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TerceraOferta extends Model
{
    protected $table = 'oferta3';
    protected $fillable = [
        'id', 'nombre', 'ruta','created_at','updated_at'
    ];
}
