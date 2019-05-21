<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasajeros extends Model
{
    protected $table = 'pasajeros';
    protected $fillable = [
        'id', 'Nombre', 'PrimerApellido','SegundoApellido','NumeroDocumento','Sexo'
    ];
}
