<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasajeros extends Model
{
    protected $table = 'pasajeros';
    protected $fillable = [
        'id', 'IdUser','Nombre' ,'PrimerApellido','SegundoApellido','NumeroDocumento','Sexo','created_at','updated_at'
    ];

}
