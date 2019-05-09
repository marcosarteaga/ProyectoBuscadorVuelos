<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SegundaOferta extends Model
{
    protected $table = 'oferta2';
    protected $fillable = [
        'id', 'nombre', 'ruta','created_at','updated_at'
    ];
}
