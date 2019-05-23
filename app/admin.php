<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
	 use Notifiable;


	protected $table = 'admin'; 
    protected $guard = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nombre', 'Password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
}
